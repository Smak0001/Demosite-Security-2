@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">{{ __('Oops! Internal server error') }}</div>

                    <div class="card-body">
                        <p>Oh no! Something went wrong on our end.</p>
                        <p>Don't panic, our team of highly caffeinated developers is on the case!</p>
                        <img src="{{ asset('images/500.gif') }}" alt="500 gif" class="img-fluid" style="max-width: 300px;">
                        <p>In the meantime, you can go back to the <a href="{{ route('login') }}">login page</a> or try again later.</p>
                        <p>If this problem persists, please contact: admin@smakwierde.nl</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
