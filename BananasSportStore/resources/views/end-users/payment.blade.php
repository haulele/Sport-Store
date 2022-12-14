@extends('layouts.homepage')

@section('css')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/sign_in.js') }}"></script>
@endsection

@section('content')
<!-- main section -->
<div class="container">
    <div class="row">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="{{route('showCart') }}" class="text-decoration-none " style="color: #415EC6;">Giỏ hàng</a></li>
                <li class="breadcrumb-item active " aria-current="page"><a href="#" class="text-decoration-none" style="color: #415EC6;">Thanh toán</a></li>
            </ol>
        </nav>
    </div>
</div>

<div class="container" style="margin-bottom: 30px;">
    <div class="row">
        <!-- Thông tin nhận hàng -->
        <div class="col-lg-4 col-md-6">
            <div class="accordion accordion-borderless" id="accordionFlushExampleX">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX">
                    <button class="accordion-button text-black fw-bold" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapseOneX" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Thông tin nhận hàng
                    </button>
                    </h2>
                    <div id="flush-collapseOneX" class="accordion-collapse collapse show" aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                        <div class="accordion-body">
                            <form class="needs-validation" action="" method="post" novalidate >
                                <div class="col-md-12 col-md-offset-4">  
                                    <!-- email -->
                                    <div class="form-group">
                                        <div class="col-12 form-floating mb-3">
                                            <input type="email" class="form-control" name="email" autocomplete="email" id="floatingInput" placeholder="name@example.com" required>
                                            <label for="floatingInput" class="form-lable ps-4">Email</label>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập email của bạn
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Họ và tên -->
                                    <div class="form-group">
                                        <div class="col-12 form-floating mb-3">
                                            <input type="text" class="form-control" name="name" autocomplete="name" id="floatingInput" placeholder="Name" required>
                                            <label for="floatingInput" class="form-lable ps-4">Họ và tên</label>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập họ và tên của bạn
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SĐT -->
                                    <div class="form-group">
                                        <div class="col-12 form-floating mb-3">
                                            <input type="text" class="form-control" name="phoneNumber" autocomplete="number" id="floatingInput" placeholder="phoneNumber" required>
                                            <label for="floatingInput" class="form-lable ps-4">Số điện thoại</label>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập số điện thoại của bạn
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tỉnh thành -->
                                    <div class="form-group">
                                        <select class="form-select form-floating mb-3"style="padding: 1rem 0.75rem;">
                                            <option selected>Tỉnh thành</option>
                                            <option value="1">One</option>

                                            <div class="invalid-feedback">
                                                Vui lòng chọn tỉnh thành của bạn
                                            </div>
                                        </select>
                                    </div>
                                    <!-- Quận huyện -->
                                    <div class="form-group">
                                        <select class="form-select form-floating mb-3"style="padding: 1rem 0.75rem;">
                                            <option selected>Quận huyện</option>
                                            <option value="1">One</option>

                                            <div class="invalid-feedback">
                                                Vui lòng chọn quận huyện của bạn
                                            </div>
                                        </select>
                                    </div>
                                    <!-- Phường xã -->
                                    <div class="form-group">
                                        <select class="form-select form-floating mb-3" style="padding: 1rem 0.75rem;">
                                            <option selected>Phường xã</option>
                                            <option value="1">One</option>

                                            <div class="invalid-feedback">
                                                Vui lòng chọn phường xã của bạn
                                            </div>
                                        </select>
                                    </div>
                                    <!-- Địa chỉ -->
                                    <div class="form-group">
                                        <div class="col-12 form-floating mb-3">
                                            <input type="text" class="form-control" name="address" autocomplete="address" id="floatingInput" placeholder="Address" required>
                                            <label for="floatingInput" class="form-lable ps-4">Địa chỉ</label>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập Địa chỉ của bạn
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ghi chú -->
                                    <div class="form-group">
                                        <div class="col-12 form-floating mb-3">
                                            <textarea class="form-control" id="floatingInput" placeholder="Note" rows="3" required></textarea>
                                            <label for="floatingInput" class="form-lable ps-4">Ghi chú</label>
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hình thức thanh toán -->
        <div class="col-lg-4 col-md-6">
            <div class="accordion accordion-borderless" id="accordionFlushExampleX">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneX">
                    <button class="accordion-button text-black fw-bold" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapseOneX" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Phương thức thanh toán
                    </button>
                    </h2>

                    <div class="form-check m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                        Thanh toán khi nhận hàng
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Thanh toán bằng ATM nội địa
                        </label>
                    </div>
                    <div class="form-check m-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                        Thanh toán qua MOMO
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Đơn hàng -->
        <div class="col-lg-4">
            <div class="accordion accordion-borderless" id="accordionFlushExampleX">
                <div class="accordion-item" style="background-color: #E8EBF4;">
                    <h2 class="accordion-header" id="flush-headingOneX">
                    <button class="accordion-button text-black fw-bold" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#flush-collapseOneX" aria-expanded="true" aria-controls="flush-collapseOneX">
                        Đơn hàng
                    </button>
                    </h2>

                    <div class="row">
                        <div class="col-3 m-2">
                            <img src="{{ asset('img/Rectangle 37.png') }}" alt="No image available">
                        </div>
                        <div class="col-7 m-2" style="color: #415EC6;">
                            <p class="fw-bold mb-0">Áo khoác thể thao nữ ANTA</p>
                            <p class="mb-0">S / Màu tím</p>
                            <p>1.220.000₫</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 m-2">
                            <img src="{{ asset('img/Rectangle 37 (1).png') }}" alt="No image available">
                        </div>
                        <div class="col-7 m-2" style="color: #415EC6;">
                            <p class="fw-bold mb-0">Quần short tập luyện nam REEBOK</p>
                            <p class="mb-0">M / Màu xanh</p>
                            <p>835.000₫</p>
                        </div>
                    </div>
                    <hr class="w-80 mx-4" style="color: #415EC6; border-top: 3px solid;">

                    <form class="needs-validation" action="" method="post" novalidate >
                        <div class="form-group row">
                            <div class="col-7 form-floating mb-3 ms-3">
                                <input type="text" class="form-control" name="code" autocomplete="" id="floatingInput" placeholder="Nhập mã giảm giá" style="border: 1px solid #474444B2;" required>
                                <label for="floatingInput" class="form-lable ps-4">Nhập mã giảm giá</label>
                                <div class="invalid-feedback">
                                    Vui lòng nhập mã giảm giá
                                </div>
                            </div>
                            <div class="col-4 mx-auto">
                                <button class="btn px-3 py-2 mt-2" type="submit" href="#" style="background-color: #6D87E3; color:white;">Áp dụng</button>
                            </div>
                        </div>
                        <hr class="w-80 mx-4" style="color: #415EC6; border-top: 3px solid;">
                    </form>

                    <div class="row">
                        <div class="col-7">
                            <p class="ms-3">Tạm tính:</p>
                        </div>
                        <div class="col-4">
                            <p class="text-end fw-bold">3.275.000đ</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <p class="ms-3">Phí vận chuyển:</p>
                        </div>
                        <div class="col-4">
                            <p class="text-end fw-bold">25.000đ</p>
                        </div>
                    </div>
                    <hr class="w-80 mx-4" style="color: #415EC6; border-top: 3px solid;">

                    <div class="row">
                        <div class="col-11">
                        <p class="float-end" style="color: #415EC6;">Tổng tiền: <span class="fw-bold fs-5">3.300.000đ</span> </p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6 mt-2">
                            <i class="bi bi-chevron-left ms-3" style="color:#415EC6">
                                <a class="text-decoration-none" style="color: #415EC6; font-size:70%;" href="{{ route('showCart') }}">Quay về giỏ hàng</a>
                            </i>
                        </div>
                        <div class="col-5">
                            <button class="btn px-4 py-2 fw-bold float-end mb-3" type="submit" href="#" style="background-color: #068F70; color:white;">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
</script>
@endsection('content')