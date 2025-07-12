@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $product->name) }}">
        </div>
        <div class="mb-3">
            <label>Cost</label>
            <input type="number" step="0.01" name="cost" class="form-control" required value="{{ old('cost', $product->cost) }}">
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" required value="{{ old('price', $product->price) }}">
        </div>
        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                <option value="">Select</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ ($product->category_id==$category->id) ? 'selected':'' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Branch</label>
            <select name="branch_id" class="form-control" required>
                <option value="">Select</option>
                @foreach($branches as $branch)
                    <option value="{{ $branch->id }}" {{ ($product->branch_id==$branch->id) ? 'selected':'' }}>
                        {{ $branch->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection