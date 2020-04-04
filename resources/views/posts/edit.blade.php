@extends('layouts.app')

@section('content')
    <h1>  Edit Posts </h1>

    {!! Form::open(['action' => ['PostsCoontroller@update', $post->id], 'method' => 'POST']) !!}

        <div class="form-froup">
            {{ Form::label('title','Title') }}
            {{ Form::text('title', $post->title,[ 'class'=>'form-control', 'placeholder' => 'Title' ]) }}
        </div>

        <div class="form-froup">
            {{ Form::label('body','Body') }}
            {{ Form::textarea('body', $post->body,[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder' => 'Write down your post here' ]) }}
        </div>

        {{ Form::submit('Submit', [ 'class'=>'btn btn-primary' ] ) }}

        {{ Form::hidden('_method', 'PUT') }}

    {!! Form::close() !!}    

@endsection