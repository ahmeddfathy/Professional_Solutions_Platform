<?php

namespace App\Http\Controllers;

use App\Models\technicians;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;


class EmailsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function showSignupForm()
    {
        return view('registrationSystem.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|string|min:2',
            'address' => 'nullable|string|max:255',
            'code' => 'nullable|string|max:255',
        ]);

        // Set default role to 'user'
        $role = 'user';

        // Check if the code is correct
        if ($request->code === 'admin') {
            // If the code is 'fathi', set the role to 'admin'
            $role = 'admin';
        }
        else if ($request->code === 'tech') {
            // If the code is 'fathi', set the role to 'admin'
            $role = 'technician';
        }

        // Hash the password
        $hashedPassword = Hash::make($request->password);

        // Create the technician with the determined role
        $technician = technicians::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
            'phone' => $request->phone,
            'address' => $request->address,
            'code' => $request->code,
            'role' => $role, // Set the role based on the code
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }


    /**
     * Show the form for logging in.
     */
    public function showLoginForm()
    {
        return view('registrationSystem.login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function login(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:user,admin,tech', // Ensure the provided role is valid
            'code' => 'nullable', // Code can be nullable
        ]);

        // Get user input
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');
        $code = $request->input('code');

        // Determine the dashboard based on the role
        switch ($role) {
            case 'user':
                $dashboard = 'client_requests.index';
                break;
            case 'admin':
                if ($code !== 'admin') {
                    return redirect()->route('login')->withErrors(['error' => 'Invalid admin code'])->withInput();
                }
                $dashboard = 'category.index';
                break;
            case 'tech':
                if ($code !== 'tech') {
                    return redirect()->route('login')->withErrors(['error' => 'Invalid tech code'])->withInput();
                }
                $dashboard = 'accepted_req.index';
                break;
            default:
                return redirect()->route('login')->withErrors(['error' => 'Invalid role'])->withInput();
        }


        $user = technicians::where('email', $email)->first();


        if ($user && Hash::check($password, $user->password)) {

            setcookie('user_id', $user->id, time() + (86400 * 30), "/");
            setcookie('user_name', $user->name, time() + (86400 * 30), "/");
            setcookie('user_email', $user->email, time() + (86400 * 30), "/");
            setcookie('user_role', $role, time() + (86400 * 30), "/");

            return redirect()->route($dashboard);
        } else {

            return redirect()->route('login')->withErrors(['error' => 'Invalid credentials'])->withInput();
        }
    }


    public function logout()
    {
        Auth::logout();

        // Set user-related cookies to "unknown"
        $response = Response::make(redirect('/'))
            ->withCookie(cookie('user_email', 'unknown'))
            ->withCookie(cookie('user_id', 'unknown'))
            ->withCookie(cookie('user_name', 'unknown'))
            ->withCookie(cookie('user_role', 'unknown'));

        return $response;
    }


}
