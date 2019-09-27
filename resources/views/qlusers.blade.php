@extends('admin')
@section('content')
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td>Id user</td>
                    <td>Tên user</td>
                    <td>Email</td>
                    <td>Ngày tham gia</td>
                    <td>Số điện thoại</td>
                    <td>Địa chỉ</td>
                    <td>Avatar</td>
                    <td>Thao tác</td>
                </tr>
                @forelse($allusers as $a)
                    <tr>
                        <td>{{$a->id}} </td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->created_at}}</td>
                        <td>{{$a->phone}}</td>
                        <td>{{$a->address}}</td>
                        <td><img src="source/image/avatar/{{$a->img}}" style="width: 70px"/></td>
                        <td> <a href="qlusers/delete/{{$a->id}}">Xóa</a></td>
                    </tr>
                @empty
                    <div style="padding-left: 30px">Không có kết quả</div>
                @endforelse


            </table>
            {{$allusers->links()}}
        </div>
        <div class="col-sm-1"></div>

@endsection