<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function Create()
    {
        return view('student.create');
    }
    public function Get()
    {
        $name="NAYAMET AULLAH";
        $id="19-39295-1";
        $courses=["Algo","c++","JAVA","DLC","Web tech"];
        return view('student.get')
        ->with('name',$name)
        ->with('id',$id)
        ->with('courses',$courses);
    }
    public function List()
    {
        $students=Student::all();
        // $students=array();
        // for($i=0;$i<5;$i++)
        // {
        //     $student =array(
        //         "id"=>$i+1,
        //         "name"=>"student  ".( $i+1),
        //         "dp"=>"cs"
        //     );
        //     $student=(object)$student;
        //     $students[]=$student;
        // }
        
        
        return view('student.list')
        ->with('students',$students);
    }

    public function details(Request $req)
    {
        return view('student.get')
        ->with('name',$req->name)
        ->with('id',$req->id)
        ->with('courses',[]);
    }
}
