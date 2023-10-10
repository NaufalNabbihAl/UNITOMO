@extends('layout.layoutDashboard')
@section('content')
    <div class="content">
        <h1 id="pengajuan">Pendataan Kerja Praktik</h1>
    </div>
    <div class="mc">
        <div class="card" style="margin-left: 15%; margin-right: 15%; margin-top: 4%; height: 645px">
            <div class="card-header" style="background-color: #1A478A;">
                <h1 class="text-white">Form Pendataan Kerja Praktik</h1>
            </div>
            <div class="card-body d-flex justify-content-center" style="background-color: #1f8ee3b7;">
                <form class="frms mt-2" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="title-color">Nama Perusahaan</label>
                        <select class="form-select" id="nama" name="nama">
                            <option selected></option>
                            <option value="Beon Intermedia">Beon Intermedia</option>
                            <option value="Biznet">Biznet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bukti" class="title-color">Bukti Penerimaan</label>
                        <input type="file" class="form-control " id="bukti" name="bukti">
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
