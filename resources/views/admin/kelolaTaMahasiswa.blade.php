@extends('layout.layoutDashboardAdmin')
@section('content')
    <div class="row" style="text-align: center;">
        <div class="d-flex justify-content-evenly" style="margin-top: 20%">
            <a href="{{ route('listTa1Mahasiswa') }}" class="item">
                <img src="{{ url('assets/image/documentIcon.png') }}" alt="">
                <h3 class="desc" style="color: white"> Tugas Akhir 1</h3>
            </a>
            <a href="{{ route('listTa2Mahasiswa') }} " class="item" style="margin-left: -100px">
                <img src="{{ url('assets/image/documentIcon.png') }}" alt="">
                <h3 class="desc" style="color: white">
                    Tugas Akhir 2</h3>
            </a>
        </div>
    </div>
@endsection
