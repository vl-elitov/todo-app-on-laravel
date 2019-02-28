@extends('layouts.app')

@section('content')
    <h1>{{$task->text}}</h1>
    <hr>
    <a class="btn btn-primary" href="/">Back</a>
    <a class="btn-success btn mr-2" href="/todo/{{$task->id}}/edit">Edit</a>
    <br>
    <div class="well">
        <p class="text-danger">
            When: {{$task->due}}
        </p>
        <p>
            {{$task->body}}
        </p>
    </div>
    {!! Form::open(['action' => ['TodoController@destroy', $task->id], 'method' => 'DELETE', 'class' => '']) !!}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection