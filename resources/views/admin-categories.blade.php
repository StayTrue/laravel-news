@extends('layout')
@section('title', 'Admin Categories')
@section('action')
    <div class = "col-sm-6 col-3 pull-right justify-content-end">
        <a href = "/manager/categories/new" class = "float-right btn btn-primary">Add category</a>
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
                        <th scope = "col">Name</th>
                        <th scope = "col" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection