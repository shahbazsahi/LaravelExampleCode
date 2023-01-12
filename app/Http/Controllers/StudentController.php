<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use Exception;
use PDOException;
use Auth;

class StudentController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    function showStudents(){
        $students = Student::where('cgpa','>=', 0)
        ->orderBy('cgpa', 'desc')
        ->take(3)
        ->get();

        $data = ['students' => $students];
        return view('show_students', $data);
    }

    function addStudent(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->reg = $request->reg;
        $student->cgpa = $request->cgpa;
        try{
            if($student->save()){
                return redirect('showstudents')->with('status', true);
            }
        }
        catch(\Exception $e){
            return back()->withInput();
        }
    }
}
