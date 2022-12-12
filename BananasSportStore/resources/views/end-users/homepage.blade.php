@extends('layouts.homepage')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
<!-- home product -->
<section class="section pt-21 pb-10 pb-md-9 pb-lg-4">
    <div class="section-content container">
        <div class="text-center py-3 my-3">
            <small class="fs-1 lh-1 text-uppercase letter-spacing-caption fw-bold">Sản phẩm mới</small>
        </div>
        <div class=row>
            <article class="col-12 col-sm-6 col-lg-4">
                <div class="card demo-card" style="border-radius: 1.875rem; background-color: #E8EBF4;">
                    <div class="card-body text-center p-4">
                        <img src="{{ url('img/new-product-1.png') }}" alt="No image available" style="width: 100%">
                        <h1 class="fs-4 pt-3 text-black text-center fw-bold">Giày chạy bộ nam NIKE</h1>
                        <h1 class="fs-4 fw-bold text-center" style="color: #415EC6;">6.900.000</h1>
                    </div>
                <a href=# target=_blank class=card-link-overlay></a>
                </div>
            </article>
            <article class="col-12 col-sm-6 col-lg-4">
                <div class="card demo-card" style="border-radius: 1.875rem; background-color: #E8EBF4;">
                    <div class="card-body text-center p-4">
                        <img src="{{ url('img/new-product-2.png') }}" alt="No image available" style="width: 100%">
                        <h1 class="mt-9 fs-4 pt-3 text-black text-center fw-bold">Áo nỉ bông RANGERS</h1>
                        <h1 class="mt-9 fs-4 fw-bold text-center" style="color: #415EC6;">2.200.000</h1>
                    </div>
                    <a href=# target=_blank class=card-link-overlay></a>
                </div>
            </article>
            <article class="col-12 col-sm-6 col-lg-4">
                <div class="card demo-card" style="border-radius: 1.875rem; background-color: #E8EBF4;">
                    <div class="card-body text-center p-4">
                        <img src="{{ url('img/new-product-3.png') }}" alt="No image available" style="width: 100%">
                        <h1 class="mt-9 fs-4 pt-3 text-black text-center fw-bold">Vợt tennis Babolat</h1>
                        <h1 class="mt-9 fs-4 fw-bold text-center" style="color: #415EC6;">600.000</h1>
                    </div>
                    <a href=# target=_blank class=card-link-overlay></a>
                </div>
            </article>
        </div>

        <!-- Xem thêm -->
        <div class="text-center my-3">
            <a href="#" class="fs-5 letter-spacing-caption text-black">
                Xem thêm 
                <ti class="ti-angle-double-right fs-6"></ti>
            </a>
        </div>
    </div>
</section>

<!-- SELLING PRODUCT -->
<section class="section pt-21 pb-10 pb-md-9 pb-lg-4">
    <div class="section-content container">
        <div class="text-center py-3 my-3">
            <small class="fs-1 lh-1 text-uppercase fw-bold letter-spacing-caption ">Sản phẩm bán chạy</small>
        </div>
        <div class=row>
            <article class="col-12 col-sm-6 col-lg-4">
                <div class="card demo-card" style="border-radius: 1.875rem; background-color: #E8EBF4;">
                    <div class="card-body text-center p-4">
                        <img src="{{ url('img/selling-product-1') }}.png" alt="No image available" style="width: 100%">
                        <h1 class="mt-9 fs-4 pt-3 text-black text-center fw-bold">Áo Bra tập luyện ADIDAS </h1>
                        <h1 class="mt-9 fs-4 fw-bold text-center" style="color: #415EC6;">1.125.000</h1>
                    </div>
                    <a href=# target=_blank class=card-link-overlay></a>
                </div>
            </article>
            <article class="col-12 col-sm-6 col-lg-4">
                <div class="card demo-card" style="border-radius: 1.875rem; background-color: #E8EBF4;">
                    <div class="card-body text-center p-4">
                        <img src="{{ url('img/selling-product-2') }}.png" alt="No image available" style="width: 100%">
                        <h1 class="mt-9 fs-4 pt-3 text-black text-center fw-bold">Giày bóng đá nam NIKE</h1>
                        <h1 class="mt-9 fs-4 fw-bold text-center" style="color: #415EC6;">1.305.000</h1>
                    </div>
                    <a href=# target=_blank class=card-link-overlay></a>
                </div>
            </article>
            <article class="col-12 col-sm-6 col-lg-4">
                <div class="card demo-card" style="border-radius: 1.875rem; background-color: #E8EBF4;">
                    <div class="card-body text-center p-4">
                        <img src="{{ url('img/selling-product-3') }}.png" alt="No image available" style="width: 100%">
                        <h1 class="mt-9 fs-4 pt-3 text-black text-center fw-bold">Bóng rổ ADIDAS all - court</h1>
                        <h1 class="mt-9 fs-4 fw-bold text-center" style="color: #415EC6;">600.000</h1>
                    </div>
                <a href=# target=_blank class=card-link-overlay></a>
                </div>
            </article>
        </div>

        <!-- Xem thêm -->
        <div class="text-center my-3">
            <a href="#" class="fs-5 letter-spacing-caption text-black">
                Xem thêm 
                <ti class="ti-angle-double-right fs-6"></ti>
            </a>
        </div>
    </div>
</section>

<!-- NEW - EVENT -->
<section class="section pt-21 pb-10 pb-md-9 pb-lg-4">
    <div class="section-content container">
        <div class="text-center py-3 my-3">
            <small class="fs-1 lh-1 text-uppercase fw-bold letter-spacing-caption ">Tin tức - Sự kiện</small>
        </div>
        <div class=row>
            <article class="col-12 col-md-6">
                <div class="card demo-card" style="border-radius: 1.875rem; background-color: #E8EBF4;">
                    <div class="card-body text-center p-4">
                        <img src="{{ url('img/event-1.png') }}" alt="No image available" style="width: 100%">
                        <h1 class="mt-9 mb-0 fs-4 pt-3 text-black text-center fw-bold">NGÀY VÀNG - NGÀN ƯU ĐÃI </h1>
                        <h2 class="mt-9 mb-0 fs-5 text-black text-center" >Cơ hội vàng để mua sắm hàng ngàn sản phẩm chính hãng với ưu đãi lên tới 50 - 70%</h2>
                    </div>
                    <a href=# target=_blank class=card-link-overlay></a>
                </div>
            </article>
            <article class="col-md-6">
                <div class="card demo-card" style="border-radius: 1.875rem; background-color: #E8EBF4;">
                    <div class="card-body text-center p-4">
                        <img src="{{ url('img/event-2.png') }}" alt="No image available" style="width: 100%">
                        <h1 class="mt-9 mb-0 fs-4 pt-3 text-black text-center fw-bold">“SIÊU GIÀY” CHÍNH THỨC RA MẮT</h1>
                        <h2 class="mt-9 mb-0 fs-5 text-black text-center" >BOOM INFINITY 2 - Giày chạy bộ giảm chấn được mong chờ nhất trong năm 2022 </h2>
                    </div>
                    <a href=# target=_blank class=card-link-overlay></a>
                </div>
            </article>
        </div>

        <!-- Xem thêm -->
        <div class="text-center my-3">
            <a href="#" class="fs-5 letter-spacing-caption text-black">
                Xem thêm 
                <ti class="ti-angle-double-right fs-6"></ti>
            </a>
        </div>
    </div>
</section>
@endsection