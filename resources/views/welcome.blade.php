@extends('layout')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Welcome to my script kiddie website!</h1>

<p>
    This is my website to show my authentication page, and secure routes and create new user accounts!
</p>

<p>
    To get started, you can explore the following links:
</p>

<ul>
    <li><a href="/login">Login page (You need to connect a database to it in order to run)</a></li>
    <li><a href="/registration">Registration page (You need to connect a database to it in order to run)</a></li>
    <li><a href="/products">Products page (Secured page) (You need to connect a database to it in order to run)</a></li>
</ul>
@endsection
<style>
    ul {
        list-style-type: none;
        padding-left: 0;
    }

    li {
        margin-bottom: 10px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
