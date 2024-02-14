<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    public function allStudents(){
        $students=DB::table('student')->paginate(4);
        return view('allStudents',['data'=>$students]);
    }
    public function add(Request $req){
        $student=DB::table('student')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'roll'=>$req->roll,
            'contact'=>$req->contact,
            'address'=>$req->address,
            'created_at'=> now(),
            'updated_at'=>now(),
        ]);
  if($student){
    return redirect()->route('home');
  }
    }
    public function viewStudent(string $id){
        $student=DB::table('student')->where('id',$id)->get();
        return view('viewStudent',['data'=>$student]);
    }
    public function deleteStudent(string $id){
        $student=DB::table('student')->where('id',$id)->delete();

        if($student){
            return redirect()->route('home');
        }
    }
    public function update(string $id){
        $student=DB::table('student')->where('id',$id)->get();
        return view('updateStudent',['data'=>$student]);
    }
    public function updateStudent(Request $req,$id){
        $student=DB::table('student')->where('id',$id)->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'roll'=>$req->roll,
            'contact'=>$req->contact,
            'address'=>$req->address,
            'created_at'=> now(),
            'updated_at'=>now(),
        ]);
        if($student){
            return redirect()->route('home');
        }
    }
}
