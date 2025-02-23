@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
                Logout
            </button>
        </form>
        <h1>User Dashboard</h1>
        <p>Welcome User!</p>
    </div>
@endsection
