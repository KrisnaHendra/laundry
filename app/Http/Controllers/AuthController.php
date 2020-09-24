<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
        public function getLogin()
      {
        return view('login');
      }

      public function postLogin(Request $request)
      {
        if(!auth()->attempt(['username'=>$request->username,'password'=>$request->password])){
          session()->flash('notif_login','Cek Username dan Password Anda!');
          return redirect()->back();
        }else if((auth()->user()->role_id) == 1 ){
          return redirect()->route('home');
        }else{
          return redirect()->route('home');
        }
      }

      public function getRegister()
      {
        return view('register');
      }

      public function postRegister(Request $request)
      {
        $this->validate($request,[
          'name' => 'required|min:4',
          'username' => 'required|unique:users,username',
          'email' => 'required|email|unique:users,email',
          'password' => 'required|min:4|confirmed'
        ]);
        // dd('Registrasi OK');
        $user = User::create([
          'name' => $request->name,
          'username' => $request->username,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'role_id' => '2',
        ]);
        // auth()->loginUsingId($user->id);
        session()->flash('message','Akun Berhasil Dibuat');
        return redirect('login');
      }

      public function logout()
      {
        auth()->logout();
        session()->flash('notif_logout','You Have Been Logged Out!');
        return redirect('/');
      }
}
