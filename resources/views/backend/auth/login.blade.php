<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - {{ config('app.name') }}</title>
    <meta name="author" content="Addix Platforms">
    <link rel="stylesheet" href="{{ asset('css/backend/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
</head>

<body>
    <section class="login-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-lg-11 mx-auto card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-7 d-none d-lg-block px-0">
                                <div class="img-wrapper">
                                    <img src="{{ asset('img/backend/login/bg.webp') }}" alt="Login">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <form id="login-form" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="row p-4">
                                        <div class="col-12 mb-4">
                                            <h1 class="card-title">Welcome Back!</h1>
                                            <p class="card-text">Please sign in to access your account.</p>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label class="form-label" for="email">Email *</label>
                                            <input type="email" class="form-control" id="email" name="email" autofocus>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label class="form-label" for="password">Password *</label>
                                            <input type="password" class="form-control" id="password" name="password" >
                                        </div>

                                        <div class="col-12 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    id="flexCheckChecked" name="remember">
                                                <label class="form-check-label form-label mb-0 pb-0"
                                                    for="flexCheckChecked">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group">
                                            <button type="submit" class="w-100 btn btn-primary">Sign In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="{{ asset('js/backend/login.js') }}"></script>
</body>

</html>
