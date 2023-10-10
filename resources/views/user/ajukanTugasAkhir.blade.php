@extends('layout.layoutDashboard')
@section('content')
    <div class="content">
        <h1 id="pengajuan">Pengajuan Tugas Akhir</h1>
    </div>
    <div class="mc">
        <div class="card" style="margin-left: 15%; margin-right: 15%; margin-top: 4%">
            <div class="card-header" style="background-color: #1A478A">
                <h1 class="text-white">Form Tugas Akhir</h1>
            </div>
            <div class="card-body d-flex justify-content-center" style="background-color: #1f8ee3b7;">
                <form class="frms mt-2" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul" class="title-color">Judul Tugas Akhir</label>
                        <input type="text" class="form-control " id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="tema" class="title-color">Tema</label>
                        <select class="form-select">
                            <option selected></option>
                            <option value="Penetrasi testing">Penetrasi testing</option>
                            <option value="Social engineering">Social engineering</option>
                            <option value="Ethical hacking">Ethical hacking</option>
                            <option value="Network defender">Network defender</option>
                            <option value="Holistic">Holistic</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dosen1" class="title-color">Dosen Pembimbing 1</label>
                        <select class="form-select" id="dosen" name="dosen1">
                            <option selected></option>
                            <option value="Achmad Muzaki, S.Kom.,M.Kom.">Achmad Muzaki, S.Kom.,M.Kom.</option>
                            <option value="Ardian Yusuf Wicaksono, S.Kom.,M.Kom.">Ardian Yusuf Wicaksono, S.Kom.,M.Kom.
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dosen2" class="title-color">Dosen Pembimbing 2</label>
                        <select class="form-select dropdown dropdown-toggle" id="dosen" name="dosen2">
                            <option selected></option>
                            <option value="Achmad Muzaki, S.Kom.,M.Kom.">Achmad Muzaki, S.Kom.,M.Kom.</option>
                            <option value="Ardian Yusuf Wicaksono, S.Kom.,M.Kom.">Ardian Yusuf Wicaksono, S.Kom.,M.Kom.
                            </option>
                        </select>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-3 rounded-pill"
                            style="background-color: #1A478A;  width: 120px">Ajukan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
