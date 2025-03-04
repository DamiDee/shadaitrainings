<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PasswordResetController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//{comment} Token Authentication for registration
Route::get('verify/{token}', [AuthController::class, 'tokenVerification'])->name('verify');


// {comment} Token Authentication for forgotten password
Route::get('/forgotPassword', [AuthController::class, 'forgotPasswordForm'])->name('forgotPasswordForm');

// Route to handle the form submission for forgotten password request
Route::post('/forgotPassword', [AuthController::class, 'forgotPassword'])->name('forgotPassword');

// Route to show the form for setting a new password
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');

// Route to handle the form submission for setting a new password
Route::post('/reset-password', [AuthController::class, 'reset'])->name('password.update');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware(['admin'])->group(function () {
//     Route::get('/smt', [AdminController::class, 'adminIndex'])->name('smt');
// });
// Route::get('/smt', [AdminController::class, 'adminIndex'])->name('omo');

//CERTIFICATES
Route::post('/saveOshaCertificate', [CourseController::class, 'saveOshaCertificate']);
Route::post('/savePatientBillOfRightCertificate', [CourseController::class, 'savePatientBillOfRightCertificate']);
Route::post('/saveBagTechniquesCertificate', [CourseController::class, 'saveBagTechniquesCertificate']);
Route::post('/saveRangeOfMotionCertificate', [CourseController::class, 'saveRangeOfMotionCertificate']);
Route::post('/respiratoryDisorderCertificate', [CourseController::class, 'respiratoryDisorderCertificate']);
Route::post('/saveCareOfskinCertificate', [CourseController::class, 'saveCareOfskinCertificate']);
Route::post('/saveEmergencyPlanCertificate', [CourseController::class, 'saveEmergencyPlanCertificate']);
Route::post('/saveStrokeAndSeizureCertificate', [CourseController::class, 'saveStrokeAndSeizureCertificate']);
Route::post('/saveTuberculosisCertificate', [CourseController::class, 'saveTuberculosisCertificate']);
Route::post('/saveUnderstandingPainCertificate', [CourseController::class, 'saveUnderstandingPainCertificate']);
Route::post('/saveAchcCertificate', [CourseController::class, 'saveAchcCertificate']);
Route::post('/saveOxygenTherapyCertificate', [CourseController::class, 'saveOxygenTherapyCertificate']);
Route::post('/saveAnnualCert', [CourseController::class, 'saveAnnualCert']);





Route::get('/smt', [AdminController::class, 'adminIndex'])->name('smt')->middleware('admin.auth');
Route::get('/completedCourse', [AdminController::class, 'showCompletedCourses'])->name('admin.completedCourses')->middleware('admin.auth');

Route::post('/admin/create-user', [AdminController::class, 'createUser'])->name('admin.create-user');
Route::get('/ACHCcourseDetails', [CourseController::class, 'achc_course_details'])->name('ACHCcourseDetails');

Route::get('/course-details', [CourseController::class, 'showCourseDetails'])->name('course-details');
Route::get('/oxygenTraining', [CourseController::class, 'showOxygen'])->name('oxygenTraining')->middleware('auth');

Route::get('/achcCourse', [CourseController::class, 'showACHC'])->name('achcCourse')->middleware('auth');

Route::get('/tb-Training', [CourseController::class, 'showTB'])->name('tb-Training')->middleware('auth');

Route::get('/patientBillOfRight', [CourseController::class, 'showPBRI'])->name('patientBillOfRight')->middleware('auth');

Route::get('/patientBillOfRightDetails', [CourseController::class, 'patientBillOfRightDetails'])->name('patientBillOfRightDetails');

Route::get('/respiratoryDisorderDetails', [CourseController::class, 'showRespiratoryDisorderDetails'])->name('respiratoryDisorderDetails');

Route::get('/respiratoryDisorder', [CourseController::class, 'showRespiratoryDisorder'])->name('respiratoryDisorder')->middleware('auth');

Route::get('/careSkinDetails', [CourseController::class, 'showCareSkinDetails'])->name('careSkinDetails');

Route::get('/careSkin', [CourseController::class, 'careSkin'])->name('careSkin')->middleware('auth');

Route::get('/course-list', [CourseController::class, 'showCourseList'])->name('course-list')->middleware('auth');
;

Route::get('/take-quiz', [CourseController::class, 'takeQuiz'])->name('take-quiz')->middleware('auth');

Route::get('/showCertForOxygenTherapy', [CourseController::class, 'showCertForOxygenTherapy'])->name('showCertForOxygenTherapy')->middleware('auth');

Route::get('/understandingPainDetails', [CourseController::class, 'understandingPainDetails'])->name('understandingPainDetails');

Route::get('/understandingPain', [CourseController::class, 'understandingPain'])->name('understandingPain')->middleware('auth');

Route::get('/understandingPainDetails', [CourseController::class, 'understandingPainDetails'])->name('understandingPainDetails');

Route::get('/understandingPain', [CourseController::class, 'understandingPain'])->name('understandingPain')->middleware('auth');

Route::get('/strokeAndSeizureDetails', [CourseController::class, 'strokeAndSeizureDetails'])->name('strokeAndSeizureDetails');

Route::get('/strokeAndSeizure', [CourseController::class, 'strokeAndSeizure'])->name('strokeAndSeizure')->middleware('auth');

Route::get('/oshaCourse', [CourseController::class, 'oshaCourse'])->name('oshaCourse')->middleware('auth');

Route::get('/bagTechniqueProcedure', [CourseController::class, 'bagTechniqueProcedure'])->name('bagTechniqueProcedure')->middleware('auth');

Route::get('/quizForBagTechnique', [CourseController::class, 'quizForBagTechnique'])->name('quizForBagTechnique')->middleware('auth');

Route::get('/quizForCareOfSkin', [CourseController::class, 'quizForCareOfSkin'])->name('quizForCareOfSkin')->middleware('auth');

Route::get('/quizForOsha', [CourseController::class, 'quizForOsha'])->name('quizForOsha')->middleware('auth');

Route::get('/quizForRespiratoryDisdorder', [CourseController::class, 'quizForRespiratoryDisdorder'])->name('quizForRespiratoryDisdorder')->middleware('auth');

Route::get('/quizForStrokeAndSeizure', [CourseController::class, 'quizForStrokeAndSeizure'])->name('quizForStrokeAndSeizure')->middleware('auth');

Route::get('/quizForUnderstandingPain', [CourseController::class, 'quizForUnderstandingPain'])->name('quizForUnderstandingPain')->middleware('auth');

Route::get('/quizForRangeOfMotion', [CourseController::class, 'quizForRangeOfMotion'])->name('quizForRangeOfMotion')->middleware('auth');

Route::get('/quizForRangeOfMotion', [CourseController::class, 'quizForRangeOfMotion'])->name('quizForRangeOfMotion')->middleware('auth');

Route::get('/quizForPatientBillOfRight', [CourseController::class, 'quizForPatientBillOfRight'])->name('quizForPatientBillOfRight')->middleware('auth');

Route::get('/quizForTB', [CourseController::class, 'quizForTB'])->name('quizForTB')->middleware('auth');
Route::get('/quizForPatientBillOfRight', [CourseController::class, 'quizForPatientBillOfRight'])->name('quizForPatientBillOfRight')->middleware('auth');

Route::get('/quizForEmergencyManagement', [CourseController::class, 'quizForEmergencyManagement'])->name('quizForEmergencyManagement')->middleware('auth');
Route::get('/emergencyManagement', [CourseController::class, 'emergencyManagement'])->name('emergencyManagement')->middleware('auth');

Route::get('/dementiaDetails', [CourseController::class, 'dementiaDetails'])->name('dementiaDetails')->middleware('auth');
Route::get('/dementia', [CourseController::class, 'dementia'])->name('dementia')->middleware('auth');
Route::get('/quizForDementia', [CourseController::class, 'quizForDementia'])->name('quizForDementia')->middleware('auth');
Route::get('/showCertForMentalRetardation', [CourseController::class, 'showCertForMentalRetardation'])->name('showCertForMentalRetardation')->middleware('auth');


Route::get('/mentalRetardation', [CourseController::class, 'mentalRetardation'])->name('mentalRetardation')->middleware('auth');
Route::get('/mentalRetardationDetails', [CourseController::class, 'mentalRetardationDetails'])->name('mentalRetardationDetails')->middleware('auth');
Route::get('/quizForMentalRetardation', [CourseController::class, 'quizForMentalRetardation'])->name('quizForMentalRetardation')->middleware('auth');

Route::get('/infectionControl', [CourseController::class, 'infectionControl'])->name('infectionControl')->middleware('auth');
Route::get('/infectionControlDetails', [CourseController::class, 'infectionControlDetails'])->name('infectionControlDetails')->middleware('auth');
Route::get('/quizForInfectionControl', [CourseController::class, 'quizForInfectionControl'])->name('quizForInfectionControl')->middleware('auth');
Route::get('/showCertForInfectionControl', [CourseController::class, 'showCertForInfectionControl'])->name('showCertForInfectionControl')->middleware('auth');


Route::get('/departmentPolicies', [CourseController::class, 'departmentPolicies'])->name('departmentPolicies')->middleware('auth');
Route::get('/quizForDepartmentPolicies', [CourseController::class, 'quizForDepartmentPolicies'])->name('quizForDepartmentPolicies')->middleware('auth');
Route::get('/certForDepartmentPolicy', [CourseController::class, 'certForDepartmentPolicy'])->name('certForDepartmentPolicy')->middleware('auth');


Route::get('/preventionOfAbuse', [CourseController::class, 'preventionOfAbuse'])->name('preventionOfAbuse')->middleware('auth');
Route::get('/preventionOfAbuseDetails', [CourseController::class, 'preventionOfAbuseDetails'])->name('preventionOfAbuseDetails')->middleware('auth');
Route::get('/quizForPreventionOfAbuse', [CourseController::class, 'quizForPreventionOfAbuse'])->name('quizForPreventionOfAbuse')->middleware('auth');
Route::get('/showCertForPreventionOfAbuse', [CourseController::class, 'showCertForPreventionOfAbuse'])->name('showCertForPreventionOfAbuse')->middleware('auth');


Route::get('/showCertForAnnual', [CourseController::class, 'showCertForAnnual'])->name('showCertForAnnual')->middleware('auth');


Route::get('/financialAbuse', [CourseController::class, 'financialAbuse'])->name('financialAbuse')->middleware('auth');
Route::get('/quizForFinancialAbuse', [CourseController::class, 'quizForFinancialAbuse'])->name('quizForFinancialAbuse')->middleware('auth');
Route::get('/showCertForFinancialAbuse', [CourseController::class, 'showCertForFinancialAbuse'])->name('showCertForFinancialAbuse')->middleware('auth');


Route::get('/emergencyPlan', [CourseController::class, 'emergencyPlan'])->name('emergencyPlan')->middleware('auth');
Route::get('/quizForEmergencyManagement', [CourseController::class, 'quizForEmergencyManagement'])->name('quizForEmergencyManagement')->middleware('auth');

Route::get('/qualityManagement', [CourseController::class, 'qualityManagement'])->name('qualityManagement')->middleware('auth');
Route::get('/quizForQualityManagement', [CourseController::class, 'quizForQualityManagement'])->name('quizForQualityManagement')->middleware('auth');
Route::get('/showCertForQualityManagement', [CourseController::class, 'showCertForQualityManagement'])->name('showCertForQualityManagement')->middleware('auth');


Route::get('/reportingIncident', [CourseController::class, 'reportingIncident'])->name('reportingIncident')->middleware('auth');
Route::get('/reportingIncidentDetails', [CourseController::class, 'reportingIncidentDetails'])->name('reportingIncidentDetails')->middleware('auth');
Route::get('/quizForReportingIncident', [CourseController::class, 'quizForReportingIncident'])->name('quizForReportingIncident')->middleware('auth');
Route::get('/showCertForReportingIncident', [CourseController::class, 'showCertForReportingIncident'])->name('showCertForReportingIncident')->middleware('auth');


Route::get('/individualServicePlan', [CourseController::class, 'individualServicePlan'])->name('individualServicePlan')->middleware('auth');
Route::get('/quizForIndividualServicePlan', [CourseController::class, 'quizForIndividualServicePlan'])->name('quizForIndividualServicePlan')->middleware('auth');
Route::get('/showCertForIndividualServicePlan', [CourseController::class, 'showCertForIndividualServicePlan'])->name('showCertForIndividualServicePlan')->middleware('auth');


Route::get('/complaintResolution', [CourseController::class, 'complaintResolution'])->name('complaintResolution')->middleware('auth');
Route::get('/quizForComplaintResolution', [CourseController::class, 'quizForComplaintResolution'])->name('quizForComplaintResolution')->middleware('auth');
Route::get('/showCertForComplaintResolution', [CourseController::class, 'showCertForComplaintResolution'])->name('showCertForComplaintResolution')->middleware('auth');


Route::get('/admin/user-activity/{id}', [AdminController::class, 'viewUserActivity'])->name('admin.user.activity');
Route::get('/admin/download-certificate', [AdminController::class, 'downloadCertificate'])->name('admin.download.certificate');


Route::get('/rangeOfMotionDetails', [CourseController::class, 'rangeOfMotionDetails'])->name('rangeOfMotionDetails');
Route::get('/rangeOfMotion', [CourseController::class, 'rangeOfMotion'])->name('rangeOfMotion')->middleware('auth');

Route::get('/certificateForBagTechnique', [CourseController::class, 'showCertForBagTechnique'])->name('showCertForBagTechnique')->middleware('auth');
Route::get('/certificateForCareOfSkin', [CourseController::class, 'showCertForCareOfSkin'])->name('showCertForCareSkin')->middleware('auth');
Route::get('/certificateForOshaCourse', [CourseController::class, 'showCertForOshaCourse'])->name('showCertForOshaCourse')->middleware('auth');
Route::get('/certificateForOxygenTherapy', [CourseController::class, 'showCertForOxygenTherapy'])->name('showCertForOxygenTherapy')->middleware('auth');
Route::get('/certificateForPatientBillOfRight', [CourseController::class, 'showCertForPatientBillOfRight'])->name('showCertForPatientBillOfRight')->middleware('auth');
Route::get('/certificateForRangeOfMotion', [CourseController::class, 'showCertForRangeOfMotion'])->name('showCertForRangeOfMotion')->middleware('auth');
Route::get('/certificateForRespiratoryDisorder', [CourseController::class, 'showCertForRespiratoryDisorder'])->name('showCertForRespiratoryDisorder')->middleware('auth');
Route::get('/certificateForStrokeAndSeizure', [CourseController::class, 'showCertForStrokeAndSeizure'])->name('showCertForStrokeAndSeizure')->middleware('auth');
Route::get('/certificateForUnderstandingPain', [CourseController::class, 'showCertForUnderstandingPain'])->name('showCertForUnderstandingPain')->middleware('auth');
Route::get('/certificateForBagTechnique', [CourseController::class, 'showCertForBagTechnique'])->name('showCertForBagTechnique')->middleware('auth');
Route::get('/certificateForEmergencyManagement', [CourseController::class, 'showCertForEmergencyManagement'])->name('showCertForEmergencyManagement')->middleware('auth');
Route::get('/certificateForDementia', [CourseController::class, 'showCertForDementia'])->name('showCertForDementia')->middleware('auth');
Route::get('/certificateForMentalRetardation', [CourseController::class, 'showCertForMentalRetardation'])->name('showCertForMentalRetardation')->middleware('auth');
Route::get('/certificateForInfectionControl', [CourseController::class, 'showCertForInfectionControl'])->name('showCertForInfectionControl')->middleware('auth');



Route::view('/', 'index')->name('index');
