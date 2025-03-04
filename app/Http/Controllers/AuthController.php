<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\CustomUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminController;

class AuthController extends Controller
{
    /**
     * Display the registration form.
     */
    public function showRegistrationForm()
    {
        return view('signup2');
    }

    /**
     * Handle user registration:
     * - Validate input
     * - Create a new user record
     * - Generate an OTP for email verification
     * - Send a verification email
     * - Display email-sent confirmation view
     */
    public function register(Request $request)
    {
        // Get all input data
        $data = $request->all();

        // Validate registration input
        $validator = Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'qualification' => 'required|string|in:Registered Nurse,Licensed Practical Nurse,Home Health Aide, Occupational Therapist,Physical Therapist',
        ]);

        if ($validator->fails()) {
            return redirect('register')->withErrors($validator)->withInput();
        }

        // Set role based on qualification
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

        // Generate verification token (OTP)
        $token = Str::random(6);

        // Create a new CustomUser record with the provided details and OTP
        $user = CustomUser::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'otp' => $token,
            'password' => Hash::make($data['password']),
            'qualification' => $data['qualification'],
            'role' => $role,
        ]);

        // Determine if the user is admin based on email
        //$user->is_admin = $user->email === 'admin@shadai.com';
        $user->save();

        // Prepare verification email details
        $details = [
            "name" => $request->firstname,
            "token" => $token
        ];

        // Send verification email
        Mail::send('emails.verify', $details, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Email Verification');
        });

        // Show confirmation view that email has been sent
        return view('emailSent');
    }

    /**
     * Verify the user via the OTP token:
     * - If valid, mark the user as verified and log them in
     * - Otherwise, display an error message
     */
    public function tokenverification($token)
    {
        $user = CustomUser::where('otp', $token)->first();
        if ($user) {
            $user->otp = "true"; // Mark user as verified
            $user->save();

            Auth::login($user);
            return redirect('/');
        } else {
            return back()->with('error', 'Invalid OTP');
        }
    }

    /**
     * Display the forgot password form.
     */
    public function forgotPasswordForm()
    {
        return view('forgotPasswordForm');
    }

    /**
     * Process the forgot password request:
     * - Validate the email input
     * - Generate a password reset token
     * - Save it in the user's record
     * - Send a password reset email
     */
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Generate a reset token and find the user
        $token = Str::random(20);
        $user = CustomUser::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'No user found with this email.');
        }

        $user->remember_token = $token;
        $user->save();

        // Prepare details for the password reset email
        $details = [
            "name" => $request->firstname,
            "token" => $token
        ];
        $email = $request->email;

        // Send the password reset email
        Mail::send('emails.change-password', $details, function ($message) use ($email, $details) {
            $message->to($email);
            $message->subject('Email Verification');
        });

        return view('emailSent');
    }

    /**
     * Display the reset password form.
     * The token is passed to the view as a hidden field.
     */
    public function showResetForm($token)
    {
        return view('newPassword', ['token' => $token]);
    }

    /**
     * Process the reset password form:
     * - Validate the token and new password inputs
     * - Find the user via the token
     * - Update the password and clear the token
     * - Redirect to the login page with a success message
     */
    public function reset(Request $request)
    {
        // Validate the input data
        $request->validate([
            'token' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Find the user by the password reset token
        $user = CustomUser::where('remember_token', $request->token)->first();

        if (!$user) {
            return back()->with('error', 'Invalid or expired token.');
        }

        // Update the user's password and clear the reset token
        $user->password = Hash::make($request->password);
        $user->remember_token = null;
        $user->save();

        // Redirect to the login page with a status message
        return redirect()->route('login')->with('status', 'Your password has been reset successfully. Please login with your new password.');
    }

    /**
     * Display the login form.
     */
    public function showLoginForm()
    {
        return view('signin');
    }

    /**
     * Process the login form:
     * - Validate credentials
     * - Ensure the user is verified
     * - Authenticate and redirect based on role or return errors on failure
     */
    public function login(Request $request)
    {
        // Validate login credentials
        $validatedData = $request->validate([
            'login' => 'required|string',
            'password' => 'required',
        ]);

        // Map the 'login' field to the email column
        $credentials = [
            'email' => $validatedData['login'],
            'password' => $validatedData['password'],
        ];

        // Check if the user's email has been verified (otp should be 'true')
        $user = CustomUser::where('email', $credentials['email'])->first();
        if ($user->otp != 'true') {
            return redirect()->route('login')->withErrors([
                'login' => 'Your account is not verified. Please check your email for the verification link.'
            ]);
        }

        // Attempt to authenticate
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Redirect admin users to admin dashboard, others to homepage
            if ($user->is_admin) {
                return redirect()->route('smt');
            } else {
                return redirect('/');
            }
        } else {
            return redirect()->route('login')
                ->withErrors(['login' => 'Invalid credentials, please try again.']);
        }
    }

    /**
     * Logout the current user.
     */
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
