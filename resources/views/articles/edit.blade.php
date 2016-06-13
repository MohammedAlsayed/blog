@extends('default')

@section('content')
<h3>Edit:{{$article->title}}</h3>

{!! Form::model($article, ['method'=>'PATCH', 'action' => ['articleController@update', $article->id]]) !!} <!-- the url sets the action after submitting the form (go to articles)-->
    @include('articles.form', ['submitBtnArticle'=>'Update Article'])
{!! Form::close() !!}





@stop
