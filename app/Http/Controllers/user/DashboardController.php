<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Body_profile;
use App\Models\Face_time;
use App\Models\Package;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Session;

class DashboardController extends Controller
{
    public function index()
    {
        return View('user.index');

    }

    public function non_programme()
    {
        return View('user.non_programm');
    }

    public function Competition_program()
    {
        return View('user.Competition_program');
    }

    public function Diabetic_program()
    {
        return View('user.Diabetic_program');
    }
    public function privet_program()
    {
        return View('user.privet_programm');
    }

    public function form_body($id)
    {
        $type = session('type');

        return View('user.profile_body', compact('id', 'type'));

    }

    public function body_profile_store(Request $request, $id)
    {
            //validate
        //$colection=$id
        //$type=sessen['type']

        //first creat package


        $create_pakage = Package::create([
            'user_id' => Auth::user()->id,
            'title' => 'برنامه',
            'type' => session('type'),
            'Collection' => $id,
            'Number'=>$request->input('Number'),
            'expire_date' => Carbon::now()->addMonth($id),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);
        $package = Package::where('user_id', '=', Auth::user()->id)->where('created_at', '=', Carbon::now())->first();
        $pachage_id=$package->id;
        //next create bodyprofile

        $body_data_orofile = Body_profile::create([
            'package_id' => $pachage_id,
            'height' => $request->input('height'),
            'Weight' => $request->input('Weight'),
            'blood_type' => $request->input('blood_type'),
            'age' => $request->input('age'),
            'medicine' => $request->input('medicine'),
            'Sickness' => $request->input('Sickness'),
            'goal' => $request->input('goal'),
            'need_supplement'=>$request->input('need_supplement')

        ]);
        $original_file_name = $request->file('file_up')->getClientOriginalName();
        $peyment_save=Payment::create([
            'payment_user_id'=>Auth::user()->id,
            'payment_package_id'=>$pachage_id,
            'pic_name'=>$original_file_name,
            'status'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        if ($peyment_save instanceof Payment) {
            $image = request()->file('file_up');
            $image->move(public_path('/payment'), $original_file_name);


            if ($create_pakage && $body_data_orofile)
            {
                return redirect()->route('user.Dashboard')->with('success','اطلاعات شما با موفقیت ثبت شد به زودی برنامه برای شما ارسال میشود');
            }
        }


    }
    public function faceshow(){
        return View('user.face_time');
    }
    public function faceshow_stor(){

        $this->validate(request(),[

            'date'=>'required',
            'time'=>'required|numeric'
        ],[
            'date.required'=>',وارد کردن فیلد تاریخ اجباری میباشد',
            'time.numeric'=>',وارد کردن فیلد زمان اجباری میباشد'
        ]);
       $face_time=Face_time::create([
           'user_id'=>Auth::user()->id,
           'date'=>request()->input('date'),
           'time'=>request()->input('time'),
           'status'=>0
       ]);

      if ($face_time instanceof Face_time){

          return redirect()->route('user.Dashboard')->with('success','وقت شما با موفقیت ثبت شد به زودی با شما تماس گرفته می شود');
      }
    }
}
