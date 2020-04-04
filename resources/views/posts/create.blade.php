@extends('layouts.app')

@section('content')
    <h1>  Create Posts </h1>

    {!! Form::open(['action' => 'PostsCoontroller@store', 'method' => 'POST']) !!}

        <div class="form-froup">
            {{ Form::label('title','Title') }}
            {{ Form::text('title', '',[ 'class'=>'form-control', 'placeholder' => 'Title' ]) }}
        </div>

        <div class="form-froup">
            {{ Form::label('body','Body') }}
            {{ Form::textarea('body', '',[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder' => 'Write down your post here' ]) }}
        </div>

        {{ Form::submit('Submit', [ 'class'=>'btn btn-primary' ] ) }}

    {!! Form::close() !!}    

@endsection