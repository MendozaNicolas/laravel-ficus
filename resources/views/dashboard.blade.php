@extends('layout.app')

@section('content')
    <div class="background-waves"></div>
    <div>


        @if (isset(Auth::user()->username))
            <div class="container ms-5 ps-5">
                <strong class="ms-5 ps-5">
                    <h2 class="text-primary">Bienvenido/a {{ Auth::user()->name }}</h2>
                </strong>
            </div>
        @endif

        <section class="container ms-5 ps-5">

            <hr>
            <div class="container">
                <div class="flex d-flex align-content-start flex-wrap" style="gap: 25px;">
                    <a href="./dashboard/roles" style="text-decoration: none;">
                        <div class="shadow-card noselect" style="width: 18rem;">
                            <div class="shadow-card-body">
                                <h5 class="card-title">Roles Management</h5>
                                <p class="shadow-card-text">Roles Management. Create, read, update, delete and assign
                                    roles.</p>
                            </div>
                        </div>
                    </a>
                    <a href="./dashboard/roles" style="text-decoration: none;">
                        <div class="shadow-card noselect" style="width: 18rem;">
                            <div class="shadow-card-body">
                                <h5 class="card-title">Roles Management</h5>
                                <p class="shadow-card-text">Roles Management. Create, read, update, delete and assign
                                    roles.</p>
                            </div>
                        </div>
                    </a>
                    <a href="./dashboard/roles" style="text-decoration: none;">
                        <div class="shadow-card noselect" style="width: 18rem;">
                            <div class="shadow-card-body">
                                <h5 class="card-title">Roles Management</h5>
                                <p class="shadow-card-text">Roles Management. Create, read, update, delete and assign
                                    roles.</p>
                            </div>
                        </div>
                    </a>
                    <a href="./dashboard/roles" style="text-decoration: none;">
                        <div class="shadow-card noselect" style="width: 18rem;">
                            <div class="shadow-card-body">
                                <h5 class="card-title">Roles Management</h5>
                                <p class="shadow-card-text">Roles Management. Create, read, update, delete and assign
                                    roles.</p>
                            </div>
                        </div>
                    </a>
                    <a href="./dashboard/roles" style="text-decoration: none;">
                        <div class="shadow-card noselect" style="width: 18rem;">
                            <div class="shadow-card-body">
                                <h5 class="card-title">Roles Management</h5>
                                <p class="shadow-card-text">Roles Management. Create, read, update, delete and assign
                                    roles.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
