@extends('layout')
@section('title', $news->name)
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href = "/">News</a></li>
    <li class = "breadcrumb-item active" aria-current="page">{{ $news->name }}</li>
@endsection
@section('content')
    <div class = "container">
        <h4>{{ date('y.m.d', strtotime($news->created_at)) }} in {{ $news->category_name() }}</h4>
        <p>{{ $news->content }}</p>
    </div>
@endsection