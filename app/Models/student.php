<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class student extends Model
{
    use HasFactory;
    static function getAllStudent(){
        //query select sql
       $student = DB::select('select * from student');
       return $student;
    }
}
