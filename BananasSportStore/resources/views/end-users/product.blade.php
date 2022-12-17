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
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="p-4 pt-5 content-sidebar">
        <h5>Danh Mục Sản Phẩm</h5>
            <ul class="list-unstyled components mb-5">
                @foreach($categoriesFull as $categoryParent)
                <li class="active">
                    <a href="#homeSubmenu_{{$categoryParent->id}}" data-toggle="collapse"
                    aria-expanded="false" class="dropdown-toggle">{{$categoryParent->name}}</a>
                    @include('partials.homepage_partials.child_menu', ['categoryParent' => $categoryParent])
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="product-list">
                    <div class="row ">
                        <div class="col-sm-6 col-md-4 col-lg-3 py-3 ">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block"  src="./view/src/public/img/Rectangle13.png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#" class="card-name">Áo Khoác Thể thao Nam PUMA</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">1.120.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block " src="./view/src/public/img/Rectangle13(1).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#" class="card-name">Tạ Tay PROCASE Sắt Bọc Nhựa 3 Kg</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">295.000</span></p>
                                        </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(2).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#" class="card-name">Balo NIKE  Utility Elite màu đen</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">2.530.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(3).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#" class="card-name">Áo croptop tập luyện nữ PUMA</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">630.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(4).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Giày Tập Luyện Unisex PUMA</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">2.500.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(5).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Áo Khoác Thể thao Nam PUMA</a></h3>
                                    
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">2.790.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(6).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Quần legging nữ NIKE màu đen  </a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">1.005.000</span></p>
                                        </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(7).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Balo tập luyện ERKE màu xanh</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">860.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(8).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Áo Bra tập luyện nữ ADIDAS</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">715.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(9).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Băng ống tay tập luyện ZAMST</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">965.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(10).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Áo croptop tập luyện nữ PUMA</a></h3>
                                    
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">630.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(11).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Áo Polo nam LIVAN MILER</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">360.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(12).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Nón Lưỡi Trai REEBOK</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">440.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(13).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Dép Lifestyle unisex PUMA màu xanh</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">895.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(14).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Thảm YOGA tập luyện PUMA màu đen</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">919.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="product" style="background-color: #E8EBF4; border-radius: 30px; height: 460px;">
                                <a href="#" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="./view/src/public/img/Rectangle13(15).png" alt="Colorlib Template">
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="#"  class="card-name">Set đồ tập tay ngắn màu xám</a></h3>
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">650.000</span></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination no-gutters align-items-center justify-content-center p-5">
                            <ul>
                                <a href="#"><li>&lt</li></a>
                                <a class="active" href="#"><li>1</li></a>
                                <a href="#" style="border: 2px solid #6D87E3;"><li>2</li></a>
                                <a href="#" style="border: 2px solid #6D87E3;"><li>3</li></a>
                                <a href="#" class="d-none d-sm-inline-block" style="border: 2px solid #6D87E3;"><li>4</li></a>
                                <a href="#" class="d-none d-sm-inline-block"  style="border: 2px solid #6D87E3;"><li>5</li></a>
                                <a href="#" class="d-none d-sm-inline-block" style="border: 2px solid #6D87E3;"><li>6</li></a>
                                <a href="#"><li>></li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection