<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Session;
// use Facade\FlareClient\Http\Response;

class PostController extends Controller
{
   
   public function display_form()
   {
       return view("display_form");
   }
   public function form_submit(Request $request)
   {
      $add= new Student ();
      if($request->isMethod('post'))
      {
          $add->title=$request->get('title');
          $add->des=$request->get('des');
          $add->qual=$request->get('qual');
          $add->open=$request->get('open');
		  $add->dept=$request->get('dept');
		  $add->salary=$request->get('salary');
          $add->save();
      }
      return redirect("/display-data");
   }
   public function displaydata()
   {
       $data=Student::paginate(3);
       return view('display',compact('data'));
   }
   public function deletedata($id)
   {
       $ob=Student::find($id);
       $ob->delete();
       return redirect("display-data");
   }
   public function editdisp($id)
   {
       $findrec=Student::where('id',$id)->get();
       return view('edit', compact('findrec'));
   }
   public function editdata(Request $request,$id='')
   {
       $add=Student::find($id);
       if($request->isMethod('post'))
       {
        $add->title=$request->get('title');
          $add->des=$request->get('des');
          $add->qual=$request->get('qual');
          $add->open=$request->get('open');
		  $add->dept=$request->get('dept');
		  $add->salary=$request->get('salary');
          $add->save();
       }
       return redirect("/display-data");
   }
   
   
   
   public function home()
   {
      return view('home');
   }
   
}
