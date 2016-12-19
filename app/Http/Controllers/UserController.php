<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Customer;
use App\Cate;
use App\User;


class UserController extends Controller
{
    public function getList(){
    	$user = User::all();
    	return view('admin.user.list',['user'=>$user]);
    }

    public function getAdd(){
    	return view('admin.user.add');
    }

    public function postAdd(Request $request){
    	$this->validate($request,
    		[
    			'name'=>'required|min:4|max:15|unique:users,user_name',
                'email'=>'required|unique:users,user_email',
    			'password'=>'required|min:8|max:15',
    			'passwordAgain'=>'required|same:password',
    			'user_info'=>'required|max:500'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên User',
    			'name.min'=>'Tên User phải có ít nhất 4 kí tự',
    			'name.max'=>'Tên User không được nhiều quá 15 kí tự',
    			'name.unique'=>'Tên User đã tồn tại',
                'email.required'=>'Bạn chưa nhập Email',
                'email.unique'=>'Email đã tồn tại',
    			'password.required'=>'Mật khẩu không được để trống',
    			'password.min'=>'Mật khẩu phải có có ít nhất 8 kí tự',
    			'password.max' =>'Mật khẩu không được nhiều quá 15 kí tự',
    			'passwordAgain.required'=>'Nhập lại mật khẩu',
    			'passwordAgain.same'=>'Mật khẩu không khớp',
    			'user_info.required'=>'Bạn chưa nhập giới thiệu'

    		]);
    	$user = new User;
    	$user->name = $request->name;
        $user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->user_level = $request->user_level;
    	$user->user_info = $request->user_info;
    	$user->save();
    	return redirect('admin/user/add')->with('thongbao','Nhập User thành công');

    }
    //Thieu $customer
    public function getEdit($id){
        $user= User::find($id);
        return view('admin.user.edit',['user'=>$user]);

    }

    public function postEdit(Request $request,$id){
        $this->validate($request,
            [
                'name'=>'required|min:4|max:15|unique:users,user_name'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên User',
                'name.min'=>'Tên User phải có ít nhất 4 kí tự',
                'name.max'=>'Tên User không được nhiều quá 15 kí tự',
                'name.unique'=>'Tên User đã tồn tại',
                'user_info.required'=>'Bạn chưa nhập thông tin'

            ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->user_level = $request->user_level;
        $user->user_info = $request->user_info;
        if ($request->passChange == "on") {
            # code...
            $this->validate($request,
            [
                'name'=>'required|unique:users,name,'.$id.'|min:4|max:15',
                'password'=>'required|min:8|max:15',
                'passwordAgain'=>'required|same:password',
                'user_info'=>'required|max:500'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên User',
                'name.min'=>'Tên User phải có ít nhất 4 kí tự',
                'name.max'=>'Tên User không được nhiều quá 15 kí tự',
                'name.unique'=>'Tên User đã tồn tại',
                'password.required'=>'Mật khẩu không được để trống',
                'password.min'=>'Mật khẩu phải có có ít nhất 8 kí tự',
                'password.max' =>'Mật khẩu không được nhiều quá 15 kí tự',
                'passwordAgain.required'=>'Nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu không khớp',
                'user_info.required'=>'Bạn chưa nhập thông tin'
            ]);
            $user->password = bcrypt($request->password);

        }
        $user->save();
        return redirect('admin/user/edit/'.$id)->with('thongbao','Sửa User thành công');
    }

    public function getDel($id){
        $cate= Cate::find($id);
        $cate->delete();
        return redirect('admin/user/list')->with('thongbao','Xóa thành công');
    }
    public function getLoginAdmin(){
        return view('admin.login');
    }
    public function postLoginAdmin(Request $request){
        $this->validate($request,
            [
            'email'=>'required',
            'password'=>'required'
            ],
            [
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập mật khẩu'
            ]);

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('admin/cate/list');
        }   else{
            return redirect('admin/login')->with('thongbao','Login failed');
        }
    }
    
    //
}

