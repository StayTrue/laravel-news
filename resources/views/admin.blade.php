@extends('layout')
@section('title', 'Admin Panel')
@section('action')
    <div class = "col-sm-6 col-3 pull-right justify-content-end">
        <a href = "/manager/new" class = "float-right btn btn-primary">Add news</a>
    </div>
@endsection
@section('breadcrumbs')
    <li class="breadcrumb-item active" aria-current="page">Admin Panel</li>
@endsection
@section('content')
    <div class = "container">
        @if(session('status'))
            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
        @endif
        <div class = "table-responsive">
            <table class = "table table-striped">
                <thead class = "thead-dark">
                    <tr>
                        <th scope = "col">#</th>
                        <th scope = "col">Title</th>
                        <th scope = "col">Category</th>
                        <th scope = "col">Excerpt</th>
                        <th scope = "col" colspan="2">Actions</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach($news as $news_item)
                        <tr>
                            <td>{{ $news_item->id }}</td>
                            <td>{{ $news_item->name }}</td>
                            <td>{{ $news_item->category_name() }}</td>
                            <td>{{ $news_item->excerpt}}</td>
                            <td><a href = "" class = "btn btn-info">Edit</a></td>
                            <td><a href = "" class = "btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
               </tbody>
            </table>
        </div>
    </div>
@endsection