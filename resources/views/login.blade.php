@extends('layout.layout')
@section('content')
    <div class="col-12 text-end" style="margin-left: 1%">
        <img src="{{ url('assets/image/backgroundLogin.png') }}" alt="" class="background-index">
    </div>
    <div class="row" style="margin-top: 10%">
        <div class="col-6 background-item">
            <h1 id="welcome">Login</h1>
            <form id="form">
                <div class="mb-3">
                    <input type="email" class="form-control input " id="input" aria-describedby="emailHelp"
                        placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control input " id="input" placeholder="Password">
                </div>
                <div class="mb-3 form-check">
                    <div class="row justify-content-between">
                        <div class="col">
                            <input type="radio" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="col text-end">
                            <a href="#" class="text-decoration-none text-end">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('dashboard') }}" type="submit" class="btn btn-primary rounded-pill"
                            id="submit">LOGIN</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document.body).addClass('disable-scrolling')
        })
    </script>
@endsection
