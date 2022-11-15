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
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];
          
        $student = Student::create($input);


        $data = [
            "messange" => "data is created",
            "data" => $student
        ];

        return response()->json($data,201);

    }
    


    public function show($id){

        $student = Student::find($id);


        if($student){
            $data = [
                "message" => "student details",
                "data" => $student
            ];

            return response()->json($data,200);

        }else {
            $data = [
                "message" => "student not found",
            ];

            return response()->json($data,404);
        }
        
        
    }


    public function update(Request $request,$id){
        $student = Student::find($id);

        if($student){

            $input = [
                'nama' => $request->nama??$student->nama,
                'nim' => $request->nim??$student->nim,
                'email'=> $request->email??$student->email,
                'jurusan'=>$request->jurusan??$student->jurusan
            ];

            $student->update($input);


            $data = [
                "message"  => "student is update",
                "data" => $student
            ];

            return response()->json($data,200);

        } else {
            $data = [
                "message"  => "student not found",
            ];

            return response()->json($data,404);
        }
    }


    public function destroy($id){
        $student = Student::find($id);
    
        if($student){
            $student->delete();

            $data = [
                "message" => "student is deleted"
            ];
            return response()->json($data,200);
        }else {
            $not = [
                "message" => "student not found"
            ];
            
            return  response()->json($not,404);
        }

    }

};
