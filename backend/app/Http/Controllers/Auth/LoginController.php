<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function postLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password'=>$request->password
        ];
        
       if(Auth::guard('customer')->attempt($data)){
         $alert = "đăng nhập thành công";
        
            return redirect()->back()->with('alert',$alert);

        // return response()->json([
        //     'msg'=>'dang nhap oke'
        // ]);
       }
       else{
        // return redirect()->back()->with('error','Thông tin tài khoản mật khẩu không chính xác');
        return response()->json([
            'msg'=>'dang nhap that bai'
        ]);
       }
    }

    public function LogoutCustomer(){
        Auth::guard('customer')->logout();
        return redirect('home');
    }

    public function getLogin(){
        return view('backend.pages.auth.Login');
    }

    public function postLoginAdmin(Request $request){

        $data = [
            'email'   =>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($data)){
           
            return redirect('admin/admin');
        }
        else{
          
            return redirect()->back()->with('success','thông tin tài khoản mật khẩu không chính xác');
        }
    }

    public function LogoutAdmin(){
        Auth::logout();
        return   view('backend.pages.auth.login');
    }

}
