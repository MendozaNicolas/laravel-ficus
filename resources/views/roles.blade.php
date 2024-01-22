@extends('layout.app')

@section('content')
    <div class="sidebar-container">

        <section>
            <x-roles.addModal />
            <x-roles.readModal />
            <x-roles.updateModal />

            <div class="container">
                <div class="ms-5 my-3">
                    <h2 class="d-inline">Roles Management</h2>
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">
                        Add role
                    </button>
                </div>

                <hr>
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @elseif ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="table-box noselect">
                    <table class="table shadow-lg rounded shadow-table">
                        <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th width="10%">Name</th>
                                <th width="50%">guard_name</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <td>
                                        <button class="btn"
                                            onclick="readRoleModal('{{ $role->name }}', '{{ $role->guard_name }}');"
                                            data-bs-toggle="modal" data-bs-target="#readModal">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-layout-dashboard" width="24"
                                                height="24" viewBox="0 -960 960 960" fill="#005b41"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d=" M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75
                                                        0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45
                                                        31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146
                                                        0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174
                                                        218.5T480-200Zm0-300Zm0 220q113 0
                                                        207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101
                                                        144.5 160.5T480-280Z" />
                                            </svg>
                                        </button>
                                        <button class="btn"
                                            onclick="updateRoleModal( '{{ $role->id }}', '{{ $role->name }}', '{{ $role->guard_name }}');"
                                            data-bs-toggle="modal" data-bs-target="#updateModal">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-layout-dashboard" width="24"
                                                height="24" viewBox="0 -960 960 960" fill="#ffc107"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d=" M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11
                                                        26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5
                                                        30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                            </svg>
                                        </button>
                                        <form action="/roles/delete" method="POST" class="d-inline">
                                            @csrf
                                            <input hidden type="number" name="id" value="{{ $role->id }}">
                                            <button type="submit" class="btn">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-layout-dashboard" width="24"
                                                    height="24" viewBox="0 -960 960 960" fill="#dc3545"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </section>


    </div>
@endsection
