@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $category->name }}</p>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection