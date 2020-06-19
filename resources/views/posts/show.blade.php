@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light mt-3">Show All Post</a>
    <div class="card card-body bg-light mt-3">
        <img class="img-fluid w-50 mx-auto d-block" src="/blog_cover/{{ $post->cover_image }}" alt="{{$post->cover_image}}">
        <h1>{{$post->title}}</h1>
        <p>{!! $post->body !!}</p>
    </div>
    <small>{{$post->created_at}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
            <div class="d-inline">
                {!! Form::open(['action' => ["PostsController@destroy", $post->id], 'method' => 'POST', 'class' => 'd-inline']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!} 
            </div>
        @endif
    @endif
@endsection