<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Face_time;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index(){


       $tests=Test::all();
       return View('admin.test',compact('tests'));
   }
   public function face_time(){
       $face_times=Face_time::all();
       return View('admin.face_time',compact('face_times'));
   }

    public function face_time_status($id)
    {
        if (ctype_digit($id)){
            $face_time=Face_time::find($id);
            if ($face_time->status == 0){
                $face_time->status =1;
                $face_time->save();
                return redirect()->route('admin.face_time.show')->with('success','عملیات با موفقیت انجام شد');
            }else{
                $face_time->status =0;
                $face_time->save();
                return redirect()->route('admin.face_time.show')->with('success','عملیات با موفقیت انجام شد');
            }}


    }
    public function test_download($id){
       $test=Test::find($id);
       $name=$test->title;
       $basepach= public_path('test\\');
       $filpach= $basepach.$name;
       return response()->download($filpach);



    }
}
