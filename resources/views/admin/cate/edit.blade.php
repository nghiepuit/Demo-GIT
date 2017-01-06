@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>{{$cate->cate_name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
                <form action="admin/cate/edit/{{$cate->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="cate_name" placeholder="Please Enter Category Name" value="{{$cate->cate_name}}" />
                    </div>
                    <div class="form-group">
                        <label>Category Image</label>
                        <p>
                            <img width="200px" src="upload/cate/{{$cate->cate_img}}" alt="">
                        </p>
                        <input class="form-control" type="file" name="cate_img" />
                    </div>
                    <div class="form-group">
                        <label>Customer</label>
                        <select class="form-control" name="customer_id">
                        @foreach($customer as $cus)
                            <option 
                            @if($cate->customer_id == $cus->id)
                                {{"selected"}}
                            @endif
                             value="{{$cus->id}}">{{$cus->customer_name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category Description</label>
                        <textarea class="form-control" rows="3" name="cate_sum">{{$cate->cate_sum}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection