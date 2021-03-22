<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function layoutSideNavLight(){
        return view('layout-sidenav-light');
    }
    public function layoutStatic(){
        return view('layout-static');
    }
    public function tables(){
        $students=Students::all();
        return view('tables',compact('students'));
    }
    public function charts(){
        return view('charts');
    }
    public function Unauthorized_401(){
        return view('401');
    }
    public function Not_Found_404(){
        return view('404');
    }
    public function Internal_Server_Error_500(){
        return view('500');
    }
    public function AddRecord(){
        return view('addRecord');
    }
    public function editStudentData($id){
        $student= DB::table('students')->where('id', $id)->first();
    
        return view('editStudentData',compact('student'));
    }
    
}
