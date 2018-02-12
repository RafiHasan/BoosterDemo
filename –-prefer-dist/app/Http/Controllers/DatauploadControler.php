<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \Input as Input;
class DatauploadControler extends Controller {

   public function insertform(){
      return view('/about');
   }


public function showdetail(Request $request,$id = null){

$amount=$request->input('cash');

DB::table('basic')->where([['id',$id]])->increment('fundraised', $amount);


$user[0] = DB::table('profile')->select('FirstName','LastName','Picture','id')->get();
$user[1] = DB::table('basic')->select('projecttitle','shortblurb','fundingduration','fundinggoal','profileid','fundraised','id','projectdescription','projectvideo')->where([['id',$id]])->get();
    //->where([['Email',$email],['Password',$password]])
    session()->put('projectview', $user);
  return redirect('/project');
   }



public function edit(Request $request){


    $profileid= Auth::user()->id;

    $projectimage = $request->file('projectimage');

    $input = time();

    $destinationPath = public_path('/upload');

    $projectimage->move($destinationPath, $input);



$projectimage = $request->input('projectimage');
$projecttitle=$request->input('projecttitle');
$shortblurb=$request->input('shortblurb');
$projectlocation = $request->input('projectlocation');
$fundingduration = $request->input('fundingduration');
$fundinggoal = $request->input('fundinggoal');


$id = DB::table('basic')->insertGetId(
        array('projectimage'=> '/upload/'.$input,'projecttitle' => $projecttitle,'shortblurb'=>$shortblurb,'projectlocation'=>$projectlocation,'fundingduration'=>$fundingduration,'fundinggoal'=>$fundinggoal,'profileid'=>$profileid)
    );



//DB::insertGetId('insert into basic (projecttitle,shortblurb,projectlocation,fundingduration,fundinggoal) values(?,?,?,?,?)',[$projecttitle,$shortblurb,$projectlocation,$fundingduration,$fundinggoal]);

$request->session()->put('dataid', $id);

return redirect('/edit-story');
}

public function editstory(Request $request){


$projectvideo = $request->input('projectvideo');
$projectdescription=$request->input('projectdescription');
$risksandchallenges=$request->input('risksandchallenges');



$id=$request->session()->get('dataid');

DB::table('basic')->where('id', $id)->update(['projectdescription'=>$projectdescription,'risksandchallenges'=>$risksandchallenges,'projectvideo'=>$projectvideo]);

  return redirect('/edit-perks');
}

public function editperks(Request $request){


  $title = $request->input('title');
$pledgeamount=$request->input('pledgeamount');
$description=$request->input('description');
$estimateddelivery=$request->input('estimateddelivery');
$shippingdetails=$request->input('shippingdetails');



$id=$request->session()->get('dataid');

 DB::table('perks')->insertGetId(
        array('title'=>$title,'pledgeamount'=>$pledgeamount,'description'=>$description,'estimated delivery'=>$estimateddelivery,'shippingdetails'=>$shippingdetails,'basicid'=>$id)
    );


  return redirect('/index');
}

public function editdiscard(Request $request){

  return redirect('/index');
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

	return redirect('/about');
}
   }

}