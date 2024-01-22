@extends('layout.app')

@section('content')
    <div class="background-waves"></div>
    <div class="container">


        @if (isset(Auth::user()->username))
            <div class="container ms-5 ps-5">
                <strong class="ms-5 ps-5">
                    <h2 class="text-primary">Welcome {{ Auth::user()->name }}!</h2>
                </strong>
                <hr>
            </div>
        @endif

        <section class="sidebar-container d-flex flex-wrap w-100 h-100" style="gap:3rem; padding-left: 13rem;">
            <a href="/items" style="text-decoration: none;">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Items Management</h5>
                        <h6 class="card-subtitle mb-2 text-danger fw-bold">Out of stock</h6>
                        <p class="card-text">The item #ITEM_NAME is out of stock, click for more information</p>
                    </div>
                </div>
            </a>
            <a href="/users" style="text-decoration: none;">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Users Management</h5>
                        <h6 class="card-subtitle mb-2 text-info fw-bold">Need to add users?</h6>
                        <p class="card-text">Add users here, click for more information</p>
                    </div>
                </div>
            </a>
            <a href="/items" style="text-decoration: none;">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Items Management</h5>
                        <h6 class="card-subtitle mb-2 text-warning fw-bold">Low stock</h6>
                        <p class="card-text">The item #ITEM_NAME, and more is low stock, click for more information</p>
                    </div>
                </div>
            </a>
            <a href="/roles" style="text-decoration: none;">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Roles Management</h5>
                        <h6 class="card-subtitle mb-2 text-info fw-bold">Add user role</h6>
                        <p class="card-text">The user #USER_NAME dont have a role, click for more information</p>
                    </div>
                </div>
            </a>
        </section>
    </div>
@endsection
