<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Http\Request;

use Session;


class LoginController extends Controller
{

 public function registerUser(Request $req){

$req->validate([
   'firstname'=>'required',
   'lastname'=>'required',
   'email'=>'required | email',
   'password'=>[
      'required',
      'string',
      'min:6',             // must be at least 10 characters in length
      'regex:/[a-z]/',      // must contain at least one lowercase letter
      'regex:/[A-Z]/',      // must contain at least one uppercase letter
      'regex:/[0-9]/',      // must contain at least one digit
      'regex:/[@$!%*#?&]/', // must contain a special character
  ]
]);

if(Registration::where('email', $req->input('email'))->exists()){
   Session::flash('registeredemailexist', 'Email Alraedy Exists! Please Try Another');
   return redirect('/register');
}

else{
$user = new Registration;
 $user->firstname = $req->input('firstname');
 $user->lastname = $req->input('lastname');
 $user->email = $req->input('email');
 $user->password = $req->input('password');
 $user->save();
 $email = $req->input('email');
 $req->session()->put('email', $email);
    return redirect('/home');
}

   }

 public function loginUser(Request $req){
   $req->validate([
      'email'=>'required',
      'pass'=>'required',
   ]);

   if(Registration::where('email', $req->input('email'))->exists()){
  $login = Registration::where('email', $req->input('email'))->get();
  if($login[0]->password == $req->input('pass')){
   $email = $req->input('email');
   $req->session()->put('email', $email);
      return redirect('/home');
  }
  else{
   Session::flash('loginpasswordincorrect', 'Pawword is incorrect Please Try Again');
   return redirect('/login');
  }
   }
   else{
      Session::flash('loginemailnotexist', 'Wrong Email! Please Enter Valid Email');
      return redirect('/login');
   }
 }


}
