@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-primary"> Go Back </a>
    <h1> {{$post->title}} </h1>

    <div>
        {!!$post->body!!}
    </div>

    <hr>

    <small> written on {{$post->created_at}} </small>

    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)

            <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit </a>

            {!! Form::open(['action' => ['PostsCoontroller@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!} 
        @endif  

    @endif

@endsection