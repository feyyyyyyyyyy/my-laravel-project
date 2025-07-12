@extends('layouts.app')

@section('content')
    <h1>Branches</h1>
    <a href="{{ route('branches.create') }}" class="btn btn-primary mb-2">Create Branch</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr><th>Name</th><th>Email</th><th>Phone</th><th>Logo</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($branches as $branch)
                <tr>
                    <td>{{ $branch->name }}</td>
                    <td>{{ $branch->email }}</td>
                    <td>{{ $branch->phone }}</td>
                    <td>
                        @if($branch->logo)
                            <img src="{{ asset('storage/' . $branch->logo) }}" width="50"/>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('branches.show', $branch) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('branches.edit', $branch) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('branches.destroy', $branch) }}" method="POST" style="display:inline">
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