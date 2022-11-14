<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 

class StudentController extends Controller
{
    //
    public function Index(){
         $student = Student::all();

         $data = [
            "message" => "ini adalah data student",
            "data" => $student
         ];
         return response()->json($data,200);
    }

    public function store(Request $request){

        $input = [
            "nama" => $request->nama,
            "nim" => $request->nim,
            "email" => $request->email,
            "jurusan" => $request->jurusan
        ];

        $student = Student::create($input);

        $data = [
            'Message' => 'ini adalah data student',
            'data' => $student
        ];

        return response()->json($data,201);

        
    }
}
