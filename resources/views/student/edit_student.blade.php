@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('student/'.$student->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Student ID</label>
                            <input type="text" class="form-control" value="{{ $student->id }}" id="id" name="id">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Student Name</label>
                            <input type="text" class="form-control" value="{{ $student->name }}" id="name" name="name">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Student Phone</label>
                            <input type="text" class="form-control" value="{{ $student->phone }}" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Student Email</label>
                            <input type="text" class="form-control" value="{{ $student->email }}" id="email" name="email">
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection