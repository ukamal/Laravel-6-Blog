@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <a href="{{ url('student') }}" class="btn btn-danger">Student Information</a>
                <hr>
            </div>
            <div class="col-md-12">
                <ol>
                    <li>student Id: {{ $student->id }} </li>
                    <li>student Name: {{ $student->name }}</li>
                    <li>student Email: {{ $student->email }}</li>
                    <li>student Phone: {{ $student->phone }}</li>
                </ol>
            </div>
        </div>
    </div>
    </div>
@endsection