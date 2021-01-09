<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Session;
use Auth;
class UserController extends Controller
{
    public function signin(){
    	return view('ban-banh.login');
    }

    public function signup(){
    	return view('ban-banh.signup');
    }
     // Đăng Ký   
    public function postSignup(Request $request){

        $this ->validate( $request,
        	[
                // mail ph ch dc su dung
                // required:k dc bo trong; email: đúng địh dạng ms dc ; unique: k dc trung vs email tren db
        		'email' => 'required|email|unique:users,email',
                // gioi han ki tu password
                'password' => 'required|min:8|max:30',
                'full_name' => 'required',
                // passs word ph giong o tren
                're_password' => 'required|same:password',
                'phone' => 'required|min:10|max:11',
                'address' => 'required'
            ],
            // xuat cac thong bao

            [
                'email.required'=>'Vui lòng nhập Email.',
                'email.email'=>'Email không hợp lệ',
                'email.uinque'=>'Email này đã được sử dụng.Vui lòng nhập lại Email khác.',
                'password.required' => 'Vui lòng nhập mật khẩu',
                're_password.same' => 'Mật khẩu không giống nhau.',
                'address.required' => 'Vui lòng nhập địa chỉ.',
                'password.min'=>'Mật khẩu phải có ít nhất 8 kí tự.',
                'password.max'=>'Mật khẩu không quá 30 kí tự.',
                'phone.min' => 'Số điện thoại không hợp lệ.' 



            ]);
        $signup = new User;
        $signup->full_name = $request->full_name;
        $signup->email = $request->email;
                // mã hóa nó
        $signup->password = Hash::make($request->password);
        $signup->phone = $request->phone;
        $signup->address = $request->address;
        $signup->save();

        return redirect()->back()->with('thanhcong','Chúc mừng bạn đã tạo tài khoản thành công.');
    }
    public function postSignin(Request $request){
     $this ->validate( $request,
        [
            'email' => 'required|email|',
            'password' => 'required|min:8|max:30',

        ],

        [
            'email.required'=>'Vui lòng nhập Email.',
            'email.email'=>'Email không hợp lệ',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có ít nhất 8 kí tự.',
            'password.max'=>'Mật khẩu không quá 30 kí tự.',
        ]);

     $xacthuc_tk = array('email'=> $request->email,'password'=>$request->password);
     if(Auth::attempt($xacthuc_tk))
     {
        return redirect()->back()-> with(['color'=>'success','thongbao'=>'Chúc mừng bạn đã đăng nhập thành công.']);
    }
    else
    {
        return redirect()->back()-> with(['color'=>'danger','thongbao'=>'Sai tên đăng nhập hoặc mật khẩu.']);
    }
}

public function postLogOut(){

  Auth::logout();
  return redirect()->back()-> with('thongbao','Bạn đã đăng xuất thành công.');
}
}
