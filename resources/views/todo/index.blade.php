@extends('layouts.app')

@section('content')
    <h1>Todo list</h1>
    <hr>
    @if(count($tasks)>0)
        @foreach($tasks as $task)
            <div class="well">
                <a class="font-weight-bold" href="/todo/{{$task->id}}">{{$task->text}}</a>
                <p class="text-danger">
                    {{$task->due}}
                </p>
            </div>
        @endforeach
    @endif
@endsection