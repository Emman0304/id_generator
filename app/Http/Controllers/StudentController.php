<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student');
    }
    public function save(Request $request)
    {
        $student_name = $request->name;
        $student_id = Helper::IDGenerator(new Students,'student_id',5,'STD');

        $save = new Students();
        $save->student_id = $student_id;
        $save->name=$student_name;
        $save->save();

        return redirect()->route('student');
    }
}
