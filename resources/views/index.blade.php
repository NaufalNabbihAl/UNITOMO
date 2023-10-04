@extends('layout.layout')
@section('content')
    <div class="col-12 text-end" style="margin-left: 1%">
        <img src="{{ url('assets/image/backgroundLogin.png') }}" alt="" class="background-index">
    </div>
    <div class="row" style="margin-top: 10%">
        <div class="col-12 background-item">
            <h1 id="welcome" class="text-right">Welcome Back.</h1>
            <div id="login">
                <a class="btn fw-bold mb-3" id="loginMahasiswa" href="{{ route('login') }}">Login Mahasiswa</a>
                <br>
                <a class="btn fw-bold" id="loginAdmin" href="{{ route('login') }}">Login Admin</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document.body).addClass('disable-scrolling')
        })
    </script>
@endsection
