<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Services;
use App\Models\Portfolio;
use App\Models\Login_attempt;


class UserController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return $this->showDashboard();
        } else {
            return view('login');
        }
    }

    public function login(Request $request)
    {
        $remember = $request['remember-me'] == "on" ? true : false;

        $attempts = Login_attempt::where('created_at', '<', 'timestampadd(hour, -24, now())')->where('ip', '=', $request->ip())->count();


        if($attempts > 15)
        {
            return view('errors/httperror')->with('message', '429 Too Many Requests');
        }
         else if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], $remember)) {
            return $this->showDashboard();
        } else {
            // login failed
            $attempt = Login_attempt::create([
                'ip' => $request->ip(),
                'email' => $request['email'],
                'password' => $request['password'],
            ]);
            $attempt->save();

            return view('errors/httperror')->with('message', '401 Unauthorized');
        }
    }

    public function showDashboard()
    {
        $data = array();
        $data['Services'] = Services::all();
        $data['Portfolio'] = Portfolio::all();

        return view('dashboard')->with('data', $data);
    }
}