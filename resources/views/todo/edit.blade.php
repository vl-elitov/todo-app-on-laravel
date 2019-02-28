@extends('layouts.app')

@section('content')
    <h1>Edit task</h1>
    <hr>
    <a class="btn btn-primary" href="/">Back</a>

    {!! Form::open(['action' => ['TodoController@update', $task->id], 'method' => 'PUT', 'class' => 'border border-primary mt-3 p-3']) !!}
    {{ Form::bsText('text', $task->text) }}
    {{ Form::bsTextArea('body', $task->body) }}
    {{ Form::bsText('due', $task->due) }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection