@extends('layout')
@section('title', $category->name)
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href = "/">News</a></li>
    <li class = "breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
@endsection
@section('content')
    <div class = "container">
        <div class="row">
            @foreach($news as $news_item)
                @include('partials.news')
            @endforeach
        </div>
        <div class = "paginate">
            {{ $news->links() }}
        </div>
    </div>
@endsection