@extends("default")

@section("content")
    @foreach($tasks as $task)
        <task>
         <h3><a href="\arcticle\{{$id}}">username: {{$task->username}}</a></h3>
         <h3>task: {{$task->task}}</h3>
        </task>
    @endforeach

@stop