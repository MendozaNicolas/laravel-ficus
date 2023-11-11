<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ficus</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="/laravel-ficus/dist/shadow.css" rel="stylesheet"> 
        <link href="/laravel-ficus/dist/style.css" rel="stylesheet"> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased bg-color-start txt-color-white">

        <header>
            <nav class="navbar bg-color-middle">
                <div class="container-fluid">
                    <a href="#"><img src="/laravel-ficus/assets/ficus_brand.png" alt="Ficus brand" width="50px"></a>
                </div>
            </nav>
        </header>
        
        <main role="main">
            <section>
                @if (isset(Auth::user()->username))
                    <script>window.location="./main/dashboard";</script>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                <div class="login-box noselect center mt-5">
                    <div class="center-flex-x">
                        <img class="" src="/laravel-ficus/assets/ficus_brand.png" alt="brand logo"width="50%">
                    </div>
                <div class="brand-text center-flex-x display-inline">
                    <h4 class="display-inline-block">Sign in to <span class="fw-bold txt-color-green-primary display-inline-block">Ficus</span></h4>
                </div>
                <form  method="POST" action="{{  url('/main/checklogin') }}">
                @csrf
                    <div>
                        <label for="user">Username</label>
                        <input type="text" name="username" class="mt-1 shadow-input" id="username" required aria-required="true">
                    </div>
                    <div class="mt-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="mt-1 shadow-input" id="password" required aria-required="true">
                    </div>
                    <div class="mt-3 center-flex-x">
                        <button type="submit" name="login" class="btn btn-shadow fw-bold ps-5 pe-5">Log In</button>
                    </div>
                    <hr>
                </form>
                <div>
                    <a class="link-offset-1"  href="#">Forgot password?</a>
                </div>
            </section>
        </main>


    </body>
</html>