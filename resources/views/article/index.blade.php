@extends('layouts.app');

@section('content')
    <a href="{{ route('article.edit') }}">update</a>
    <a href="{{ route('article.show') }}">show</a>
    <a href="{{ route('article.create') }}">create</a>

@endsection