@extends('layout.layoutDashboardAdmin')
@section('content')
    <div class="content">
        <h1 id="pengajuan">Kelola Tugas Akhir</h1>
    </div>
    <div class="card" style="margin-left: 15%; margin-right: 15%; margin-top: 4%;">
        <div class="card-header" style="background-color: #1A478A">
            <h1 class="text-white">List Tugas Akhir 1</h1>
        </div>
        <div class="card-body" style="background-color: #1f8ee3b7;">
            <table class="table text-center">
                <thead class="">
                    <tr>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Program Studi</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Naufal Nabbih</td>
                        <td>14 Agustus 2023, 7.34 AM</td>
                        <td>Menunggu</td>
                        <td><a href="{{ route('detailTugasAkhir') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-file-earmark-text-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                                </svg></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
