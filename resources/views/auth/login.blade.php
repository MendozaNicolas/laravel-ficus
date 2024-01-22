<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Ficus</title>

    <link href="/dist/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body class="antialiased txt-color-white bg-color-start overflow-hidden">
    <div class="background-blob"> </div>
    <div>
        <section class="d-flex justify-content-center align-content-center noselect">
            @if (isset(Auth::user()->username))
                <script>
                    window.location = "./dashboard";
                </script>
            @endif

            <div class="login-box shadow-lg mt-5">
                <div class="d-flex justify-content-center noselect">
                    <img class="" src="./assets/ficus_brand.png" alt="brand logo" width="50%" id="logo">
                </div>
                <div class="brand-text d-flex justify-content-center">
                    <h4>Sign in to <span class="fw-bold text-primary ">Ficus</span></h4>
                </div>
                @error('username')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
                <form method="POST" action="{{ url('/login/authenticate') }}">
                    @csrf
                    <div class="">
                        <label for="user">Username</label>
                        <input autocomplete="off" type="text" name="username" class="mt-1 shadow-input"
                            id="username" required aria-required="true">

                    </div>
                    <div class="mt-2">
                        <label for="password">Password</label>
                        <input autocomplete="off" type="password" name="password" class="mt-1 shadow-input"
                            id="password" required aria-required="true">
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" name="login" class="btn btn-primary fw-bold ps-5 pe-5">Log In</button>
                    </div>
                </form>
                <hr>
                <div>
                    <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                        href="#">Forgot password?</a>
                </div>
        </section>


    </div>
</body>

</html>
