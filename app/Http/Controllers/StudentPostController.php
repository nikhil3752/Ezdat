<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\DB;

class StudentPostController extends Controller
{
    //Add New Student Data
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'studentName' => 'required',
            'email' => 'required',
            'age' => 'required',
            'fees'=>'required',
            'joinDate'=>'required',
            'rollNo'=>'required'
        ]);
        $StudentName = $request->input('studentName');
        $email = $request->input('email');
        $age=$request->input('age');
        $fees=$request->input('fees');
        $joinDate = $request->input('joinDate');
        $rollNo=$request->input('rollNo');
        
        $data = new Students();
        $data->studentName = $StudentName;
        $data->email = $email;
        $data->age = $age;
        $data->fees=$fees;
        $data->joinDate=$joinDate;
        $data->rollNo=$rollNo;
        $data->save();
        return back()->with('post_created', 'Post has been Created Successfully!');
    }

    //Delete Student Data
    public function deleteRecord($id){
        DB::table('students')->where('id',$id)->delete();
        return back()->with('postDeleted','Post has been deleted');
    }

    //Update Student Data
    public function updateRecord(Request $request){
        
        $validatedData = $request->validate([
            'studentName' => 'required',
            'email' => 'required',
            'age' => 'required',
            'fees'=>'required',
            'joinDate'=>'required',
            'rollNo'=>'required'
        ]);
        $StudentName = $request->input('studentName');
        $email = $request->input('email');
        $age=$request->input('age');
        $fees=$request->input('fees');
        $joinDate = $request->input('joinDate');
        $rollNo=$request->input('rollNo');
        

        DB::table('students')->where('id',$request->id)->update([
            'studentName'=>$StudentName,
            'email'=>$email,
            'age'=>$age,
            'fees'=>$fees,
            'joinDate'=>$joinDate,
            'rollNo'=>$rollNo,
        ]);
        
        return back()->with('Post_Updated','Post Updated Sucessfully');
    }
    
}
