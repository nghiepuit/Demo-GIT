@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chuyên mục
                    <small>{{$subcate->subcate_name}}</small>
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
                <form action="admin/subcate/edit/{{$subcate->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên chuyên mục</label>
                        <input class="form-control" name="subcate_name"  value="{{$subcate->subcate_name}}" />
                    </div>
                    <div class="form-group">
                        <label>Ảnh chuyên mục</label>
                        <p>
                            <img width="200px" src="upload/subcate/{{$subcate->subcate_img}}" alt="">
                        </p>
                        <input class="form-control" type="file" name="subcate_img" />
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select class="form-control" name="cate_id">
                        @foreach($cate as $tl)
                            <option
                            @if($tl->id == $subcate->cate_id)
                                {{"selected"}}
                            @endif
                             value="{{$tl->id}}">{{$tl->cate_name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nội dung tóm tắt</label>
                        <textarea class="form-control" rows="3" name="subcate_sum">{{$subcate->subcate_sum}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa chuyên mục</button>
                    <button type="reset" class="btn btn-default">Viết lại</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
