@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 mx-auto">
                <a href="{{ url('student/create') }}" class="btn btn-danger">Add Student</a>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table class="table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Student Name</th>
                        <th>Student Phone</th>
                        <th>Student Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach($student as $kamal)
                        <tr>
                            <td>{{ $kamal->id }}</td>
                            <td>{{ $kamal->name }}</td>
                            <td>{{ $kamal->Phone }}</td>
                            <td>{{ $kamal->email }}</td>
                            <td>
                                <div class="btn btn-group">
                                    <a href="{{ url('student/'.$kamal->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ url('student/'.$kamal->id) }}" class="btn btn-success btn-sm">View</a>
                                    <form action="{{ url('student/'.$kamal->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-warning btn-sm" type="submit">Delete</button>
                                    </form>
{{--                                    <a href="{{ url('delete/student/'.$kamal->id) }}" class="btn btn-warning btn-sm" id="delete">Delete</a>--}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection