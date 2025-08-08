<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ $provider }}/static/assets/img/favicon.png">
    <title>Akses Ditolak • myITS SSO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ $provider }}/static/assets/css/dashforge.css">
    <link rel="stylesheet" href="{{ $provider }}/static/assets/css/dashforge.customs.css">
    <link rel="stylesheet" href="{{ $provider }}/static/assets/css/dashforge.sizexxl.css">

    <link rel="stylesheet" href="{{ $provider }}/static/assets/css/skin.light.css">
    <link rel="stylesheet" href="{{ $provider }}/static/assets/css/skin.light.customs.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400;1,500&display=swap');
    </style>
</head>
<body class="mn-ht-100v d-flex flex-column">
    <div class="content pd-0" style="position: relative">
        <div class="content-body mg-t-10 mg-md-t-30 mg-lg-t-40">
            <div class="container pd-x-0" id="content">
                <div class="row row-sm">
                    <div class="col-12">
                        <div class="d-flex justify-content-center align-items-center mg-b-30">
                            <img src="{{ $provider }}/static/assets/img/myITS-SSO.svg" class="ht-30">
                            <p class="tx-poppins tx-medium tx-20 mg-b-0 mg-l-10">myITS SSO</p>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mg-b-50">
                            <img src="{{ $provider }}/static/assets/img/error/Error-403.png" class="wd-100p wd-md-70p wd-lg-50p">
                        </div>
                        <p class="tx-poppins tx-medium tx-32 tx-md-36 tx-xl-40 mg-b-5 text-center">403 - Akses Ditolak</p>
                        <p class="mg-b-15 tx-16 tx-md-18 text-center">Anda tidak memiliki hak akses untuk aplikasi ini.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ url('sso/force-logout') }}" class="btn btn-its-3 tx-poppins tx-medium">
                                Keluar dari aplikasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="d-none d-lg-block mg-t-auto">
        <div class="container ht-100">
            <div class="d-flex align-items-center row row-xs mg-t-10">
                <div class="col-lg-10">
                    <span class="tx-medium tx-color-03 tx-13">Copyright © {{ date('Y') }} Institut Teknologi Sepuluh Nopember</span>
                </div>
                <div class="col-lg-2 mg-lg-t-0 d-flex justify-content-end">
                    <img src="{{ $provider }}/static/assets/img/advhum-blue.png" height="60" class="mg-r-10">
                </div>
            </div>
        </div>
    </footer>
    <footer class="d-lg-none mg-t-auto">
        <div class="container ht-100">
            <div class="d-flex align-items-center row row-x mg-t-20">
                <div class="col-lg-10 d-flex justify-content-center">
                    <span class="tx-medium tx-color-03 tx-13">Copyright © {{ date('Y') }} Institut Teknologi Sepuluh Nopember</span>
                </div>
                <div class="col-lg-12 d-flex justify-content-center">
                    <img src="{{ $provider }}/static/assets/img/advhum-blue.png" height="60" class="mg-r-10">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>