@extends('layout')

@section('content')
    <div class="container box">
        <h1 style="text-align: center;">Create user account</h1>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif

        <form method="POST" action="{{ url('user/create') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Name: <span class="text-danger">*</span></label>
                <div class="position-relative">
                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid shake-animation' : '' }}" placeholder="Example: John Doe" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        <i class="error-icon fas fa-times-circle"></i>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label>Password: <span class="text-danger">*</span></label>
                <div class="position-relative">
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid shake-animation' : '' }}" placeholder="Example: StrongPassword!">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        <i class="error-icon fas fa-times-circle"></i>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label>Email: <span class="text-danger">*</span></label>
                <div class="position-relative">
                    <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid shake-animation' : '' }}" placeholder="Example: JohnDoe@gmail.com" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        <i class="error-icon fas fa-times-circle"></i>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
    </div>

    <style>
        .text-danger {
            color: red;
        }

        div.container {
            margin: 0 auto;
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
        }

        .box {
            border-width: 1px;
            text-indent: 5px;
            padding: .5em 1em;
            width: 100%;
        }

        .shake-animation {
            outline: 0;
            border-color: red;
            animation-name: bounce;
            animation-duration: 0.5s;
            animation-delay: 0.25s;
        }

        .error-icon {
            position: absolute;
            right: -20px;
            top: 50%;
            transform: translateY(-50%);
            color: red;
        }

        @keyframes bounce {
            0% {
                transform: translateX(0px);
                timing-function: ease-in;
            }
            37% {
                transform: translateX(5px);
                timing-function: ease-out;
            }
            55% {
                transform: translateX(-5px);
                timing-function: ease-in;
            }
            73% {
                transform: translateX(4px);
                timing-function: ease-out;
            }
            82% {
                transform: translateX(-4px);
                timing-function: ease-in;
            }
            91% {
                transform: translateX(2px);
                timing-function: ease-out;
            }
            96% {
                transform: translateX(-2px);
                timing-function: ease-in;
            }
            100% {
                transform: translateX(0px);
                timing-function: ease-in;
            }
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        console.clear();

        var inputField = document.querySelector("input[name='name']");

        inputField.addEventListener("keyup", function(event) {
            var input = inputField.value;
            if (event.keyCode == 13 && input === "") {
                inputField.classList.add("shake-animation");
                setTimeout(function() {
                    inputField.classList.remove("shake-animation");
                }, 3000);
            }
        });
    </script>
@endsection
