@extends('layout')
@section('title', 'Manage categories')
@section('action')
    <div class = "col-sm-6 col-3 pull-right justify-content-end">
        <a href = "/manager/categories/new" class = "float-right btn btn-primary">Add category</a>
    </div>
@endsection
@section('breadcrumbs')
    <li class="breadcrumb-item active" aria-current="page">Manage categories</li>
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
                            <td><a href = "/category/{{ $category->id }}/edit" class = "btn btn-info">Edit</a></td>
                            <td><a href = "/category/{{ $category->id }}/delete" class = "btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class = "paginate">
            {{ $categories->links() }}
        </div>
    </div>
@endsection