<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use App\Cate;


class CateController extends Controller
{
    public function getList(){
        $cate = Cate::all();
        return view('admin.cate.list',['cate'=>$cate]);
    }

    public function getAdd(){
        $customer = Customer::all();
        return view('admin.cate.add',['customer'=>$customer]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'cate_name' => 'required|unique:cate,cate_name|min:3|max:50'
            ]
            ,
            [
                'cate_name.required' =>'Tên chuyên mục không được để trống',
                'cate_name.unique' => 'Tên chuyên mục đã tồn tại',
                'cate_name.min' =>'Tên chuyên mục phải từ 3-50 kí tự',
                'cate_name.max' =>'Tên chuyên mục phải từ 3-50 kí tự',
            ]);

        $cate=new Cate;
        $cate->cate_name = $request->cate_name;
        $cate->customer_id = $request->customer_id;
        $cate->save();
        return redirect('admin/cate/add')->with('thongbao','Thêm thành công');
    }
    //Thieu $customer
    public function getEdit($id){
        $customer = Customer::all();
        $cate = Cate::find($id);
        return view('admin.cate.edit',['cate'=>$cate],['customer'=>$customer]);
    }

    public function postEdit(Request $request,$id){
        $cate= Cate::find($id);
        $this->validate($request,
            [
                'cate_name' =>'required|unique:cate,cate_name,'.$id.'|min:3|max:50'
            ],
            [
                'cate_name.required' =>'Tên chuyên mục không được để trống',
                'cate_name.unique' => 'Tên chuyên mục đã tồn tại',
                'cate_name.min' =>'Tên chuyên mục phải từ 3-50 kí tự',
                'cate_name.max' =>'Tên chuyên mục phải từ 3-50 kí tự',
            ]);
        $cate->cate_name=$request->cate_name;
        $cate->customer_id=$request->customer_id;
        $cate->save();
        return redirect('admin/cate/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDel($id){
        $cate= Cate::find($id);
        $cate->delete();
        return redirect('admin/cate/list')->with('thongbao','Xóa thành công');
    }

    
    //
}

