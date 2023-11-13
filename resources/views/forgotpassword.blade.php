@extends('masterWithoutHeader')
@section('content')

<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

    * {
        font-family: 'Open Sans', sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .main-container {
        width: 100%;
        height: 100vh;
        background: url('../public/images/bg_img.jpeg');
        transition: 0.4s linear;
    }

    .box {
        width: 30%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .8);
        padding: 40px;
        box-sizing: border-box;
        box-shadow: 0px 15px 25px rgba(0, 0, 0, .5);
        border-radius: 10px;
    }

    .box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .box p {
        margin-bottom: 0;
    }

    .box p:nth-child(even) {
        margin-top: 0;
    }

    .box a {
        color: #9a9d9e;
        font-size: 14px;
        text-decoration: none;
    }

    .box .input-box {
        position: relative;
    }

    .box .input-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        margin-bottom: 30px;
        color: #fff;
        border: 1px solid #fff;
        border: none;
        border-bottom-style: solid;
        outline: none;
        letter-spacing: 1px;
        background: transparent;
    }

    .box .input-box label {
        position: absolute;
        color: #fff;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        pointer-events: none;
        transition: .5s;
    }

    .box .input-box input:focus~label,
    .box .input-box input:valid~label {
        top: -18px;
        left: 0;
        color: #03a9f4;
        font-size: 12px;
    }

    .box input[type=submit] {
        background: transparent;
        border: none;
        outline: none;
        background: #03a9f4;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    #logged-in {
        width: 100%;
        height: auto;
        text-align: center;
        margin: auto;
        position: absolute;
        top: 50px;
        display: none;
    }

    /* .login-true {
        opacity: 0;
    } */

    @media only screen and (max-width: 600px) {
        .box {
        width: 90%;
        }
}
</style>

<div id="main" class="main-container">
    <div class="row">
        <div class="col-md-6">
    <div class="box">
        <h2>Login</h2>
        <form action="{{ URL::to('forgot/password') }}" method="post">
            @csrf
            <div class="col-md-12 py-5 ">
                @if (session()->has('SentMail'))
                        <div class="alert alert-success w-75 mx-auto text-center">
                            {{ session()->get('SentMail') }}
                        </div>
                    @endif
                        @if (session()->has('email'))
                        <div class="alert alert-danger w-75 mx-auto text-center">
                            {{ session()->get('email') }}
                        </div>
                    @endif
                <div>
            <div class="input-box">
                <input id="user-name" type="text" name="email" class="@error('email') is-invalid @enderror"
                    value="{{ old('email') }}">
                <label>Email</label>
                @error('email')
                    <div class="alert alert-danger mt-1 p-2">{{ $message }}</div>
                @enderror
            </div>
          
            <input id="submit" type="submit" name="" value="Submit">
        </form>
        <p><a href="{{URL::to('login')}}" class="text-info">Login</a></p>
    </div>
</div>
</div>
</div>

@endsection