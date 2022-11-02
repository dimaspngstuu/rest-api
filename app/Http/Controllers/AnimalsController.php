<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  

class AnimalsController extends Controller
{
    // //
    // public function index($id,Request $request){
    //     echo "menampilkan nama hewan  id nya $id adalah $request->hewan";
    // }

    // public function store(Request $request){
    //     echo "menambahkan hewan - $request->data";
    // }

    // public function deploy(){
    //     echo "menghapus hewan";
    // }


    // public function update($id){
    //     echo "mengedit hewan yang id nya adalah".$id;
    // }

    public $Animals = ['kucing','ayam','ikan'];

    //tampil data animals
    public function index(){

        foreach($this->Animals as $hewan){
            echo "</br> $hewan ";
          
        }
    }

    //menambah data animals
    public function store(Request $request){

       array_push($this->Animals ,$request->data);

       foreach($this->Animals as $hewan2){

        echo "</br> $hewan2";

       }
    }

    //mengupadate data animals
    public function update(Request $request,$id){
       

    
    }

    //menghaapus data animals 
    public function destroy($id){

    }

}
