<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function login()
  {
    return view('pages.auth.login');
  }

  public function post_login(Request $request)
  {
    $crendential = $this->validate($request, [
      'email' => 'required',
      'password' => "required"
    ]);

    if (Auth::attempt($crendential)) {
      return redirect()->to('/');
    } else {
      return back()->with('error', 'Something went wrong');
    }
  }

  public function register()
  {
    return view('pages.auth.register');
  }

  public function post_register(Request $request)
  {
    $data = $this->validate($request, [
      'name' => 'required|min:2',
      'email' => 'required|email',
      'password' => "required|min:6"
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    if (auth()->attempt($request->only(['email', 'password']), true)) {
      return redirect()->to('/');
    } else {
      return back()->with('error', 'Something went wrong');
    }
  }

  public function post_logout()
  {
    auth()->logout();
    return redirect()->to('auth.login');
  }
}
