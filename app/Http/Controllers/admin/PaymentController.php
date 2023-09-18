<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Facade\FlareClient\View;

class PaymentController extends Controller
{
    public function showpay()
    {

         $all_payment= Payment::all()->where('status','=',0);
        return View('admin.peyment_show',compact('all_payment'));


    }

    public function confirmation($id){

        $update_status=Payment::find($id);
        $update_status->status=1;
        $update_status->save();
        if($update_status){

            return redirect()->route('admin.show_payment')->with('success','تایید پرداخت با موفقیت انجام شد');
        }
    }
}
