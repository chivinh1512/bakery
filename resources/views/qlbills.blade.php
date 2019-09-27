@extends('admin')
@section('content')
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <td>Mã đơn hàng</td>
                <td>Ngày đặt hàng</td>
                <td>Id người mua</td>
                <td>Giá tiền</td>
                <td>Ghi chú</td>
                <td>Chi tiết đơn hàng</td>
            </tr>
            @forelse($databills as $da)
                <tr>
                    <td>{{$da->id}} </td>
                    <td>{{$da->created_at}}</td>
                    <td>{{$da->iduser}}</td>
                    <td>{{$da->total}}</td>
                    <td>{{$da->note}}</td>
                    <td>  <button><a href="qlbills/{{$da->id}}" style="font-size: 20px">Xem</a> &emsp;</button>

                    @if($da->status==1)<a style="color: #ccc; font-size: 20px">  Chờ xác nhận </a>
                            @endif
                            @if($da->status==2)
                            <a style="color: green; font-size: 20px">   Đã xác nhận </a>
                                @endif
                            @if($da->status==3)
                            <a style="color: red; font-size: 20px">   Đã hủy  </a>
                                @endif
                            @if($da->status==4)
                            <a style="color: black; font-size: 20px">   Đã giao  </a>
                            @endif
                        </a>
                    </td>
                </tr>
            @empty
                <div style="padding-left: 30px">Không có kết quả</div>
            @endforelse


        </table>

    </div>
        <div class="col-sm-1"></div>
@endsection