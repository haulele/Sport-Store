@extends('layouts.homepage')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('js')

@endsection

@section('content')
    <main>
        <div class="site-blocks-cover">
            <div class="container">
                <div class="site-img">
                    <div class="caption">
                        <h3><b>Giới thiệu</b></h3>
                    </div>
                </div>
            </div>
        </div> 
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">
                    <img class="col-md-7 col-lg-5 p-md-5 d-flex " src="{{ url('img/Rectangle16.png') }}">
                    <div class="col-md-5 col-lg-7 py-5 pb-md-3">
                        <div class="ml-md-0">
                        <h2 class="mb-4">CỬA HÀNG UY TÍN</h2>
                        </div>
                        <div class="pb-md-5">
                        <p>Chào mừng bạn đến với BANASPORTS! Nếu bạn muốn tìm kiểm những món đồ thể thao hoặc dụng dụ tập luyện đến từ các thương hiệu nổi tiếng trên thế giới như: Adidas, Nike, Lecod, Lotto hay Ping thì BANASPORTS chính là một lựa chọn không thể bỏ qua.</p>
                        </div>
                        <div class="ml-md-0"> 
                            <h2 class="mb-4">SẢN PHẨM TỐT NHẤT</h2>
                        </div> 
                        <div class="pb-md-5">
                            <p>Các sản phẩm của BANASPORTS vô cùng đa dạng, có thể sử dụng trong nhiều môn thể thao như bơi lội, bóng đá, gym, yoga, tennis. Được thiết kế với chất liệu bền, đẹp, thấm mồ hôi, các bạn sẽ cảm thấy vô cùng dễ chịu, thoải mái khi sử dụng các sản phẩm thời trang hay dụng cụ, thiết bị của BANASPORTS.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hr-about container col-10 col-sm-6">
        </section>
        
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="mb-4 d-flex justify-content-center">
                                <img class="icon-img"  width="60" src="{{ url('img/Group25.png') }}">
                            </div>
                            <div class="media-body">
                                <h3 class="icon-content text-center">Giao hàng miễn phí</h3>
                            </div>
                        </div>      
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class=" d-flex mb-4 justify-content-center">
                                <img class="icon-img"  width="60" src="{{ url('img/CurrencyExchange.png') }}">
                            </div>
                            <div class="media-body">
                                <h3 class="icon-content text-center">Đổi trả trong vòng 3 ngày</h3>
                            </div>
                        </div>      
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="media">
                            <div class=" d-flex mb-4 justify-content-center">
                                <img class="icon-img"  width="60" src="{{ url('img/New.png') }}">
                            </div>
                            <div class="media-body">
                                <h3 class="icon-content text-center">Sản phẩm mới 100%</h3>
                            </div>
                        </div>      
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class=" d-flex mb-4 justify-content-center">
                                <img class="icon-img"  width="60" src="{{ url('img/Communication.png') }}">
                            </div>
                            <div class="media-body">
                                <h3 class="icon-content text-center">Chăm sóc khách hàng</h3>
                            </div>
                        </div>      
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="media">
                            <div class=" d-flex mb-4 justify-content-center">
                                <img class="icon-img"  width="60" src="{{ url('img/Checkmark.png') }}">
                            </div>
                            <div class="media-body">
                                <h3 class="icon-content text-center">Hàng chính hãng</h3>
                            </div>
                        </div>      
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class=" d-flex mb-4 justify-content-center">
                                <img class="icon-img"  width="60" src="{{ url('img/CashinHand.png') }}">
                            </div>
                            <div class="media-body">
                                <h3 class="icon-content text-center">Thanh toán đa dạng</h3>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection