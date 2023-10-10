@extends('layout.layoutDashboard')
@section('content')
    <div class="content">
        <h1 id="pengajuan">Pengajuan Kerja Praktik</h1>
    </div>
    <div class="mc">
        <div class="card" style="margin-left: 15%; margin-right: 15%; margin-top: 4%; height: 645px">
            <div class="card-header" style="background-color: #1A478A;">
                <h1 class="text-white">Form Pengajuan Kerja Praktik</h1>
            </div>
            <div class="card-body d-flex justify-content-center" style="background-color: #1f8ee3b7;">
                <form class="frms mt-2" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="title-color">Nama Perusahaan</label>
                        <input type="text" class="form-control " id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="title-color">Alamat Perusahaan</label>
                        <input type="text" class="form-control " id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="namaPeserta" class="title-color">Nama Peserta</label>
                        <input type="text" class="form-control " id="namaPeserta" name="namaPeserta">
                        <input type="text" class="form-control mt-1" id="namaPeserta" name="namaPeserta">
                        <input type="text" class="form-control mt-1" id="namaPeserta" name="namaPeserta">
                    </div>
                    <div class="form-group">
                        <label for="dosen1" class="title-color">Dosen Pembimbing</label>
                        <select class="form-select" id="dosen" name="dosen1">
                            <option selected></option>
                            <option value="Achmad Muzaki, S.Kom.,M.Kom.">Achmad Muzaki, S.Kom.,M.Kom.</option>
                            <option value="Ardian Yusuf Wicaksono, S.Kom.,M.Kom.">Ardian Yusuf Wicaksono, S.Kom.,M.Kom.
                            </option>
                        </select>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6 "><label for="Nama" class="form-label detail title-color">Waktu Mulai</label>
                            <input type="datetime-local" class="form-control" id="Nama">
                        </div>
                        <div class="col-6">
                            <label for="Tanggal" class="form-label detail title-color">Waktu Selesai</label>
                            <input type="datetime-local" class="form-control" id="Tanggal">
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-3 rounded-pill "
                            style="background-color: #1A478A;  width: 120px; border: none">Ajukan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
