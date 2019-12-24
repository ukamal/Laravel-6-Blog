@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About of {{ Auth::user()->name }}</div>
                <a href="{{ route('about') }}">About</a>
                <div class="card-body">
                   {{ Auth::user()->name }}
                   {{ Auth::user()->email }}
                   {{ Auth::user()->phone }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
