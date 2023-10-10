@extends('layout.layout')
@section('content')
  <div class="col-12 text-end" style="margin-left: 1%">
    <img src="{{ url('assets/image/backgroundLogin.png') }}" alt="" class="background-index">
  </div>
  <div class="row" style="margin-top: 10%">
    <div class="col-6 background-item">
      <h1 id="welcome">Login</h1>
      <form id="form" method="POST" action="{{ route('authenticate') }}">
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control input " id="input" placeholder="NIM" name="NIM">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control input " id="input" placeholder="Password" name="password">
        </div>
        <div class="mb-3 form-check">
          <div class="row justify-content-between">
            <div class="col">
              <input type="checkbox" class="form-check-input" name="active">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
          </div>
          <div class="col text-end">
            <button type="submit" class="btn btn-primary rounded-pill" id="submit">LOGIN</button>
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
