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

            </div>
        </section>
    </div>
@endsection
