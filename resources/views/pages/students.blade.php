@extends('layout.layout')

@section('title', 'Student')

@section('content')

    @include('manage.create')

    <div class="container">
        <nav class="d-flex mt-2 justify-content-between bg-dark-subtle align-items-center">
            <h2 class="fw-semibold mt-2 ms-3">Students</h2>
            <div class="me-3">
                {{-- <button type="button" class="btn btn-primary" data-toggle="model" data-target="#ModelCreate">
                    Add Student</button> --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-add"></i>
                    Add Student
                </button>

            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="card mt-5 mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Students
            </div>

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Grade</th>
                            <th>Address</th>
                            <th>Contect</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($student as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->grade }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->contact }}</td>
                                <td>
                                    {{-- <a href="{{ 'edit/' . $student['id'] }}" class="btn1" data-bs-toggle="modal">
                                        <i style="font-size: 20px;" class="fas fa-edit"></i></a>
                                    <a href=""> <i style="font-size: 20px;color: red" class="bi bi-trash"></i></a> --}}
                                    <a href="{{ 'edit/' . $student['id'] }}">edit</a>
                                    <a href="{{ 'edit/' . $student['id'] }}">delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


        @include('layout.script')
        @include('manage.create')

    </div>
@endsection
