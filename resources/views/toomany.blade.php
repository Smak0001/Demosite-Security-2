@extends('layout')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Too many try's</h1>

    <p>
        O no! You tried multiple time to login with the same email, but wrong password. No worry's you can try again later.
    </p>

@endsection
