@extends('default')

@section('content')
    <h1>Articles</h1>
    <hr/>
@foreach($articles as $article)

    <h3><a href="{{action('articleController@show', [$article->id])}}">{{$article->title}}</a></h3>
    <!-- can do the action as url(/articles, $article->id)-->
    <p>{{$article->body}}</p>

@endforeach
@stop
