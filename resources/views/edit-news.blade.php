@extends('layout')
@section('title', 'Add news')
@section('breadcrumbs')
    <li class = "breadcrumb-item"><a href = "/manager">Manage news</a></li>
    <li class = "breadcrumb-item active" aria-current="page">Edit "{{ $news->name }}"</li>
@endsection
@section('content')
    <div class = "container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method = "POST" action = "/news/{{ $news->id }}/update">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name = "title" id="title" placeholder="Enter title" value = "{{ $news->name }}">
                    <small class="form-text text-muted">*Required</small>
                </div>
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <select id="category" name = "category" class="form-control">
                        @foreach($categories as $category)
                            <option {{ ($category->id == $news->category_id ? 'selected' : '') }} value = "{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class = "form-row">
                <div class="form-group col-md-6">
                    <label for="excerpt">Excerpt</label>
                    <textarea id = "excerpt" name = "excerpt" class = "form-control" rows = "3">{{ $news->excerpt }}</textarea>
                    <small class="form-text text-muted">*Required, 500 symbols max</small>
                </div>
                <div class="form-group col-md-6">
                    <label for="content">Full text</label>
                    <textarea id = "content" name = "content" class = "form-control" rows = "3">{{ $news->content }}</textarea>
                    <small class="form-text text-muted">*Required</small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection