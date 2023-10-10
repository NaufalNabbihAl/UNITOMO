@extends('layout.layoutDashboardAdmin')
@section('content')
    <div class="content">
        <h1 id="pengajuan">Kelola Data Pengajuan KP</h1>
    </div>
    <div class="card" style="margin-left: 15%; margin-right: 15%; margin-top: 4%;">
        <div class="card-header" style="background-color: #1A478A">
            <h1 class="text-white">Detail Pengajuan</h1>
        </div>
        <div class="card-body" style="background-color: #1f8ee3b7;">
            <div>
                <div class="mb-3 row">
                    <div class="col-6 ">
                        <label for="Nama" class="form-label detail">Nama Peserta</label>
                        <input type="email" class="form-control" id="Nama">
                        <input type="email" class="form-control mt-1" id="Nama">
                        <input type="email" class="form-control mt-1" id="Nama">

                        <label for="NamaP" class="form-label detail">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="NamaP">

                        <label for="AlamatP" class="form-label detail">Alamat Perusahaan</label>
                        <input type="text" class="form-control" id="AlamatP">
                    </div>
                    <div class="col-6"><label for="dosen" class="form-label detail">Dosen Pembimbing</label>
                        <select class="form-select" id="dosen" name="dosen">
                            <option selected></option>
                            <option value="Achmad Muzaki, S.Kom.,M.Kom.">Achmad Muzaki, S.Kom.,M.Kom.</option>
                            <option value="Ardian Yusuf Wicaksono, S.Kom.,M.Kom.">Ardian Yusuf Wicaksono, S.Kom.,M.Kom.
                            </option>
                        </select>
                        <label class="form-label detail">Tanggal Pelaksanaan</label>
                        <div class="d-flex justify-content-around">
                            <input type="date" class="form-control me-2">
                            <h4 class="" style="color: white; "> - </h4>
                            <input type="date" class="form-control ms-2">
                        </div>
                        <label for="AlamatP" class="form-label detail">Tanggal Pengajuan</label>
                        <input type="date" class="form-control" id="AlamatP">
                    </div>
                </div>

                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mt-3 rounded-pill border-0"
                        style="background-color: #1A478A; margin-right: 2%; width: 100px">Terima</button>
                    <button type="submit" class="btn btn-primary mt-3 rounded-pill border-0"
                        style="background-color: #E31F1F;width: 100px">Tolak</button>
                </div>
            </div>
        </div>
    </div>
@endsection
