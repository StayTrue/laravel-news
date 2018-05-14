@extends('layout')
@section('title', 'Edit category')
@section('breadcrumbs')
    <li class = "breadcrumb-item"><a href = "/manager">Manage categories</a></li>
    <li class = "breadcrumb-item active" aria-current="page">Edit {{ $category->name }}</li>
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
        <form method = "POST" action = "/category/{{ $category->id }}/update">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name = "name" id="name" placeholder="Enter name" value = "{{ $category->name }}">
                    <small class="form-text text-muted">*Required</small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection