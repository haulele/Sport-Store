@extends('layouts.homepage')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('js')

@endsection

@section('content')
<div class="site-blocks-cover">
    <div class="container">
      <div class="site-img">
            <div class="caption">
                <h3><b>LIÊN HỆ</b></h3>
            </div>
      </div>
    </div>
</div> 
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <iframe class="col-md-5 py-5 d-flex" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.830886617685!2d106.77540651376937!3d10.900453759875269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d8f13bc141f1%3A0x361b7ba2c1152eb7!2zVHLhuqduIEjGsG5nIMSQ4bqhbywgxJDDtG5nIEjDsmEsIETEqSBBbiwgQsOsbmggRMawxqFuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1667063409336!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
                <div class="col-md-7 py-2 pl-4 pb-md-3" style="background-color: #E8EBF4; border-radius: 30px; margin: auto;">
                    <div class="ml-md-0">
                        <h2 class="mb-4" style="text-align: center; font-weight: 600;">Thông tin liên hệ</h2>
                    </div>
                    <div class="col-sm-12 ftco-animate">
                        <div class="media">
                            <div class=" d-flex mb-4">
                                <img class="contact-img" width="50" src="{{ url('img/Visit.png') }}">
                                <h5>24/7 Phường Đông Hòa, Thành phố Dĩ An, Tỉnh Bình Dương</h5>
                            </div>
                        </div>      
                    </div>
                    <div class="col-sm-12 ftco-animate">
                        <div class="media">
                            <div class=" d-flex mb-4">
                                <img class="contact-img" width="50" src="{{ url('img/Smartphone.png') }}">
                                <h5> HOTLINE: {{ getConfigvaluefromSettingtable('Phone') }} </h5>
                            </div>
                        </div>
                    </div>      
                    <div class="col-sm-12 ftco-animate">
                        <div class="media">
                            <div class=" d-flex mb-4">
                                <img class="contact-img" width="50" src="{{ url('img/MailAccount.png') }}">
                                <h5>{{ getConfigvaluefromSettingtable('Email') }}</h5>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-2 d-flex col-3 pl-4">
                            <a href="{{ getConfigvaluefromSettingtable('Facebook link') }}" class="media">
                                <img class="contact-media-img" width="50" src="{{ url('img/Facebook.png') }}">
                            </a>   
                        </div>   
                        <div class="col-sm-2 d-flex col-3 pl-4">
                            <a href="{{ getConfigvaluefromSettingtable('Email') }}" class="media">
                                <img class="contact-media-img" width="50" src="{{ url('img/Instagram.png') }}">
                            </a>
                        </div>
                        <div class="col-sm-2 d-flex col-3 pl-4">
                            <a href="{{ getConfigvaluefromSettingtable('Email') }}" class="media">
                                <img class="contact-media-img" width="50" src="{{ url('img/Twitter.png') }}">
                            </a>
                        </div>
                        <div class="col-sm-2 d-flex col-3 pl-4">
                            <a href="{{ getConfigvaluefromSettingtable('Email') }}" class="media">
                                <img class="contact-media-img" width="50" src="{{ url('img/Shopee.png') }}">
                            </a>
                        </div>
                    </div>     
                </div>          
        </div>
    </div>
    <hr class="hr-about container col-sm-12 col-md-6 col-lg-6">
    <div class="pt-3 container">
    <h5 class="text-center pb-4" style="color: #5974D4; font-size: 25px;">QUY ĐỊNH ĐỔI TRẢ</h5>
        <div class="col-12 p-5" style="background-color: #E8EBF4; border-radius: 30px; font-size: 20px;
        margin-bottom: 30px;">
            <p>Áp dụng 01 lần đổi/01 đơn hàng</p>
            <p>Không áp dụng đổi với sản phẩm phụ kiện và đồ lót</p>
            <p>Sản phẩm nguyên giá được đổi sang sản phẩm nguyên khác còn hàng tại website có giá trị bằng hoặc lớn hơn (KH bù thêm chênh lệch nếu lớn hơn)</p>
            <p>Sản phẩm giảm giá bạn đổi size hoặc theo quy chế từng chương trình (nếu có)</p>
            <p>Điều kiện đổi sản phẩm</p>
            <li>Thời gian đủ điều kiện đổi sản phẩm trong vòng 03 ngày kể từ ngày bạn nhận sản phẩm</li>
            <li>Sản phẩm còn nguyên tem, mác và chưa qua sử dụng.</li>
            </div>
    </div>
    <hr class="hr-about container col-sm-12 col-md-6 col-lg-6">
    <div class="pt-3 container">
        <h5 class="text-center pb-4" style="color: #5974D4; font-size: 25px;">HƯỚNG DẪN ĐỔI TRẢ</h5>
            <div class="col-12 p-5" style="background-color: #E8EBF4; border-radius: 30px; font-size: 20px; line-height: 50px;
            margin-bottom: 30px;">
                <li>Bước 1: Gọi đến số hotline:1900167887 cung cấp mã đơn hàng và mã sản phẩm cần đổi</li>
                <li>Bước 2: Gửi hàng về địa chỉ Kho Online BANASPORTS, 24/7 Phường Đông Hòa, Thành phố Dĩ An, Tỉnh Bình Dương (hàng hóa cần được bọc và đóng gói trước khi gửi. Lưu ý không quấn băng keo trực tiếp lên hộp giày hoặc túi thương hiệu)<br>
                            Người nhận: Mr Đức Hậu<br>
                            Nội dung: Đổi hàng Online - ghi rõ size, mã cần đổi.
                </li>
                <li>Bước 3: BANASPORTS nhận được hàng sẽ  liên hệ xác nhận với khách hàng và thực hiện đổi sản phẩm.</li>
            </div>
    </div>
</section>
@endsection