<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Face_time;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        return View('user.test');

    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'test'=>'required|max:2200'
        ],[
            'test.required'=>'بارگزاری فایل اجباری میباشد',
            'test.size'=>'حداکثر حجم فایل نباید بیشتر از 2 مگابایت باشد'
        ]);
        $original_file_name = request()->file('test')->getClientOriginalName();
       $save_data=Test::create([
           'user_id'=>Auth::user()->id,
           'title'=>$original_file_name,
           'created_at'=>Carbon::now()
       ]);


        if ($save_data instanceof Test) {
            $image = request()->file('test');
            $image->move(public_path('/test'), $original_file_name);
            return redirect()->route('user.test')->with('success', 'آزمایش با موفقیت ثبت شد');
        }

    }


}
