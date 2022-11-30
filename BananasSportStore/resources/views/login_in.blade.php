<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BANASPORTS - Login in</title>
        <link rel="stylesheet" href="{{ url('css/login_in.css') }}">
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
                <img class="col-md-6 sign-in-img" src="{{ url('img/Modal.png') }}">
                <form class="col-md-6 p-md-3 ms-auto mt-sm-4 mb-md-4 signup shadow needs-validation" action="" method="POST" novalidate style="background-color: #F5F5F5; border-radius: 30px; color: #415EC6;">
                    @csrf
                    <div class="container"> 
                        <div class="row">
                            <h1 class="text-center my-5 logo-name pt-3 fw-bold">BANASPORTS</h1>
                            <div class="col-md-12 col-md-offset-4">  
                                <!-- email -->
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" autocomplete="email" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput" class="form-lable ps-4">Email</label>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập email của bạn
                                    </div>
                                </div>
                                <!-- password -->
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control col-4 password" name="password" id="password" placeholder="Password"  required aria-label="password" aria-describedby="basic-addon1" >
                                    <label for="password" class="form-lable ps-4">Mật khẩu</label>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập mật khẩu
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="" class="text-black fst-italic ms-auto me-auto" ><small>Quên mật khẩu?</small></a> 
                                    <div class="form-check ms-auto me-auto">
                                        <input class="form-check-input" name="remember_me" type="checkbox" id="remember-me">
                                        <label class="form-check-label" for="remember-me"> Remember me </label>
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex justify-content-end">
                                    <button class="btn fw-bold" type="submit" name="submit" style="background-color: #52C673; color:white;"> 
                                        <i class="bi bi-person-circle"></i> Đăng nhập
                                    </button>
                                </div>        
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