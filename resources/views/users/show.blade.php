@extends('layouts')
@section('content')
<div class="container p-5">
    <div class="row p-5">
        <div class="col">
            <h1>User Details</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }} {{ $user->last_name }}</h5>
                    <p class="card-text"><strong>Last Name:</strong> {{ $user->last_name }}</p>
                    <p class="card-text"><strong>Age:</strong> {{ $user->age }}</p>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
