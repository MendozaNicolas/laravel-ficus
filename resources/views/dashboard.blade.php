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
    <body class="antialiased txt-color-white bg-color-start">

        <header>
            <nav class="navbar bg-color-middle">
                <div class="container-fluid">
                    <a href="#"><img src="/laravel-ficus/assets/ficus_brand.png" alt="Ficus brand" width="50px"></a>
                
                    <div class="nav navbar-nav navbar-right hidden-xs">
                        @if(isset(Auth::user()->username))
                        <a href="{{ url('/main/logout') }}" class="btn btn-shadow" role="button">Log Out  <i class="fa fa-sign-out"></i></a>
                        @endif
                    </div>
                </div>
            </nav>
        </header>
        
        <main role="main">
            @if(!isset(Auth::user()->username))
            <script>window.location = "../main";</script>
            @else
            <br>
            <div class="container">
                <strong><h2>Bienvenido/a {{ Auth::user()->name }}</h2></strong>
            </div>
            @endif
            <br>
            
            <hr>
            <section>
                <div class="container text-center">
                    <div class="row row-cols-auto">
                        <div class="col">
                            <div class="shadow-card noselect" style="width: 18rem;">
                                <div class="shadow-card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="shadow-card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="shadow-card noselect" style="width: 18rem;">
                                <div class="shadow-card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="shadow-card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="shadow-card noselect" style="width: 18rem;">
                                <div class="shadow-card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="shadow-card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="shadow-card noselect" style="width: 18rem;">
                                <div class="shadow-card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="shadow-card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-5">
                            <div class="shadow-card noselect" style="width: 18rem;">
                                <div class="shadow-card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="shadow-card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-5">
                            <div class="shadow-card noselect" style="width: 18rem;">
                                <div class="shadow-card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="shadow-card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-5">
                            <div class="shadow-card noselect" style="width: 18rem;">
                                <div class="shadow-card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="shadow-card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-5">
                            <div class="shadow-card noselect" style="width: 18rem;">
                                <div class="shadow-card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="shadow-card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>