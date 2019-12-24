@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($post as $home)
            <div class="post-preview">
                <a href="post.html">
                    <img src="{{ URL::to($home->image) }}" alt="">
                    <h2 class="post-title">
                        {{ $home->title }}
                    </h2>
                </a>
                <p class="post-meta">Category
                    <a href="{{ $home->name }}">Start Bootstrap</a>
                    on slug{{ $home->slug }}</p>
            </div>
            <hr>
            @endforeach

            <!-- Pager -->
            <div class="clearfix">
                {{ $post->links() }}
            </div>
        </div>
    </div>
@endsection