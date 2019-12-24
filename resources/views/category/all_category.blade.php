@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <a href="{{ route('add-category') }}" class="btn btn-danger">Add Category</a>
                <a href="{{ route('all-category') }}" class="btn btn-info">All Category</a>
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
                      <th>category Name</th>
                      <th>category Slug</th>
                      <th>Created At</th>
                      <th>Action</th>
                  </tr>
                  @foreach($category as $kamal)
                  <tr>
                      <td>{{ $kamal->id }}</td>
                      <td>{{ $kamal->name }}</td>
                      <td>{{ $kamal->slug }}</td>
                      <td>{{ $kamal->created_at }}</td>
                      <td>
                         <div class="btn btn-group">
                             <a href="{{ url('edit/category/'.$kamal->id) }}" class="btn btn-primary btn-sm">Edit</a>
                             <a href="{{ url('view/category/'.$kamal->id) }}" class="btn btn-success btn-sm">View</a>
                             <a href="{{ url('delete/category/'.$kamal->id) }}" class="btn btn-warning btn-sm" id="delete">Delete</a>
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