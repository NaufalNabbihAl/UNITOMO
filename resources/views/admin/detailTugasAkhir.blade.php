@extends('layout.layoutDashboardAdmin')
@section('content')
    <div class="content">
        <h1 id="pengajuan">Kelola Pengajuan TA</h1>
    </div>
    <div class="card" style="margin-left: 15%; margin-right: 15%; margin-top: 4%;">
        <div class="card-header" style="background-color: #1A478A">
            <h1 class="text-white">Detail Tugas Akhir Mahasiswa</h1>
        </div>
        <div class="card-body" style="background-color: #1f8ee3b7;">
            <div>
                <div class="mb-3 row">
                    <div class="col-6">
                        <label for="Nama" class="form-label detail">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="Nama">
                        <label for="judul" class="form-label detail">Judul</label>
                        <input type="text" class="form-control" id="judul">
                        <label for="tema" class=" form-label detail">Tema</label>
                        <select class="form-select">
                            <option selected></option>
                            <option value="Penetrasi testing">Penetrasi testing</option>
                            <option value="Social engineering">Social engineering</option>
                            <option value="Ethical hacking">Ethical hacking</option>
                            <option value="Network defender">Network defender</option>
                            <option value="Holistic">Holistic</option>
                        </select>
                        <label for="dosen1" class="form-label detail">Dosen Pembimbing 1</label>
                        <select class="form-select" id="dosen" name="dosen1">
                            <option selected></option>
                            <option value="Achmad Muzaki, S.Kom.,M.Kom.">Achmad Muzaki, S.Kom.,M.Kom.</option>
                            <option value="Ardian Yusuf Wicaksono, S.Kom.,M.Kom.">Ardian Yusuf Wicaksono, S.Kom.,M.Kom.
                            </option>
                        </select>
                        <label for="dosen2" class="form-label detail">Dosen Pembimbing 2</label>
                        <select class="form-select" id="dosen" name="dosen2">
                            <option selected></option>
                            <option value="Achmad Muzaki, S.Kom.,M.Kom.">Achmad Muzaki, S.Kom.,M.Kom.</option>
                            <option value="Ardian Yusuf Wicaksono, S.Kom.,M.Kom.">Ardian Yusuf Wicaksono, S.Kom.,M.Kom.
                            </option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="judul" style=" font-size: 24px" class="form-label detail">File Tugas
                            Akhir</label>
                        <div class=" bg-light rounded d-flex justify-content-center align-middle h-50">
                            <label for="upload" class="align-self-center"><img
                                    src="{{ url('assets/image/Download.svg') }}" alt=""
                                    style="cursor: pointer"></label>
                            <input type="file" name="" id="upload" style=" display: none;visibility: none ;"
                                onchange=" getFile (this.value);">
                            <div id="display-file"></div>
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
        <script type="text/javascript">
            function getFile(filename) {
                var newfile = filename.replace(/^.*\\/, "");
                $('#display-file').html(filename);
            }
        </script>
    @endsection
