@extends('layout')
@section('title', 'Add category')
@section('breadcrumbs')
    <li class = "breadcrumb-item"><a href = "/manager">Admin Panel</a></li>
    <li class = "breadcrumb-item active" aria-current="page">Add category</li>
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
        <form method = "POST" action = "/manager/category/create">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name = "name" id="name" placeholder="Enter name">
                    <small class="form-text text-muted">*Required</small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection