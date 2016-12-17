@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->user_name}}</small>
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
                <form action="admin/user/edit/{{$user->id}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>User Name</label>
                        <input class="form-control" name="user_name" placeholder="Nhập tên User" value="{{$user->user_name}}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" value="{{$user->user_email}}" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="changepass" name="user_passChange">
                        <label>Change Password</label>
                        <input type="password" class="form-control password" name="user_pass" placeholder="Nhập mật khẩu" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Password Again</label>
                        <input type="password" class="form-control password" name="user_passAgain" placeholder="Nhập mật khẩu" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>User Level</label>
                        <label class="radio-inline">
                            <input name="user_level" value="0" 
                                @if($user->user_level == 0)
                                {{"checked"}}
                                @endif type="radio">Member
                        </label>
                        <label class="radio-inline">
                            <input name="user_level" 
                            @if($user->user_level == 1)
                                {{"checked"}}
                                @endif value="1" type="radio">Admin
                        </label>
                    </div>
                    <div class="form-group">
                        <label>User Info</label>
                        <textarea name="user_info" class="form-control" rows="3">{{$user->user_info}}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-default">User Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $("#changepass").change(function(){
                if ($(this).is(":checked")) {
                    $(".password").removeAttr('disabled');
                } else{
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection