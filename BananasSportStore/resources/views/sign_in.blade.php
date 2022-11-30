<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BANASPORTS - Sign in</title>
        <link rel="stylesheet" href="{{ url('css/sign_in.css') }}">
        <link rel="stylesheet" href="{{ url('font/themify-icons-font/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <script src="{{ url('js/sign_in.js') }}"></script>
    </head>

    <body>
        <!-- Main section -->
        <div class="container">
            <div class="row">
                <img class="col-md-6 p-md-3 sign-in-img" src="{{ url('img/Modal.png') }}">
                <form class="col-md-6 p-md-3 ms-auto mt-sm-4 mb-md-4 signup shadow needs-validation" novalidate style="background-color: #F5F5F5; border-radius: 30px; color: #415EC6;">
                    <div class="container"> 
                        <div class="row">
                        <h1 class="text-center my-5 logo-name pt-3 fw-bold">BANASPORTS</h1>
                            <div class="col-md-12 col-md-offset-4 parent">  
                                    <!-- name -->
                                <div class="form-group row">
                                    <div class=" col-11 form-floating mb-3">
                                        <input type="text" class="form-control" id="name" placeholder="name" required>
                                        <label for="floatingInput" class="form-lable ps-4"> Tên</label>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập tên của bạn
                                        </div>
                                    </div>
                                </div>
                                <!-- email -->
                                <div class="form-group row">
                                    <div class="col-11 form-floating mb-3">
                                        <input type="email" class="form-control" name="email" autocomplete="email" id="email" placeholder="name@example.com" required>
                                        <label for="floatingInput" class="form-lable ps-4">Email</label>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập email của bạn
                                        </div>
                                    </div>
                                </div>
                                <!-- số điện thoại -->
                                <div class="form-group row">
                                    <div class="col-11 form-floating mb-3">
                                        <input type="tel" class="form-control" autocomplete="tel" id="phone" name="phone" placeholder="xxx333788" required pattern="[0-9]{10}">
                                        <label for="phone" class="form-lable ps-4">Số điện thoại</label>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập số điện thoại của bạn
                                        </div>
                                    </div>
                                </div>
                                <!-- password -->
                                <div class="form-group row">
                                    <div class="col-11 form-floating mb-3">
                                        <input type="password" class="form-control col-4 password" id="password" placeholder="Password"  required aria-label="password" aria-describedby="basic-addon1" >
                                        <label for="password" class="form-lable ps-4">Mật khẩu</label>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập mật khẩu
                                        </div>
                                    </div>
                                    <div class="col-1 align-self-center" onclick="password_show_hide('password')">
                                        <i class="bi bi-eye-slash-fill show_eye"></i>
                                        <i class="bi bi-eye-fill d-none hide_eye"></i>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-11 form-floating mb-3">
                                        <input type="password" class="form-control col-4 password" id="password_recheck" placeholder="Password"  required aria-label="password" aria-describedby="basic-addon1" >
                                        <label for="password_recheck" class="form-lable ps-4">Nhập lại mật khẩu</label>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập lại mật khẩu
                                        </div>
                                    </div>
                                    <div class="col-1 align-self-center" onclick="password_show_hide('password_recheck')">
                                        <i class="bi bi-eye-slash-fill show_eye"></i>
                                        <i class="bi bi-eye-fill d-none hide_eye"></i>
                                    </div>
                                </div>
                                <button class="btn float-end mb-2 me-5 fw-bold" type="submit" href="#" style="background-color: #52C673; color:white;"> 
                                    <i class="bi bi-box-arrow-in-left"></i> Đăng ký
                                </button>  
                                <p class="me-5 float-end text-black">
                                    <small>Đã có tài khoản? Đăng nhập </small><a href="" style="color: red;"><small>tại đây</small></a> 
                                </p>
                            </div> 
                        </div>
                    </div>
                </form>
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
    </body>
</html>