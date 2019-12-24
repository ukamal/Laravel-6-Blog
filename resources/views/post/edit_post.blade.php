@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <a href="{{ route('all.post') }}" class="btn btn-info">All Post</a>
                <hr>

                <form action="{{ url('update/post/'.$post->id) }}" method="post" enctype="multipart/form-data"> @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Title</label>
                            <input type="text" class="form-control" value="{{ $post->title }}" name="title" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Category</label>
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach($category as $kamal)
                                    <option value="{{ $kamal->id }}" <?php if ( $kamal->id == $post->category_id) echo  "selected"; ?> >
                                        {{ $kamal->name }}
                                    </option>
                                 @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Post Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{ URL::to($post->image) }}" alt="" style="height: 50px;width: 50px;float: right">
                            <input type="hidden" name="old_photo" value="{{ $post->image }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Details</label>
                            <textarea rows="5" class="form-control" name="details" required>
                                {{ $post->details }}
                            </textarea>
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