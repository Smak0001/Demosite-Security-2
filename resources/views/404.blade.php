@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Uh-oh! Page not found') }}</div>

                    <div class="card-body text-center">
                        <p>Oops! Looks like you've stumbled upon a missing page.</p>
                        <img src="{{ asset('images/404.gif') }}" alt="404 gif" width="300">
                        <p>Don't worry, it's not you, it's us. We promise to find that page soon!</p>
                        <p>In the meantime, you can check if the URL is correct or go back to the <a href="{{ route('login') }}">login page</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
