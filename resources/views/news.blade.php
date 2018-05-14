@extends('layout')
@section('title', 'News')
@section('breadcrumbs')
    <li class="breadcrumb-item active" aria-current="page">News</li>
@endsection
@section('content')
    <div class = "container">
        <div class="row">
            @foreach($news as $news_item)
                @include('partials.news')
            @endforeach
        </div>
    </div>
@endsection