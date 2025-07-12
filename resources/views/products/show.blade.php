@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $product->name }}</p>
            <p><strong>Cost:</strong> {{ $product->cost }}</p>
            <p><strong>Price:</strong> {{ $product->price }}</p>
            <p><strong>Category:</strong> {{ $product->category->name ?? '' }}</p>
            <p><strong>Branch:</strong> {{ $product->branch->name ?? '' }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection