<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
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
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="antialiased txt-color-white bg-color-start" style="overflow: hidden">

        <header>
            <nav class="navbar bg-color-middle">
                <div class="container-fluid">
                    <a href=""><img src="/laravel-ficus/assets/ficus_brand.png" alt="Ficus brand" width="50px"></a>
                    
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
            <h2 class="ms-5">Users</h2>
            
            <hr>
            <section>
                @if ($message = Session::get('error'))
                    <div class="alert shadow-alert-danger alert-block alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert shadow-alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <hr>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert shadow-alert-success alert-dismissible alert-block">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endif
                <ul class="shadow-btn-group">
                    <li><a class="btn shadow-btn"  data-bs-toggle="modal" data-bs-target="#createUserModal">Create user</a></li>
                    <li><a class="btn shadow-btn" id="remove-btn" href="" >Remove user</a></li>
                    <li><a class="btn shadow-btn" onclick="openForm('UpdateForm')">Update user</a></li>
                    <li><a class="btn shadow-btn" id="btncheck">Assign role</a></li>
                    <li><a href="" class="btn shadow-btn">Assign permission</a></li>
                </ul>


                {{-- -------------------------------------------------------------------------- --}}
                {{--                                 CreateForm                                 --}}
                {{-- -------------------------------------------------------------------------- --}}
                <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="name"><b>Name</b></label>
                            <input type="text" placeholder="John Doe" name="name" class="shadow-input" autocomplete="off" required style="border-radius: 0">
    
                            <label for="username"><b>Username</b></label>
                            <input type="text" placeholder="johdoe" name="username" class="shadow-input" autocomplete="off"  required style="border-radius: 0">
                      
                            <label for="password"><b>Password</b></label>
                            <input type="password" placeholder="****" name="password" class="shadow-input" autocomplete="off"  required style="border-radius: 0">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="shadow-form-popup" id="CreateForm">
                    <form method="POST" action="./createuser" class="form-container noselect">
                        @csrf
                        <h1>Create new user</h1>
                  
                        <label for="name"><b>Name</b></label>
                        <input type="text" placeholder="John Doe" name="name" class="shadow-input" autocomplete="off" required style="border-radius: 0">

                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="johdoe" name="username" class="shadow-input" autocomplete="off"  required style="border-radius: 0">
                  
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="****" name="password" class="shadow-input" autocomplete="off"  required style="border-radius: 0">
                  
                        <button type="submit" class="btn">Create</button>
                        <button type="button" class="btn cancel" onclick="closeForm('CreateForm')">Cancel</button>
                    </form>
                </div>
                {{-- -------------------------------------------------------------------------- --}}
                {{--                                 UpdateForm                                 --}}
                {{-- -------------------------------------------------------------------------- --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="shadow-form-popup" id="UpdateForm">
                    <form method="POST" action="./updateuser" class="form-container noselect">
                        @csrf
                        <h1>Update user</h1>
                        <br>
                        <label for="id" class="fw-bold">User</label>
                        <select name="id" class="shadow-input mt-1 mb-3" style="border-radius: 0">
                            <option value="-1" selected>Select user</option>
                            @foreach ($users as $userItem)
                                <option value="{{$userItem->id}}">{{$userItem->username}}</option>
                            @endforeach
                        </select>

                        <label for="name" class="fw-bold">Name</label>
                        <input type="text" placeholder="John Doe" name="name" class="shadow-input" autocomplete="off" style="border-radius: 0">

                        <label for="username" class="fw-bold">Username</label>
                        <input type="text" placeholder="johdoe" name="username" class="shadow-input" autocomplete="off"  style="border-radius: 0">
                  
                        <label for="password" class="fw-bold">Password</label>
                        <input type="password" placeholder="****" name="password" class="shadow-input" autocomplete="off" style="border-radius: 0">
                  
                        <button type="submit" class="btn">Update</button>
                        <button type="button" class="btn cancel" onclick="closeForm('UpdateForm')">Cancel</button>
                    </form>
                </div>


                <div class="table-box noselect">
                    <table class="table shadow-table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckAll">
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>username</th>
                                    <th>password</th>
                                    <th>remember_token</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                </tr>
                          </thead>
                          <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            @if(isset(Auth::user()->username))
                                            <input @disabled($user->username == Auth::user()->username) class="form-check-input checkbox-item @if($user->username == Auth::user()->username){{'disabled'}}@endif" type="checkbox" value="{{$user->id}}" id="flexCheckDefault">
                                            @endif
                                        </div>
                                    </td>
                                    <td id="{{$user->id}}">{{$user->id}}</td>
                                 <td>{{$user->name}}</td>
                                 <td>{{$user->username}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>{{$user->remember_token}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                    </table>
                </div>
            </section>
        </main>
        <div id="contextMenu" class="context-menu noselect" style="display: none"> 
            <ul onclick="openForm('CreateForm')" class="context-menu-item"> 
                <li><a class="ds-block">Create user</a></li> 
            </ul> 
        </div> 
    </body>
</html>