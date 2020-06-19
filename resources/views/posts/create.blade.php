@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Create Post</h1>
    {!! Form::open(['action' => "PostsController@store", 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', '', ['class' => ($errors->has('title') ? 'form-control is-invalid' : 'form-control'), 'placeholder' => 'title'])}}
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body:')}}
            {{Form::textarea('body', '', ['id'=> 'editor', 'class' => ($errors->has('body') ? 'form-control is-invalid' : 'form-control'), 'placeholder' => 'write something as you want'])}}
            @error('body')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}  
@endsection