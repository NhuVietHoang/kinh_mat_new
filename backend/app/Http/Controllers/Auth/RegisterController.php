<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class  RegisterController extends Controller
{
    //
    public function getRegister(){
        return view('frontend.pages.register');
    }

    public function postRegister(RegisterRequest $request){
           $customer = new Customer();
           $customer->name     = $request->name;
           $customer->phone    = $request->phone;
           $customer->address  = $request->address;
           $customer->email    = $request->email;
           $customer->password = bcrypt($request->password);
           $customer->save();
        return redirect('register')->with('success','Đăng Kí Thành Công');


    }


}
