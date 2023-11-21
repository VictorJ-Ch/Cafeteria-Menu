@extends('layouts.app')
<!doctype html>
<html lang="es">
    <head>
        <title>LogIn - Famtime Food</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('img/Icon/Icon.webp')}}" class="img-fluid img-sm" alt="Famtime-food-app-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 py-2">
                            <li class="nav-item">
                                <img src="{{asset('img/Icon/Famtime_food_Logo.webp')}}" class=" img-fluid img-sm" alt="QR-code">
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                            <!--NO BORRAR-->
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-2 text-right z-10">
                                @auth
                                    <button type="button" class="btn btn-outline-dark">
                                        <a href="{{ url('/home') }}" class="">Home</a>
                                    </button>
                                @else
                                    <button type="button" class="btn btn-outline-dark">
                                        <a href="{{ route('login') }}" class="">Log in</a>
                                    </button>
                                    @if (Route::has('register'))
                                        <button type="button" class="btn btn-outline-dark">
                                            <a href="{{ route('register') }}" class="">Register</a>
                                        </button>                     
                                    @endif
                                @endauth
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            @section('content')
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <!--Title-->
                            <h3 class="mb-5">LOG IN</h3>
                            <!--MAIL-->
                            <div class="form-outline mb-4">
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX-2">Email</label>
                            </div>
                            <!--PASSWORD-->
                            <div class="form-outline mb-4">
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX-2">Password</label>
                            </div>
                            <!--Forgot password-->
                            <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Forgot password?</a></p>
                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-check-label" for="form1Example3"> Remember password </label>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            <hr class="my-4">
                            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                            type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                            type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
        </main>
        <footer>
            <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5">
                <!-- Copyright -->
                <div class="text-white mb-3 mb-md-0">
                Eclipse © 2023. Todos los derechos reservados.
                </div>
                <!-- Copyright -->

                <!-- Right -->
                <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </div>
                <!-- Right -->
            </div>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    </body>
</html>