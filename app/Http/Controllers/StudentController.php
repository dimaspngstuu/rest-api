<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student; 

class StudentController extends Controller
{
    //
    public function Index(){
         $student = student::getAllStudent();
         echo $student;
    }
}
