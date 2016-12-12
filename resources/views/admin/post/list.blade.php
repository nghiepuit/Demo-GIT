@extends('admin.layout.index')
@section('content')
<script type="text/javascript">
function kiemtra () {
    // body...
    if (!window.confirm("DỮ LIỆU SẼ BỊ XÓA VĨNH VIỄN. BẠN CÓ MUỐN TIẾP TỤC?")) {
        return false;
    };
}
</script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Post
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Cate</th>
                        <th>Subcate</th>
                        <th>Summary</th>
                        <th>View</th>
                        <th>Hot</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($post as $p)
                    <tr class="odd gradeX" align="center">
                        <td>{{$p->id}}</td>
                        <td>{{$p->post_title}}</td>
                        <td>{{$p->subcate->cate->cate_name}}</td>
                        <td>{{$p->subcate->subcate_name}}</td>
                        <td>{{$p->post_sum}}</td>
                        <td>{{$p->post_view}}</td>
                        <td>
                            @if($p->post_high == "1")
                                Yes
                                @else No
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="admin/post/del/{{$p->id}}" onclick="return kiemtra();"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/post/edit/{{$p->id}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection