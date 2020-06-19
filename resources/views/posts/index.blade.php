@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body bg-light mt-3">
                <div class="row">
                    <div class="col-sm-4">
                    <img class="img-fluid w-100" src="/blog_cover/{{ $post->cover_image }}" alt="{{$post->cover_image}}">
                    </div>
                    <div class="col-sm-8">
                        <h3>
                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        </h3>
                        <small>{{ date_format($post->created_at,"l,d M Y H:ia")}}</small>
                        <small>By <b>{{$post->user->name}}</b></small>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mt-3">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found.</p>
    @endif
@endsection