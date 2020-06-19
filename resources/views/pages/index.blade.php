@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center m-3">
        <h1 class="display-4">{{$title}}</h1>
        <p class="m-3">this is blog app. You can write your own blog. Happy blogging.</p>
        @if ($status)
            <a class="btn btn-secondary btn-lg" href="/posts/create">Create Blog</a>
        @else
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">login</a>
            <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">registration</a>
        @endif
    </div>
@endsection