<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      $this->validate($request, [
        //'matricno' => 'required|matricno',
        'password' => 'required|min:6'
      ]);

      if (Auth::guard('admin')->attempt(['matricno'=>$request->matricno, 'password'=>$request->password], $request->remember)){
        //if success, redirect to intended page
        return redirect()->intended(route('admindashboard'));

      }
      return redirect()->back()->withInput($request->only('matricno', 'remember'));
    }
}
