<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CustomUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class CourseController extends Controller
{
    public function showCourseDetails()
    {
        return view('courses.course-details');
    }

    public function showCourseList()
    {
        $completedCourseNames = DB::table('courses')
        ->where('completed_by',  Auth::id())
        ->pluck('course_name')
        ->toArray();
        $completedAnnualCourses = DB::table('courses')
        ->where('completed_by', Auth::id())
        ->where('course_type', 'annual')
        ->count();

    return view('courses.courses-list', [
        'completedCourseNames' => $completedCourseNames,
        'completedAnnualCourses' => $completedAnnualCourses
    ]);
}

    public function showOxygen()
    {
        return view('courses.oxygenTraining');
    }
    
    public function showTB()
    {
        return view('courses.tb-Training');
    }
    
    public function takeQuiz()
    {
        return view('courses.quizPage');
    }
    
    public function achc_course_details()
    {
        return view('courses.ACHCcourseDetails');
    }
    
     public function showACHC()
    {
        return view('courses.achcCourse');
    }
    
    public function showPBRI()
    {
        return view('courses.patientBillOfRight');
    }
    
     public function patientBillOfRightDetails()
    {
        return view('courses.patientBillOfRightDetails');
    }
    
      public function showRespiratoryDisorderDetails()
    {
        return view('courses.showRespiratoryDisorderDetails');
    }

    public function bagTechniqueProcedure()
    {
        return view('courses.bagTechniqueProcedure');
    }

    
     public function showRespiratoryDisorder()
    {
        return view('courses.showRespiratoryDisorder');
    }
    
     public function showCareSkinDetails()
    {
        return view('courses.showCareSkinDetails');
    }

    public function dementiaDetails()
    {
        return view('courses.dementiaDetails');
    }

    public function dementia()
    {
        return view('courses.dementia');
    }
    
    public function quizForDementia()
    {
        return view('courses.quizForDementia');
    }

    public function careSkin()
    {
        return view('courses.careSkin');
    }
    
    public function quizForPatientBillOfRight()
    {
        return view('courses.quizForPatientBillOfRight');
    }

    public function quizForBagTechnique()
    {
        return view('courses.quizForBagTechnique');
    }

    public function quizForCareOfSkin()
    {
        return view('courses.quizForCareOfSkin');
    }

    public function quizForOsha()
    {
        return view('courses.quizForOsha');
    }

    public function quizForRangeOfMotion()
    {
        return view('courses.quizForRangeOfMotion');
    }

    public function quizForRespiratoryDisdorder()
    {
        return view('courses.quizForRespiratoryDisorder');
    }

    public function quizForStrokeAndSeizure()
    {
        return view('courses.quizForStrokeAndSeizure');
    }
    public function quizForUnderstandingPain()
    {
        return view('courses.quizForUnderstandingPain');
    }
    public function strokeAndSeizureDetails()
    {
        return view('courses.strokeAndSeizureDetails');
    }

    public function strokeAndSeizure()
    {
        return view('courses.strokeAndSeizure');
    }

    public function rangeOfMotionDetails()
    {
        return view('courses.rangeOfMotionDetails');
    }

    public function rangeOfMotion()
    {
        return view('courses.rangeOfMotion');
    }

    public function mentalRetardation()
    {
        return view('courses.mentalRetardation');
    }

    public function mentalRetardationDetails()
    {
        return view('courses.mentalRetardationDetails');
    }

    public function quizForMentalRetardation()
    {
        return view('courses.quizForMentalRetardation');
    }

    public function understandingPain()
    {
        return view('courses.understandingPain');
    }
   
    public function understandingPainDetails()
    {
        return view('courses.understandingPainDetails');
    }

    public function emergencyManagement()
    {
        return view('courses.emergencyPlan');
    }

    public function quizForEmergencyManagement()
    {
        return view('courses.quizForEmergencyManagement');
    }

    public function oshaCourse()
    {
        return view('courses.oshaCourse');
    }

    public function infectionControl()
    {
        return view('courses.infectionControl');
    }

    public function infectionControlDetails()
    {
        return view('courses.infectionControlDetails');
    }

    public function showCertForInfectionControl()
    {   
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Infection Control: Proper Handwashing Technique",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
        ]);
        return redirect("/") ;
    }

    public function showCertForQualityManagement()
    {   
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Quality Management Plan",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
        ]);
        return redirect("/") ;
    }

    public function departmentPolicies()
    {
        return view('courses.departmentPolicies');
    }

    public function quizForDepartmentPolicies()
    {
        return view('courses.quizForDepartmentPolicies');
    }

    public function preventionOfAbuse()
    {
        return view('courses.preventionOfAbuse');
    }

    public function preventionOfAbuseDetails()
    {
        return view('courses.preventionOfAbuseDetails');
    }

    public function quizForPreventionOfAbuse()
    {
        return view('courses.quizForPreventionOfAbuse');
    }

    public function showCertForPreventionOfAbuse()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Prevention of Abuse and Exploitation",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
        ]);
        return redirect("/") ;
    }

  
    
    

    public function financialAbuse()
    {
        return view('courses.financialAbuse');
    }

    public function quizForFinancialAbuse()
    {
        return view('courses.quizForFinancialAbuse');
    }

    public function qualityManagement()
    {
        return view('courses.qualityManagement');
    }

    public function quizForQualityManagement()
    {
        return view('courses.quizForQualityManagement');
    }

    public function reportingIncident()
    {
        return view('courses.reportingIncident');
    }

    public function reportingIncidentDetails()
    {
        return view('courses.reportingIncidentDetails');
    }

    public function quizForReportingIncident()
    {
        return view('courses.quizForReportingIncident');
    }


    public function individualServicePlan()
    {
        return view('courses.individualServicePlan');
    }

    public function quizForIndividualServicePlan()
    {
        return view('courses.quizForIndividualServicePlan');
    }

    public function complaintResolution()
    {
        return view('courses.complaintResolution');
    }

    public function quizForComplaintResolution()
    {
        return view('courses.quizForComplaintResolution');
    }


    public function quizForInfectionControl()
    {
        return view('courses.quizForInfectionControl');
    }
    
    
    public function generateCert()
    {
        return view('courses.generateCert');
    }
    public function quizForTB()
    {
        return view('courses.quizForTB');
    }

    public function showCert()
    {
        $user = Auth::user(); 
         
    
        return view('courses.generateCert', [
            'user' => $user
         ]);

    }

    public function showCertForDementia()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->update([
        'course_name' => "Caring for patients with dementia",  
        'completed_by' => $user->id,
        'course_type' => "regular",
        'completion_date' => now()
    ]);
        return view('courses.certificateForDementia', [
            'user' => $user
         ]);
    }

    public function saveDementiaCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/dementiaCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }


    public function showCertForCareSkin()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->update([
        'course_name' => "Care of skin",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]);
        return view('courses.certificateForCareOfSkin', [
            'user' => $user
         ]);
    }

    public function saveCareOfskinCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/careOfSkinCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }

    public function showCertForAnnual()
    {
        $user = Auth::user();
        return view('courses.certificateForAnnual', [
            'user' => $user
        ]);
    }


    public function saveAnnualCert(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/annualCert.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }

    

    public function showCertForOshaCourse()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Occupational Safety and Health Administration",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]);
        return view('courses.certificateForOshaCourse', [
            'user' => $user
         ]);
    }

    public function saveOshaCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/OshaCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }



    public function showCertForPatientBillOfRight()
    {
        $user = Auth::user();
        DB::table('courses')
         ->insert([
        'course_name' => "Patient Bill Of Right",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]); 
        return view('courses.certificateForPatientBillOfRight', [
            'user' => $user
         ]);
    }


    public function savePatientBillOfRightCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/patientBillofRightsCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }


    public function showCertForBagTechnique()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Visit Bag Technique",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]);
        return view('courses.certificateForBagTechnique', [
            'user' => $user
         ]);
    }

    
    public function certForDepartmentPolicy()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Department-Issued Policies And Procedures",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
        ]);
        return redirect("/") ;
    }


    public function showCertForReportingIncident()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Critical Incident Reporting",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
        ]);
        return redirect("/") ;
    }

    public function showCertForMentalRetardation()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Mental Retardation",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
    ]);
    return redirect("/") ;
    }


    public function showCertForIndividualServicePlan()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Education on Individual Service Plan",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
        ]);
         return redirect("/") ;
    }

    public function showCertForFinancialAbuse()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Fraud & financial abuse prevention",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
        ]);
        return redirect("/") ;
    }

    
    
    public function showCertForComplaintResolution()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Complaint Resolution",  
        'completed_by' => $user->id,
        'course_type' => 'annual',
        'completion_date' => now()
        ]);
        return redirect("/") ;
    }

    public function saveBagTechniquesCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/bagTechniquesCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }

    public function showCertForRangeOfMotion()
    {
        $user = Auth::user();
        DB::table('courses')
         ->insert([
        'course_name' => "Range of motion and positioning",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]);
        return view('courses.certificateForRangeOfMotion', [
            'user' => $user
         ]);
    }


    public function saveRangeOfMotionCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/rangeOfMotionCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }

    public function showCertForRespiratoryDisorder()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Respiratory Disorder",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]);
        return view('courses.certificateForRespiratoryDisorder', [
            'user' => $user
         ]);
    }

    public function respiratoryDisorderCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/respiratoryDisorderCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }

    
    public function saveMentalRetardationCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/mentalRetardationCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }

    public function showCertForEmergencyManagement()
    {
        $user = Auth::user(); 
        DB::table('courses')
         ->insert([
        'course_name' => "Emergency Management Plan",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]);
        return view('courses.certificateForEmergencyManagement', [
            'user' => $user
         ]);
    }

    public function saveEmergencyPlanCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/emergencyManagementPlanCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }


    public function showCertForStrokeAndSeizure()
    {
        $user = Auth::user();
        DB::table('courses')
         ->insert([
        'course_name' => "Stroke And Seizure",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]);
        return view('courses.certificateForStrokeAndSeizure', [
            'user' => $user
         ]);
    }

    public function saveStrokeAndSeizureCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/strokeCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }

    public function showCertForTBINSERVICE()
    {
        $user = Auth::user(); 
        DB::table('courses')
        ->insert([
       'course_name' => "Education in Tuberculosis",  
       'completed_by' => $user->id,
       'completion_date' => now()
   ]);
        return view('courses.certificateForTB', [
            'user' => $user
         ]);
    }

    public function saveTuberculosisCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/tuberculosisCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }


    public function showCertForUnderstandingPain()
    {
        $user = Auth::user();
        DB::table('courses')
         ->insert([
        'course_name' => "Understanding Pain",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]);
        return view('courses.certificateForUnderstandingPain', [
            'user' => $user
         ]);
    }

    public function saveUnderstandingPainCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/understandingPainCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }


    public function showCertForACHC()
    {
        $user = Auth::user();
        DB::table('courses')
         ->insert([
        'course_name' => "ACHC",  
        'completed_by' => $user->id,
        'completion_date' => now()
    ]); 
        return view('courses.generateCert', [
            'user' => $user
         ]);
    }


    public function saveAchcCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/achcCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }

    public function showCertForOxygenTherapy()
    {
        $user = Auth::user();
        DB::table('courses')
         ->insert([
        'course_name' => "Oxygen Therapy",  
        'completed_by' => $user->id,
        'completion_date' => now()
         ]);
        return view('courses.certificateForOxygenTherapy', [
            'user' => $user
         ]);
    }

    public function saveOxygenTherapyCertificate(Request $request)
    {
        // Get the logged-in user's name
        $user = auth()->user();
        $fullName = $user->firstname . ' ' . $user->lastname;

        // Decode the Base64 PDF
        $pdfBase64 = $request->input('pdfBase64');
        $pdfData = base64_decode($pdfBase64);

        // Define folder path
        $folderPath = 'certificates/' . $fullName;

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Define the file path
        $filePath = $folderPath . '/oxygenTherapyCertificate.pdf';

        // Save the PDF to the server
        Storage::put($filePath, $pdfData);

        return response()->json([
            'message' => 'Certificate saved successfully!',
            'path' => Storage::url($filePath)
        ]);
    }
}
