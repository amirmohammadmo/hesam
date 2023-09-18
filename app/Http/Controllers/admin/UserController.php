<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Body_profile;
use App\Models\Food_programm;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Train_programm;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index()
    {
        $all_users = User::all();
        return View('admin.show_user', compact('all_users'));
    }

    public function confirmed(){
        $payments=Payment::all()->where('status',1);
        $body_profile=Body_profile::all();
        return View('admin.applying_show',compact('payments','body_profile'));
    }
    public function body($id){
        $body_profile=Body_profile::find($id);
        $user=User::find($body_profile->package->user_id);
        return View('admin.body_profile',compact('body_profile','user'));
    }
    public function food_get($id)

    {

        //$package=Package::all()->where('user_id','=',$id)->pluck('user_id');
       // $user=User::find($package)->first();


        return View('admin.food_send_programm',compact('id'));

    }

    public function food_post(Request $request,$id)
    {
        $original_file_name = request()->file('food_programme')->getClientOriginalName();

              $data=[
                  'package_id'=>$id,
                  'title'=>$original_file_name,
                  'pdf_name'=>$original_file_name,
                  'created_at'=>Carbon::now(),
                  'updated_at'=>Carbon::now()
              ];
        $save_data= Food_programm::create($data);

        if ($save_data instanceof Food_programm) {
            $image = request()->file('food_programme');
            $image->move(public_path('/Food_programme'), $original_file_name);
            return redirect()->route('admin.confirmed.user')->with('success', 'سرویس با موفقیت ثبت شد');
        }

    }




    public function train_get($id)

    {
        //$package=Package::all()->where('user_id',$id)->pluck('user_id');

      //  $user=User::find($package)->first();


        return View('admin.train_send_programm',compact('id'));

    }

    public function train_post(Request $request,$id)
    {
        $original_file_name = request()->file('train_programme')->getClientOriginalName();

        $data=[
            'package_id'=>$id,
            'title'=>$original_file_name,
            'pdf_name'=>$original_file_name,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
        $save_data= Train_programm::create($data);

        if ($save_data instanceof Train_programm) {
            $image = request()->file('train_programme');
            $image->move(public_path('/train_programme'), $original_file_name);
            return redirect()->route('admin.confirmed.user')->with('success', 'سرویس با موفقیت ثبت شد');
        }

    }

    public function package_show_user($id){

        $packages=Package::where('user_id','=',$id)->get();

        return View('admin.package_selected_user',compact('packages'));
        //$packagetwo=$user->package->food_programm;
    }
    public function programme_show_user($id){
        $pachage=Package::find($id);
        $train_programms=$pachage->train_programm;
        $food_programms=$pachage->food_programm;
        return View('admin.programm_show_user',compact('train_programms','food_programms'));


    }
}
