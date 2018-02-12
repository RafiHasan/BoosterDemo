<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterControler extends Controller {
   public function insertform(){
      return view('/about');
   }
	
   public function insert(Request $request){
$email = $request->input('Email');
$firstname=$request->input('FirstName');
$lastname=$request->input('LastName');
$password = $request->input('Password');
$confirmpassword=$request->input('ConfirmPassword');
	
     // DB::insert('insert into student (name) values(?)',[$name]);
echo $confirmpassword;
if(strcmp($password,$confirmpassword)==0)
{
	DB::insert('insert into profile (FirstName,LastName,Email,Password) values(?,?,?,?)',[$firstname,$lastname,$email,$password]);

	DB::insert('insert into users (name,Email,Password) values(?,?,?)',[$firstname,$email,$password]);

	return redirect('/index');
}
   }

}