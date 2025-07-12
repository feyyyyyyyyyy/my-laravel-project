@extends('layouts.app')

@section('content')
    <h1>Edit Branch</h1>
    <form action="{{ route('branches.update', $branch) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $branch->name) }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email', $branch->email) }}">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required value="{{ old('phone', $branch->phone) }}">
        </div>
        <div class="mb-3">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control">
            @if($branch->logo)
                <br>
                <img src="{{ asset('storage/' . $branch->logo) }}" width="70">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection