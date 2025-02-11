<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CustomUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('signup2');
    }

    public function register(Request $request)
    {
        // Validation logic goes here
        $data = $request->all();

        $validator = Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8', 
            'qualification' => 'required|string|in:Registered Nurse,Licensed Practical Nurse,Home Health Aide, Occupational Therapist,Physical Therapist',
        
        ]);
        
            // After creating the user


        // Check if validation fails
        if ($validator->fails()) {
          
            return redirect('register')->withErrors($validator)->withInput();            
        }

        switch ($data['qualification']) {
            case 'Home Health Aide':
                $role = 'non-skilled';
                break;
            case 'Registered Nurse':
            case 'Licensed Practical Nurse':
            case 'Occupational Therapist':
            case 'Physical Therapist':
                $role = 'skilled';
                break;
            default:
                $role = null;
                break;
        }

        $user = CustomUser::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'qualification' => $data['qualification'],
            'role'           => $role,
            
        ]);
       $user->is_admin = $user->email === 'admin@shadai.com';
        $user->save();
        Auth::login($user);

        return redirect('/');
    }


    public function showLoginForm()
    {
        return view('signin');
    }

    public function login(Request $request)
    {
    
    $validatedData = $request->validate([
        'login' => 'required|string',
        'password' => 'required',
    ]);
    $credentials = [
        'email' => $validatedData['login'],
        'password' => $validatedData['password'],
    ];

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->is_admin) {
            return redirect()->route('admin');
        } else {
            return redirect('/');
        }
    } else {
        return redirect()->route('login')
            ->withErrors(['login' => 'Invalid credentials please try again']);
    }

    }
    public function logout()
    {
        auth()->logout(); 
        return redirect('/');
    }

    
}
