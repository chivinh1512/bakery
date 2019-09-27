@extends('master')
@section('content')
    @if(session('success'))
        <div class="alert alert-success" style="text-align: center;font-size: 30px">{{session('success')}} </div>
    @endif
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Tìm kiếm</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{count($product)}} sản phẩm mới</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach($product as $p)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="/productdetail/{{$p->id}}"><img src="source/image/product/{{$p->img}}" alt="" width="200px" height="200px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$p->name}}</p>
                                                <p class="single-item-price">
                                                    <span>{{$p->price}}</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="/addproduct/{{$p->id}}"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="/productdetail/{{$p->id}}">Xem chi tiết <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="space50">&nbsp;</div>
                                    </div>



                                @endforeach

                            </div>



                        </div> <!-- .beta-products-list -->


                    </div>
                </div> <!-- end section with sidebar and main content -->
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection