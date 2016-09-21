@extends('layouts.master')

@section('content')
    <h1>New Article</h1>
    <a href="{{ action('AppController@getGenerateArticle') }}">Generate!</a>
@endsection