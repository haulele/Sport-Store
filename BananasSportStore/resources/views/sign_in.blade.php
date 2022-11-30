<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BANASPORTS - Sign in</title>
        <link href="{{ url('css/product.css') }}" type="text/css" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ url('font/themify-icons-font/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="{{ url('js/sign_in.js') }}"></script>
    </head>

    <body>
        <!-- Main section -->
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <img class="col-md-2 col-lg-5 p-md-3 d-flex sign-in-img" src="./src/public/img/Modal.png">
                    <form class="col-md-2 col-lg-5 p-md-4 ms-5 d-flex ">
                        <div class="container"> 
                            <div class="row">
                            <h1 class="text-center logo-name">BANASPORTS</h1>
                                <div class="col-md-12 col-md-offset-4">  
                                    <div class="signin-form "> 
                                        <!-- name -->
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name" required>
                                            <label for="floatingInput" class="form-lable"> <i class="person ps-2"></i> Tên</label>
                                            <!-- <div class="invalid-feedback"></div> -->
                                            
                                        </div>
                                        <!-- email -->
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                            <label for="floatingInput" class="form-lable">@ Email</label>
                                            <!-- <div class="invalid-feedback"></div> -->
                                        </div>
                                        <!-- password -->
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"  required="true" aria-label="password" aria-describedby="basic-addon1" >
                                            <div class="input-group-append">
                                                <span onclick="password_show_hide();">
                                                <i class="bi bi-eye-slash-fill" id="show_eye"></i>
                                                <i class="bi bi-eye-fill d-none" id="hide_eye"></i>
                                                </span>
                                            </div>
                                            <label for="floatingPassword" class="form-lable">Mật khẩu</label>
                                            <!-- <div class="invalid-feedback"></div> -->
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1">
                                            <div class="input-group-append">
                                                <span onclick="password_show_hide();">
                                                <i class="bi bi-eye-slash-fill" id="show_eye"></i>
                                                <i class="bi bi-eye-fill d-none" id="hide_eye"></i>
                                                </span>
                                            </div>
                                            <label for="floatingPassword" class="form-lable">Xác nhận lại mật khẩu</label>
                                            <!-- <div class="invalid-feedback"></div> -->
                                        </div> 
                                        <br> 
                                            <a class="btn float-end mb-2 fw-bold" type="submit" href="#" style="background-color: #52C673; color:white;"> 
                                                <i class="bi bi-box-arrow-in-left"></i> Đăng ký
                                            </a>  
                                        <br> 
                                        <br>
                                            <P class="float-end text-black">
                                                <small>Đã có tài khoản? Đăng nhập </small><a href="" style="color: red;"><small>tại đây</small></a> 
                                            </P>
                                        
                                        <br> 
                                        <br> 
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>