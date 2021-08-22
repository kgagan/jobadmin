<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\usertable;
use App\Models\Student;


class userauthcontroller extends Controller
{
    function login()
    {
             return view('auth.login');
    }
    function register()
    {
             return view('auth.register');
    }
    function create(Request $request)
    {    
         /* for show data on only on browser
         return $request->input(); */
          $request->validate([
              'name'=>'required',
              'email'=>'required|email|unique:usertables',
              'password'=>'required|min:5|max:12',
			  'mobile'=>'required|max:10',
			  'address'=>'required',
			  'city'=>'required',
			  'state'=>'required',
			  'country'=>'required',
			  'postcode'=>'required',
			  'dob'=>'required',
			  'qualification'=>'required',
          ]);

          /*  if validate then insert into database */
          $user = new usertable;
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = Hash::make($request->password);
		  $user->mobile = $request->mobile;
		  $user->address = $request->address;
		  $user->city = $request->city;
		  $user->state = $request->state;
		  $user->country = $request->country;
		  $user->postcode = $request->postcode;
		  $user->dob = $request->dob;
		  $user->qualification = $request->qualification;
		  $user->status=$request->get('status');
		  //$user->image = $request->file->store('public');
          $query=$user->save();
          if($query)
          {
                  return back()->with('success', 'you have successfully register');
          }else{
                  return back()->with('fail', 'something get wrong');
                }
	      
    }

    function check(Request $request)
    {    
      /*
       return $request->input();*/
      $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12',
      ]);
        //if form  validated successfully,the process login
      $user= usertable::where('email',"=", $request->email)->first();
        if($user)
        {
        //if($request->password == $user->password)
          if(Hash::check($request->password,$user->password)){
          //if password match,then redirect user to profile
          $request->session()->put('loggeduser', $user->id);
          return redirect('profile');
                   
        }
        else{
          return back()->with('fail','invalid password');
        }   
        } else{
          return back()->with('fail','no account found for this email');
        }  
    }

    function profile(){
      if(session()->has('loggeduser')){
      $user= usertable::where('id',"=",  session('loggeduser'))->first();
      $data  = [
          'loggeduserinfo'=>$user
      ];
      }

      return view('admin.profile', $data);
    }
    function logout(){
      if(session()->has('loggeduser')){
        session()->pull('loggeduser');
        return redirect('login');
      }

    }
	public function joblist()
   {
       $data=Student::paginate(3);
       return view('admin.joblist',compact('data'));
   }
   public function userdata()
   {
       $data=usertable::paginate(3);
       return view('admin.userdisplay',compact('data'));
   }
   public function deletedata($id)
   {
       $ob=usertable::find($id);
       $ob->delete();
       return redirect("userdisplay");
   }
   public function useredit($id)
   {
       $findrec=usertable::where('id',$id)->get();
       return view('admin.useredit', compact('findrec'));
   }
   public function usereditform(Request $request,$id='')
   {
       $user=usertable::find($id);
       if($request->isMethod('post'))
       {
        $user->name = $request->name;
          $user->email = $request->email;
          $user->password = Hash::make($request->password);
		  $user->mobile = $request->mobile;
		  $user->address = $request->address;
		  $user->city = $request->city;
		  $user->state = $request->state;
		  $user->country = $request->country;
		  $user->postcode = $request->postcode;
		  $user->dob = $request->dob;
		  $user->qualification = $request->qualification;
		  
          $user->save();
       }
       return redirect("/userdisplay");
   }
}
