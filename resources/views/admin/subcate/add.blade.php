@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">SUBCategory
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
                <form action="admin/subcate/add" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>SubCategory Name</label>
                        <input class="form-control" name="subcate_name" placeholder="Please Enter Sub Category Name" />
                    </div>
                    <div class="form-group">
                        <label>SubCategory Image</label>
                        <input class="form-control" type="file" name="subcate_img" />
                    </div>
                    <div class="form-group">
                        <label>Catelogy</label>
                        <select class="form-control" name="cate_id">
                        @foreach($cate as $tl)
                            <option value="{{$tl->id}}">{{$tl->cate_name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>SubCategory Description</label>
                        <textarea class="form-control" rows="3" name="subcate_sum"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Category Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection