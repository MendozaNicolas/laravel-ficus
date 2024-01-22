@extends('layout.app')

@section('content')
    <div>
        <section>
            <x-items.addModal />
            <x-items.readModal />
            <x-items.updateModal />



            <div class="container">
                <div class="ms-5 my-3">
                    <h2 class="d-inline">Settings</h2>
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">
                        Add item
                    </button>
                </div>

            </div>
        </section>
    </div>
@endsection
