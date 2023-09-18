<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index()
    {
        $packages=Package::where('user_id','=',Auth::user()->id)->get();
        $payment=Payment::where('payment_user_id','=',Auth::user()->id)->get();


        return View('user.package_selected',compact('packages','payment'));

    }
    public function show_program($id){
        $pachage=Package::find($id);
        $train_programms=$pachage->train_programm;
        $food_programms=$pachage->food_programm;
        return View('user.programm_show',compact('train_programms','food_programms'));
    }
}
