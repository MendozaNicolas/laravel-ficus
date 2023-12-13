<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ficus</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="/laravel-ficus/dist/css/shadow.css" rel="stylesheet"> 
        <link href="/laravel-ficus/dist/css/style.css" rel="stylesheet"> 

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="/laravel-ficus/dist/js/index.js"></script>
    </head>
    <body class="antialiased txt-color-white bg-color-start">

        <header>
            <nav class="navbar bg-color-middle">
                <div class="container-fluid">
                    <a href="#"><img src="/laravel-ficus/assets/ficus_brand.png" alt="Ficus brand" width="50px"></a>
                
                    <div class="nav navbar-nav navbar-right hidden-xs">
                        @if(isset(Auth::user()->username))
                        <a href="{{ url('/main/logout') }}" class="btn shadow-btn" role="button">Log Out  <i class="fa fa-sign-out"></i></a>
                        @endif
                    </div>
                </div>
            </nav>
        </header>
        
        <main role="main">
            @if(!isset(Auth::user()->username))
            <script>window.location = "../";</script>
            @endif
            <br>
            
            <hr>
            <section>
                <h2>Roles</h2>
                <table class="noselect table shadow-table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>name</th>
                                <th>guard_name</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                            </tr>
                      </thead>
                      <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </td>
                                <td>{{$role->id}}</td>
                             <td>{{$role->name}}</td>
                             <td>{{$role->guard_name}}</td>
                                <td>{{$role->created_at}}</td>
                                <td>{{$role->updated_at}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                </table>
            </section>
        </main>
        <div id="contextMenu" class="context-menu" 
    style="display: none"> 
    <ul> 
        <li><a href="#">Element-1</a></li> 
        <li><a href="#">Element-2</a></li> 
        <li><a href="#">Element-3</a></li> 
        <li><a href="#">Element-4</a></li> 
        <li><a href="#">Element-5</a></li> 
        <li><a href="#">Element-6</a></li> 
        <li><a href="#">Element-7</a></li> 
    </ul> 
</div> 
    </body>
</html>