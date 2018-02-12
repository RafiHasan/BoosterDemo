<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class LoginControler extends Controller
{
    public function insertform(){
      return view('about');
   }



public function logout(){

    DB::table('users')->where('remember_token', Auth::user()->remember_token)->delete();
	return redirect('/index');
     
   }


	
   public function insert(Request $request){
   	$email = $request->input('Email');
    $password = $request->input('Password');

    $user = DB::table('profile')->select('FirstName','LastName','Email','Password','id')->where([['Email',$email],['Password',$password]])->get();

    foreach ($user as $use) {
    	echo $user[0]->FirstName;
    }

   	if(sizeof($user)>0)
     {echo "login success.<br/>";
 $use=$user[0];
$fuser = new User;
$fuser->id=$use->id;
//Auth::setUser($fuser);
Auth::login($fuser, true);
$id= Auth::user()->name;

echo   $id;
return redirect('index')->with('userInfo',$id);
} 
     // echo '<a href = "/index">Click Here</a> to go back.';
      else
     return redirect('/aboutus');
   }

   
}
