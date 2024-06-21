<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student; 

class studentController extends Controller
{
	function index()
	{
		$student=Student::get(); 
		return view('student/index',
		[
		 'student'=>$student
		]); 
		
	}
	
	
	
    function form()
	{
			return view('student/add');
	}
	
	function add(Request $request)
	{	
		// dd($request->all()); 
		$request->validate([
		'name'  =>'required', 
		'father'=>'required', 
		'mother'=>'required',
        'image'=>'required||max:20000'		
		]); 
		$name=$request->name.'.'.$request->image->extension(); 
	    $request->image->move(public_path('student'),$name); 
		
	    $student=new Student(); 
		$student->name=$request->name; 
		$student->father=$request->father;
		$student->mother=$request->mother;
		$student->Image=$name;
	
	       $student->save(); 
		   return back()->withSuccess('Your data is save'); 
	}
	
	function edit($id)
	{
		$data=Student::where('id',$id)->first(); 
		return view('student/edit',
		[
		 'student'=>$data
		]);
	}
	
	function update(Request $request,$id)
	{
	$request->validate([
		'name'  =>'required', 
		'father'=>'required', 
		'mother'=>'required',
        'image'=>'nullalbe||max:20000'		
		]); 
			
		$student=Student::where('id',$id)->first();
		if(isset($request->image))
		{	
		$name=$request->name.'.'.$request->image->extension(); 
	    $request->image->move(public_path('student'),$name); 
		$student->Image=$name;
		}
		$student->name=$request->name; 
		$student->father=$request->father;
		$student->mother=$request->mother;
		
		
	       $student->save(); 
		   return back()->withSuccess('Product Updatedd !!!!');
	}	
	
	
	function delete_id($id)
	{
		Student::where('id',$id)->delete();
		return back()->withSuccess('Item is Deleted'); 
	}
	
	
	
}