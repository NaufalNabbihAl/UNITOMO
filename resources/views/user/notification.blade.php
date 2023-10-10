@extends('layout.layoutDashboard')
@section('content')
    <div class="content">
        <h1 id="pengajuan">Notifikasi</h1>
    </div>

    <div class="card mb-3" style="max-width: 675px; height: 170px; margin-left: 3%; background-color: #135E98;">
        <div class="row g-0 d-flex align-items-center mt-4 ms-4">
            <div class="col-md-4 " style="">
                <img src="{{ url('assets/image/profileIconNotification.svg') }}" class="" alt="...">
            </div>
            <div class="col-md-8" style="margin-left: -8%">
                <div class="card-body">
                    <h3 class="card-title" style="color:  #E3BC26">System</h3>
                    <p class="card-text" style="color:  #E3BC26">Permintaan tugas akhirmu telah diterima</p>
                </div>
                <p class="card-text text-end" style="color:  #E3BC26"><small>Last updated 3 mins ago</small>
                </p>
            </div>
        </div>
    </div>
@endsection
