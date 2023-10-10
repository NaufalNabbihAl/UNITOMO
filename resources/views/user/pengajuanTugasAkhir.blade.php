@extends('layout.layoutDashboard')
@section('content')
    <div class="row" style="text-align: center; margin: 10%">
        <div class="d-flex justify-content-evenly ">
            <a href="{{ route('ajukanTugasAkhir') }}" class="item">
                <img src="{{ url('assets/image/formIcon.svg') }}" alt="">
                <h3 class="desc" style="color: white"> Ajukan <br>Tugas Akhir</h3>
            </a>

            <a href="{{ route('proposalTugasAkhir') }} " class="item" style="margin-left: -100px">
                <img src="{{ url('assets/image/documentIcon.png') }}" alt="">
                <h3 class="desc" style="color: white"> Proposal <br>
                    Tugas Akhir</h3>
            </a>
        </div>
        <div class="d-flex d-flex justify-content-center mt-2">
            <a href="{{ route('hasilTugasAkhir') }}" class="item">
                <img src="{{ url('assets/image/documentIcon.png') }}" alt="">
                <h3 class="desc" style="color: white"> Hasil <br>
                    Tugas Akhir</h3>
            </a>
        </div>
    </div>
@endsection
