@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a class="btn btn-primary" href="/posts/create">Create Blog</a>
                </div>
                @if (count($posts) > 0)
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">title</th>
                            <th scope="col" class="text-center">action</th>
                        </tr>
                    </thead>
                    @foreach ($posts as $post)
                        <tbody class="text-center">
                            <tr>
                                <td><a href="">{{$post->title}}</a></td>
                                <td>
                                    <a href="/posts/{{$post->id}}" class="btn btn-success">Show</a>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                                    <div class="d-inline">
                                        {!! Form::open(['action' => ["PostsController@destroy", $post->id], 'method' => 'POST', 'class' => 'd-inline']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!} 
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                @else
                    <h3 class="card-body">there are no post created yet.</h3>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection