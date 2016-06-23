<?php

namespace App\Http\Controllers;

use DB;
use DebugBar;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\CourseExam as CourseExam;
use App\Models\Student as Student;
use App\Models\Department as Department;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$department = Department::create(['code' => 'ABC', 'name' => 'Dept 1']);
      $student = Student::create(['name' => 'Mustafa', 'surname' => 'Tasdemir', 'stateID' => '43783805806', 'schoolID' => '2008510047', 'department_id' => '1']);
      //$student = Student::where('id', 1)->first();
      //$department = Department::where('id', 1)->first();
      //Debugbar::info($department->students);
      //Debugbar::info($student->department->name);
      $course_exam = CourseExam

        return view('welcome', ['students' =>  $department->students]);
    }
}
