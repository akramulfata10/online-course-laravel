<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Website Belajar Online</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary shadow-sm p-3 mb-5 bg-body rounded-3 sticky-lg-top">
        <div class="container">
            <a class="navbar-brand" href="#">Online Course</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ps-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Course</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto ps-5 mb-2 mb-lg-0 me-4">
                    <button type="submit" class="btn btn-primary mt-2 me-2">Masuk</button>
                    <button type="submit" class="btn btn-primary mt-2 me-2">Daftar</button>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid jumbotron h-100">
        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <div class="px-2 m-5 p-5 mt-5">
                    <h2 class="fs-2 text-start text-dark font-normal" style="margin-top: 100px;">
                        Fullstack Web &
                        Mobile Developer
                    </h2>
                    <p class="fs-6 text-start mt-2">
                        <strong>Apa arti Fullstack</strong> - <q>Belajar menjadi Fullstack Web & Mobile Developer dalam
                            13 Minggu dengan mentor profesional, kurikulum ter-update, kesempatan kerja di 270+
                            perusahaan.</q>.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="px-5 m-5 p-5 mt-2">
                    <img src="{{ asset('gambar/foto1.png') }}" alt="fullstack web" class="w-100 img-fluid shadow">
                </div>
            </div>
        </div>
    </div>





    <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3">
        <a class="navbar-brand" href="#">Navbar</a>
        <nav class="nav nav-pills flex-column">
            <a class="nav-link" href="#item-1">Item 1</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
            </nav>
            <a class="nav-link" href="#item-2">Item 2</a>
            <a class="nav-link" href="#item-3">Item 3</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
            </nav>
        </nav>
    </nav>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
        <h4 id="item-1">Item 1</h4>
        <p>...</p>
        <h5 id="item-1-1">Item 1-1</h5>
        <p>...</p>
        <h5 id="item-1-2">Item 1-2</h5>
        <p>...</p>
        <h4 id="item-2">Item 2</h4>
        <p>...</p>
        <h4 id="item-3">Item 3</h4>
        <p>...</p>
        <h5 id="item-3-1">Item 3-1</h5>
        <p>...</p>
        <h5 id="item-3-2">Item 3-2</h5>
        <p>...</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
