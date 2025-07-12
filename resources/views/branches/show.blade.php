@extends('layouts.app')

@section('content')
    <h1>Branch Details</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $branch->name }}</p>
            <p><strong>Email:</strong> {{ $branch->email }}</p>
            <p><strong>Phone:</strong> {{ $branch->phone }}</p>
            <p>
                <strong>Logo:</strong><br>
                @if($branch->logo)
                    <img src="{{ asset('storage/' . $branch->logo) }}" width="100">
                @endif
            </p>
            <a href="{{ route('branches.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('branches.edit', $branch) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection