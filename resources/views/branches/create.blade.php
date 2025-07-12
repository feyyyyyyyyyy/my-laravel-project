@extends('layouts.app')

@section('content')
    <h1>Create Branch</h1>
    <form action="{{ route('branches.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required value="{{ old('phone') }}">
        </div>
        <div class="mb-3">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection