<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    			'user_name'=>'required|min:4|max:15|unique:users,user_name',
                'user_email'=>'required|unique:users,user_email',
    			'user_pass'=>'required|min:8|max:15',
    			'user_passAgain'=>'required|same:user_pass',
    			'user_info'=>'required|max:500'
    		],
    		[
    			'user_name.required'=>'Bạn chưa nhập tên User',
    			'user_name.min'=>'Tên User phải có ít nhất 4 kí tự',
    			'user_name.max'=>'Tên User không được nhiều quá 15 kí tự',
    			'user_name.unique'=>'Tên User đã tồn tại',
                'user_email.required'=>'Bạn chưa nhập Email',
                'user_email.unique'=>'Email đã tồn tại',
    			'user_pass.required'=>'Mật khẩu không được để trống',
    			'user_pass.min'=>'Mật khẩu phải có có ít nhất 8 kí tự',
    			'user_pass.max' =>'Mật khẩu không được nhiều quá 15 kí tự',
    			'user_passAgain.required'=>'Nhập lại mật khẩu',
    			'user_passAgain.same'=>'Mật khẩu không khớp',
    			'user_info.required'=>'Bạn chưa nhập giới thiệu'

    		]);
    	$user = new User;
    	$user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
    	$user->user_pass = $request->user_pass;
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
                'user_name'=>'required|min:4|max:15|unique:users,user_name'
            ],
            [
                'user_name.required'=>'Bạn chưa nhập tên User',
                'user_name.min'=>'Tên User phải có ít nhất 4 kí tự',
                'user_name.max'=>'Tên User không được nhiều quá 15 kí tự',
                'user_name.unique'=>'Tên User đã tồn tại',
                'user_info.required'=>'Bạn chưa nhập thông tin'

            ]);
        $user = User::find($id);
        $user->user_name = $request->user_name;
        $user->user_level = $request->user_level;
        $user->user_info = $request->user_info;
        if ($request->user_passChange == "on") {
            # code...
            $this->validate($request,
            [
                'user_name'=>'required|min:4|max:15|unique:users,user_name',
                'user_pass'=>'required|min:8|max:15',
                'user_passAgain'=>'required|same:user_pass',
                'user_info'=>'required|max:500'
            ],
            [
                'user_name.required'=>'Bạn chưa nhập tên User',
                'user_name.min'=>'Tên User phải có ít nhất 4 kí tự',
                'user_name.max'=>'Tên User không được nhiều quá 15 kí tự',
                'user_name.unique'=>'Tên User đã tồn tại',
                'user_pass.required'=>'Mật khẩu không được để trống',
                'user_pass.min'=>'Mật khẩu phải có có ít nhất 8 kí tự',
                'user_pass.max' =>'Mật khẩu không được nhiều quá 15 kí tự',
                'user_passAgain.required'=>'Nhập lại mật khẩu',
                'user_passAgain.same'=>'Mật khẩu không khớp',
                'user_info.required'=>'Bạn chưa nhập thông tin'
            ]);
            $user->user_pass = bcrypt($request->user_pass);

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
            'user_email'=>'required',
            'user_pass'=>'required|min:8|max:32'
            ],
            [
            'user_email.required'=>'Bạn chưa nhập Email',
            'user_pass.required'=>'Bạn chưa nhập mật khẩu',
            'user_pass.min'=>'Mật khẩu phải từ 8 kí tự trở lên',
            'user_pass.max'=>'Mật khẩu không vượt quá 30 kí tự'
            ]);
        if (Auth::attempt(['user_email'=>$request->user_email,'user_pass'=>$request->user_pass])) {
            return redirect('admin/cate/list');
        }   else{
            return redirect('admin/login')->with('thongbao','Login failed');
        }
    }
    
    //
}

