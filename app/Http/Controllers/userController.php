<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class userController extends Controller
{

    public function logout() {
        Auth::logout();
        return redirect('/login'); // Redirect to a specific page after logout
    }

    public function loginView()
    {
        return view('auth.login');
    }
    public function registerView()
    {
        return view('auth.register');
    }
    public function register(Request $req)
    {
        $user = new User();
        $user->name = $req->fullname;
        $user->password = bcrypt($req->password);
        $user->userName = $req->username;
        $user->save();
        Auth::loginUsingId($user->id);
        return redirect()->intended('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('userName', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();
            if ($request->saveOnSession) {
                Session::put('user', $user);
            }
            return redirect()->intended('/');
        } else {
            // Authentication failed
            return redirect()
                ->back()
                ->withErrors(['error' => 'Invalid credentials']);
        }
    }
}
