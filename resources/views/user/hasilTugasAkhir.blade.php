@extends('layout.layoutDashboard')
@section('content')
    <div class="content">
        <h1 id="pengajuan">Submit Tugas Akhir 2</h1>
    </div>
    <div class="card" style="margin-left: 15%; margin-right: 15%; margin-top: 4%">
        <div class="card-header" style="background-color: #1A478A">
            <h1 class="text-white">Form Tugas Akhir</h1>
        </div>
        <div class="card-body d-flex justify-content-center" style="background-color: #1f8ee3b7;">
            <form class="frms " action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul" style="color: #1A478A; font-size: 24px">Judul Tugas Akhir</label>
                    <select class="form-select">
                        <option selected></option>
                        <option value="Penetrasi testing">Penetrasi testing</option>
                        <option value="Social engineering">Social engineering</option>
                        <option value="Ethical hacking">Ethical hacking</option>
                        <option value="Network defender">Network defender</option>
                        <option value="Holistic">Holistic</option>
                    </select>
                </div>

                <label for="judul" style="color: #1A478A; font-size: 24px" class="mt-3">File Tugas Akhir</label>
                <div class=" bg-light rounded d-flex justify-content-center align-middle h-50">
                    <label for="upload" class="align-self-center"><img src="{{ url('assets/image/mediaIcon.svg') }}"
                            alt="" style="cursor: pointer"></label>
                    <input type="file" name="" id="upload" style=" display: none;visibility: none ;"
                        onchange=" getFile (this.value);">
                    <div id="display-file">
                    </div>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mt-3 rounded-pill"
                        style="background-color: #1A478A; margin-right: 2%; width: 80px">Submit</button>
                    <button type="submit" class="btn btn-primary mt-3 rounded-pill"
                        style="background-color: #E31F1F;width: 80px">Batal</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="mc">
        <div class="row justify-content-center me-5 ms-5 " style="background-color: blue; border-radius: 16px;">

        </div>
    </div> --}}
    <script type="text/javascript">
        function getFile(filename) {
            var newfile = filename.replace(/^.*\\/, "")
            $('#display-file').html(filename)
        }
    </script>
@endsection
