<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP_TA UNITOMO</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/image/unitomo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monomaniac+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/stylee.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <div class="x">
        <div class="sidebar">
            <div class="header">
                <div class="unitomo">
                    <img src="{{ url('assets/image/unitomo.png') }}" alt="">
                </div>
                <hr>
                <div class="list-item">
                    <a href="#" style="text-align: center;">
                        <img src="{{ url('assets/image/Profile.svg') }}" alt="" class="icon">
                        <span class="description-header">Naufal Nabbih</span>
                    </a>
                </div>
                <hr>
            </div>
            <span class="description"></span>
            <div class="main">
                {{-- <div class="list-item">
                    <img src="{{ url('assets/image/Home-Icon.svg') }}" alt="" class="icon">
                    <a class="btn dropdown-toggle description" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: -8px;">
                        Home Page
                    </a>
                </div> --}}

                <div class="list-item">
                    <a href="#" id="home">
                        <img src=" {{ url('assets/image/Home-Icon.svg') }}" alt="" class="icon">
                        <span class="description">Home Page</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                            class="bi bi-caret-down-fill description" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </a>
                </div>
                <div class="list-group list-group-mine mt-2 " id="homeItem" style="border: none">
                    <a href="{{ route('kelolaPengajuanTA') }}" class="list-group-item  " aria-current="true">
                        Kelola Pengajuan TA
                    </a>
                    <a href="{{ route('kelolaTaMahasiswa') }}" class="list-group-item ">Kelola TA Mahasiswa</a>
                    <a href="{{ route('kelolaPengajuanKP') }}" class="list-group-item ">Kelola Pengajuan KP</a>
                    <a href="{{ route('listDataKpMahasiswa') }}" class="list-group-item ">List Data KP Mahasiswa</a>
                </div>
                <div class="list-item">
                    <a href="{{ route('notification') }}">
                        <img src=" {{ url('assets/image/Notif-Icon.svg') }}" alt="" class="icon">
                        <span class="description">Notification</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <img src="{{ url('assets/image/Logout-Icon.svg') }}" alt="" class="icon">
                        <span class="description">Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content overflow-hidden">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>
            </div>
            @yield('content')
        </div>
        <script src="{{ url('assets/js/script.js') }}"></script>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function() {
                $("#homeItem").hide();
                $("#home").click(function() {
                    $("#homeItem").toggle();
                });
            });
        </script>
</body>

</html>
