<?php

namespace App\Http\Controllers;

use App\Classes\Tools;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Main extends Controller
{
    public function index()
    {
        // verify if user is logged in
        if (Tools::checkSession()) {
            return redirect()->route('home');
        } else {

            return redirect()->route('login');
        }
    }

    //================================================================
    private function checkSession()
    {
        return session()->has('user');
    }
    //================================================================
    public function login()
    {

        // verify if session already exist

        if (Tools::checkSession()) {
            return redirect()->route('index');
        }
        // display login form

        $error = session('error');
        $data = [];
        if (!empty($error)) {
            $data = [
                'error' => $error,
            ];
        }
        return view('login', $data);
    }

    //================================================================

    public function login_submit(LoginRequest $request)
    {

        // verify if was a form submition

        if (!$request->isMethod('post')) {
            return redirect()->route('index');
        }

        // verify if session already exist
        if (Tools::checkSession()) {
            return redirect()->route('index');
        }

        // validation

        $request->validated();

        // verify login data

        $email = trim($request->input('text-user'));
        $password = trim($request->input('text-password'));

        $user = User::where('email', $email)->first();

        // verify is user exists
        if (!$user) {
            session()->flash('error', 'Invalid login!');
            return redirect()->route('login');
        }

        // verify if password is correct

        if (!Hash::check($password, $user->password)) {
            session()->flash('error', 'Invalid login!');
            return redirect()->route('login');
        }

        // session creation (if login ok)

        session()->put('user', $user);

        return redirect()->route('index');
    }

    //================================================================

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('index');
    }

    //================================================================
    // HOME PAGE
    //================================================================
    public function home()
    {
        // verify is session exists
        if (!Tools::checkSession()) {
            return redirect()->route('login');
        }
        return view('home');
    }
}
