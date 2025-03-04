<?php


namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function adminIndex()
    {
        $users = CustomUser::all();
        $totalUsers = $users->count();
        
        $totalCompletedCourses = DB::table('courses')->whereNotNull('completed_by')->count();

        return view('admin.index', compact('users', 'totalUsers'), ['totalCompletedCourses' => $totalCompletedCourses,

        'users' => $users,
        'totalCompletedCourses' => $totalCompletedCourses    
        ]);
    }

    public function viewUserActivity($id)
{
    $user = CustomUser::findOrFail($id);
    $folderPath = "certificates/" . $user->firstname . " " . $user->lastname;

    // Check if folder exists
    if (!Storage::exists($folderPath)) {
        return view('admin.user-activity', ['user' => $user, 'certificates' => []]);
    }

    // Get all certificate files
    $certificates = Storage::files($folderPath);

    return view('admin.user-activity', ['user' => $user, 'certificates' => $certificates]);
}

public function downloadCertificate(Request $request)
{
    $user = CustomUser::findOrFail($request->user);
    $filePath = "certificates/" . $user->firstname . " " . $user->lastname . "/" . $request->filename;

    if (!Storage::exists($filePath)) {
        return redirect()->back()->with('error', 'File not found.');
    }

    return Storage::download($filePath);
}


    public function showCompletedCourses()
    {
        $completedCourses = DB::table('courses')
        ->join('users', 'courses.completed_by', '=', 'users.id')
        ->select('courses.course_name', DB::raw('CONCAT(users.firstname, " ", users.lastname) AS name'), 'courses.completion_date', 'users.qualification', 'users.created_at')
        ->get();
        $users = CustomUser::all();
        $totalUsers = $users->count();
        $totalCompletedCourses = DB::table('courses')->whereNotNull('completed_by')->count();

        return view('admin.completedCourses', 
                    ['completedCourses' => $completedCourses,
                    'users' => $users,  
                    'totalUsers' => $totalUsers,
                    'totalCompletedCourses' => $totalCompletedCourses    
                    ]);  
    }

    public function makeAdmin(Request $request)
{
    $userId = $request->user_id;
   
    $user = CustomUser::findOrFail($userId);
    $user->is_admin = 1;  // Set the is_admin value to 1
    $user->save();  // Save the updated model

    return redirect()->back()->with('success', 'User made admin successfully!');
}

    public function createUser(Request $request)
    {
        // Simplified user creation logic
        User::create($request->all());

        return redirect()->route('admin.index')->with('success', 'User created successfully');
    }
}
