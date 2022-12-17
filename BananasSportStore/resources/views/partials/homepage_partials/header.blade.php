<!-- HEADER -->
<section class=header>
    <div class="header-top-line" style="background-color: #6D87E3;">
        <div class="container-fluid">
            <!-- SIGN IN/ LOGIN IN --> 
            <div class="Info-signup-signin row pt-3">
                <p class="header-email d-none d-sm-block col-md-3 text-center text-white">chuoilacuit@gmail.com</p>
                <p class="header-hotline d-none d-sm-block text-white col-md-4">Hotline:<span style="color: #FFFF00; padding-left: 17px;">0969 432 235</span></p>
                <a class="sign-in text-end col-5 col-md-3 text-white pb-3" href="#" style="text-decoration: none;">Đăng ký</a>
                <a class="logn-in text-center col-5 col-md-2 text-white" href="#" style="text-decoration: none;">Đăng nhập</a>
            </div>
        </div>
    </div>
    <div class="header-main bg-white">
        <nav class="navbar navbar-expand-lg navbar-light" id=header-navbar>
            <div class= "container-fluid"> 
                <button class="navbar-toggler" type="button" data-bs-toggle=collapse data-bs-target=#navbarSupportedContent aria-controls=navbarSupportedContent aria-expanded=false aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ms-auto me-auto shop-brand fw-bold" href="{{ route('layouts.homepage') }}" style="color: #415EC6;">BANASPORTS</a> 
                <div class="navbar-collapse collapse" id=navbarSupportedContent>
                    <ul class="navbar-nav ms-auto fs-5 justify-content-end">
                        <li class="nav-item px-1">
                            <a class="nav-link active hometag" aria-current="page" data-toggle=none href="{{ route('layouts.homepage')}}">Trang chủ</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link " data-toggle=none href="{{ route('layouts.introduce') }}">Giới thiệu</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link " data-toggle=none href="{{ route('layouts.product') }}">Sản phẩm</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link " data-toggle=none href="{{ route('layouts.contact') }}">Liên hệ</a>
                        </li>
                    </ul>
                    <div class="navbar-spacer"></div>
                    <!-- Search -->
                    <div class="input-group rounded me-auto ms-auto" style="width: auto">
                        <input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="search-addon" style="background-color: #D9D9D9; font-style:italic;"/>
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="ti-search"></i>
                        </span>
                    </div>
                </div>
                <!-- Shopping -->
                <div class="cart text-center">
                    <button class="btn-cart">
                        <img src=" {{ asset('font/themify-icons-font/themify-icons/SVG/cart.svg')}}" alt="Shopping Bag">
                        <p class="bag">Giỏ hàng</p>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</section>
