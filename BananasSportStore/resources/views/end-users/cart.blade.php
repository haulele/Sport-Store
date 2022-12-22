@extends('layouts.homepage')

@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/cart.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>
    
    function CartUpdate(event) {
        event.preventDefault(); 
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).parents().prev().prev().find('.quantity-field').val(); 
        $.ajax({
            type: "GET",
            url: urlUpdateCart,
            data: {id: id, quantity: quantity},
            success: function(data) {
                if(data.code === 200){
                    $('body').html(data.cart_component);
                }
            },
            error: function(){
                
            }
        })
    }

    function CartDelete(event) {
        event.preventDefault(); 
        let urlDelete = $('.cart').data('url');
        let id = $(this).data('id');    
        $.ajax({
            type: "GET",
            url: urlDelete,
            data: {id: id},
            success: function(data) {
                if(data.code === 200){
                    $('body').html(data.cart_component);
                    alert('Xóa thành công');
                }
            },
            error: function(){

            }
        })
    }

    $(function () {
        $(document).on('click', '.cart-update', CartUpdate);
        $(document).on('click', '.cart-delete', CartDelete);
    })
</script>
@endsection

@section('content')
        <!-- main section -->
    <div class="cart" data-url="{{ route('deleteCart') }}">
        <div class="container">
            <div class="row">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="{{ route('layouts.product') }}" class="text-decoration-none " style="color: #415EC6;">Sản phẩm</a></li>
                        <li class="breadcrumb-item active " aria-current="page"><a href="#" class="text-decoration-none" style="color: #415EC6;">Giỏ hàng</a></li>
                    </ol>
                </nav>
            </div>
        </div>      

        <div class="container">
            <div class="row pt-4 pb-3 mb-4 fw-bold" style="background-color: #E8EBF4; border-radius: 20px;">
                <div class="col-5 text-center">
                    <p>Sản phẩm</p>
                </div>
                <div class="col-2 text-center">
                    <p>Số lượng</p>
                </div>
                <div class="col-3 text-center">
                    <p>Thành tiền</p>
                </div>
                <div class="col-1 text-left">
                    <p>Lưu</p>
                </div>
                <div class="col-1 text-left">
                    <p>Xóa</p>
                </div>
            </div>
        </div>
      
        <!-- products -->
        <div class="update_cart_url" data-url="{{ route('updateCart') }}">
        @php
        $total = 0;
        @endphp
        @foreach($carts as $cart)
        @php
        $total += $cart['price'] * $cart['number_product'];
        $id = $cart['id'];
        @endphp
        
        <div class="container">
            <div class="row pt-4 pb-3 mb-4" style="background-color: #E8EBF4; border-radius: 20px;">
                <div class="col-5">
                    <div class="row">
                        <div class="col-5 col-md-3">
                            <img src="{{ $cart['image'] }}" class="float-end rounded mx-auto d-block" alt="No image available" style="max-width: 100%;">
                        </div>
                        <div class="col-7 col-md-9" style="color: #415EC6;">
                            <p class="fw-bold mb-0">{{ $cart['name'] }}</p>
                            <p class="mb-0">S / Màu tím</p>
                            <p>{{ number_format($cart['price']) }} VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 text-center pt-4">
                    <div class="input-spinner" style="border: 1px solid #474444; border-radius: 10px;">
                        <input type="button" value="-" onclick="minus('{{ $id }}')" class="button-minus btn btn-sm minus" data-field="quantity">
                        <input type="number" name="quantity" id="{{ $id }}" step="1" max="10" min="1" value="{{ $cart['number_product'] }}" class="quantity-field form-control-sm form-input text-center num" style="border: none; background-color: #E8EBF4;">
                        <input type="button" value="+" onclick="plus('{{ $id }}')" class="button-plus btn btn-sm plus" data-field="quantity">
                    </div>
                </div>
                <div class="col-3 text-center">
                    <p class="fw-bold pt-4" style="color: #415EC6;">{{ number_format($cart['price'] * $cart['number_product']) }} VNĐ </p>
                </div>
                <div class="col-1 text-left mt-4">
                    <a href="" data-id = "{{ $id }}" class="cart-update" style="border: none; background-color: #E8EBF4;">
                        <i class="ti-save" style="font-size: 23px;"></i>
                    </a>
                </div>
                <div class="col-1 text-left mt-3">
                    <a href="" data-id = "{{ $id }}" class="cart-delete" style="border: none; background-color: #E8EBF4;">
                        <i class="bi bi-trash" style="font-size: 26px;"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        <!-- payment -->
        <div class="container">
            <div class="row">
                <div class="col-12 mt-2">
                <p class="float-end fs-5" style="color: #415EC6;">Tổng tiền: <span class="fw-bold fs-4"> {{ number_format($total) }} VNĐ</span> </p>
                </div>
            </div>

            <div class="row">
                <div class="d-grid gap-2 mb-3 d-md-flex justify-content-md-end">
                <a href="{{ route('layouts.product') }}" class="btn me-md-2 fs-5 fw-bold px-5 py-2" type="button" style="border: 1px solid #6D87E3; color: #6D87E3;">Mua thêm</a>
                <a class="btn fs-5 fw-bold px-5 py-2" type="button" style="background-color: #6D87E3; color: white;">Thanh toán</a>
            </div>
            </div>
        </div>
    </div>
@endsection