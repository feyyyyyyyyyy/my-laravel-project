@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-2">Create Product</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Category</th>
                <th>Branch</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->cost }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name ?? '' }}</td>
                    <td>{{ $product->branch->name ?? '' }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection