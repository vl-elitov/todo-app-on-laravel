@extends('layouts.app')

@section('content')
    <h1>{{$task->text}}</h1>
    <hr>
    <a class="btn btn-primary" href="/">Back</a>
    <a class="btn-success btn" href="/todo/{{$task->id}}/edit">Edit</a>
    <br>
    <div class="well">
        <p class="text-danger">
            When: {{$task->due}}
        </p>
        <p>
            {{$task->body}}
        </p>

    </div>
@endsection