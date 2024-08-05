@extends('layout.layout')

@include('layout.css')
@include('layout.script')

@section('title', 'Attendance')

@section('content')

    <div class="container">
        <nav class="d-flex mt-2 justify-content-between bg-dark-subtle align-items-center">
            <h2 class="fw-semibold mt-2 ms-3">Students</h2>
        </nav>
        <nav class="d-flex mt-4 align-items-center">
            <p class="mt-3"><input type="text" id="datepicker"> <i class="fa fa-calendar" aria-hidden="true"></i></p>

            <div class="dropdown ">
                <button class="btn border dropdown-toggle me-3 ms-4" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    5th
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">5th</a></li>
                    <li><a class="dropdown-item" href="#">6th</a></li>
                    <li><a class="dropdown-item" href="#">7th</a></li>
                </ul>
            </div>
            <button class="btn btn-primary">search</button>
        </nav>

        <div class="main">

        </div>

    </div>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>

@endsection
