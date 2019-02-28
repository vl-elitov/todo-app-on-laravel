@extends('layouts.app')

@section('content')
    <h1>Create task</h1>
    <hr>
    <a class="btn btn-primary" href="/">Back</a>

    {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST', 'class' => 'border border-primary mt-3 p-3']) !!}
    {{ Form::bsText('text') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection