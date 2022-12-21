@extends('layouts.homepage_product')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('sidebar-01/css/style.css') }}">
@endsection

@section('js')
    <script src="{{ asset('sidebar-01/js/jquery.min.js') }}"></script>
    <script src="{{ asset('sidebar-01/js/popper.js') }}"></script>
    <script src="{{ asset('sidebar-01/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sidebar-01/js/main.js') }}"></script>
@endsection

@section('content')
<div class="site-blocks-cover"> 
    <div class="container">
        <div class="site-img">
            <div class="caption">
                <h3><b>TẤT CẢ SẢN PHẨM</b></h3>
            </div>
        </div>
    </div>
</div> 
<div class="sort py-4">
    <div class="d-flex justify-content-end">
        <select name="sort-name" id="sort-select" style="padding: 10px ;">
            <option value="1">Sắp xếp: Thứ tự mặc định</option>
            <option value="2">Tên A-Z</option>
            <option value="3">Tên Z-A</option>
            <option value="4">Giá từ thấp đến cao</option>
            <option value="5">Giá từ cao đến thấp</option>
        </select>
    </div>
</div>

<div class="wrapper d-flex align-items-stretch pb-5">
    <!-- sidebar -->
    <nav id="sidebar">
        <div class="p-4 pt-5 content-sidebar">
        <h5>Danh Mục Sản Phẩm</h5>
            <ul class="list-unstyled components mb-5">
                @foreach($categoriesFull as $categoryParent)
                <li class="active row">
                    <div class="col">
                        <a href="{{ route('category.product',
                        ['slug' => $categoryParent->slug,
                         'id' => $categoryParent->id]) }}">{{$categoryParent->name}}</a>
                    </div>
                    <div class="col justify-content-end d-flex pt-2">
                        <a href="#homeSubmenu_{{$categoryParent->id}}" data-toggle="collapse"
                        aria-expanded="false" class="ti-angle-down"></a>
                    </div>
                    @include('partials.homepage_partials.child_menu', ['categoryParent' => $categoryParent])
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
    <!-- end sidebar -->
    <!-- content products -->
    <div class="container-fluid">
        <div class="row">
            @foreach($productsfilter as $product )
            <div class="col-sm-6 col-md-4 col-lg-3 py-3 ">
                <div class="product" style="background-color: #E8EBF4; border-radius: 30px;">
                    <a href="{{ route('category.productdetail', ['id' => $product->id,
                    'category_id' => $product->category_id]) }}" class="img-prod"><img class="img-fluid mx-auto p-3 d-block"  src="{{ $product->feature_image_path }}" alt="Colorlib Template">
                    </a>
                    <div class="text py-3 px-3">
                        <h3><a href="{{ route('category.productdetail', ['id' => $product->id,
                        'category_id' => $product->category_id]) }}" class="card-name">{{ $product->name }}</a></h3>
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">{{ number_format($product->price) }} VNĐ</span></p>
                            </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end products -->
            <!-- pagination -->
            <div class="pagination align-items-center pt-4 pb-4 justify-content-center">
                {{ $productsfilter->links() }}
            </div>
            <!-- end pagination -->
        </div>
    </div>
</div>
@endsection