@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>{{ $title }} </h1>
        <p> This is the home page of the application </p>
        <p> <a href="/login" class="btn btn-lg btn-primary " role="button"> Login </a> </p> <p> <a href="/register" class="btn btn-lg btn-primary " role="button"> Register </a> </p>
    </div>
@endsection