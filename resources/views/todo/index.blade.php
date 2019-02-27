@extends('layouts.app')

@section('content')
    @if(count($tasks)>0)
        @foreach($tasks as $task)
            <div class="well">
                <h2>{{$task->text}}</h2>
                <span class="label label-danger">{{$task->due}}</span>
            </div>
        @endforeach
    @endif
@endsection