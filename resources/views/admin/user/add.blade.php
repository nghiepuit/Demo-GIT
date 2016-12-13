@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Add</small>
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
                <form action="admin/user/add" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>User Name</label>
                        <input class="form-control" name="user_name" placeholder="Nhập tên User" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="user_pass" placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Password Again</label>
                        <input type="password" class="form-control" name="user_passAgain" placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>User Level</label>
                        <label class="radio-inline">
                            <input name="user_level" value="0" checked="" type="radio">Member
                        </label>
                        <label class="radio-inline">
                            <input name="user_level" value="1" type="radio">Admin
                        </label>
                    </div>
                    <div class="form-group">
                        <label>User Info</label>
                        <textarea name="user_info" class="form-control" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-default">User Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection