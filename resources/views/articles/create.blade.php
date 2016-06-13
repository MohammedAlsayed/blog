@extends("default")

@section("content")

<h1>write a new article</h1>
<hr/>

{!! Form::open(['url' => 'articles']) !!} <!-- the url sets the action after submitting the form (go to articles)-->
        @include('articles.form',['submitBtnArticle'=>'Add Article'])
{!! Form::close() !!}
    @include('errors.list')
@stop