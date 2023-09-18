<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()

    {
        return View('login.login');
    }
    public function dologin(request $request)

    {

        $this->validate(request(), [
            'phone' => 'numeric'
        ], ['phone.numeric' => 'شماره تلفن درست وارد نشده است']);

        $test=Auth::attempt(['phone'=> $request->input('phone'), 'password' => $request->input('password')]);

        if ($test) {
            if(Auth::user()->role == \App\Models\User::USER){ return redirect()->route('user.Dashboard');}else{return redirect()->route('admin.dashboard');}


        } else {
            return redirect()->route('login')->with('log-error', 'نام کاربری یا کلمه ی عبور درست وارد نشده است');
        }

    }

    public function register()
    {
        return View('reg.register');
    }
    public function doregister(Request $request){

        $this->validate(request(), [

            'name' => 'required',

            'email' => 'required|email',
            'phone' => 'required|numeric|unique:App\Models\User,phone',
            'password' => 'required|min:8'

        ], ['name.required' => 'فیلد نام اجباری می باشد',

            'email.required' => 'فیلد ایمیل اجباری می باشد',
            'email.email' => 'فیلد ایمیل با قالب ایمیل وارد نشده است  ',
            'phone.required' => 'فیلد تلفن اجباری می باشد  ',
            'phone.numeric' => 'فیلد تلفن باید فقط عدد باشد  ',
            'phone.unique' => 'شخصی با این شماره تلفن از قبل ثبت نام کرده است  ',
            'password.required' => 'وارد کردن فیلد رمز عبور اجباری میباشد  ',
            'password.min' => 'فیلد رمز عبود حد اقل باید 8 رقم باشد  ',
        ]);

        if (request()->input('password') == request()->input('password2'))
        {

            $new_user_data = [

                'name' => request()->input('name'),

                'email' => request()->input('email'),
                'phone' => request()->input('phone'),
                'password' => bcrypt(request()->input('password')),
                'role' => '2'

            ];
            // dd($new_user_data);
            $user_save= User::create($new_user_data);
            //dd($user_save);
            if($user_save){
                return redirect()->route('login')->with('save_success','ثبت نام شما با موفقیت انجام شد میتوانید وارد شوید');

            }else{
                dd('ثبت نام نشد');
            }

        }else{
            dd('نشد');
        }
    }

    public  function logout(){
        $logout=Auth::logout();
        if ($logout){
            return redirect()->route('home');
        }
    }
}
