<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="img/ikon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="<?= BASE_URL; ?>/img/ikon.png" width="40" height="40" alt="...">
            <a class="navbar-brand" href="<?= BASE_URL; ?>"> SMKN 2</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">   Home <span class="sr-only"></span></a> -->
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
                    <a class="nav-link dropdown-toggle" href="<?= BASE_URL; ?>" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kompetensi Keahlian
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/jurusan/rpl">REKAYASA PERANGKAT LUNAK</a></li>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/jurusan/tp">TEKNIK PENGELASAN</a></li>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/jurusan/kuliner">KULINER</a></li>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/jurusan/ak">AKUNTANSI</a></li>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/jurusan/tptup">TEKNIK PEMANASAN,TATA UDARA DAN PENDINGINAN</a></li>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/jurusan/tkp">TEKNIK KONTRUKSI DAN PEMBANGUNAN</a></li>
                        <li><a class="dropdown-item" href="<?= BASE_URL; ?>/jurusan/dpib">DESAIN PEMODELAN DAN INFORMASI BANGUNAN</a></li>
                    </ul>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user">About</a>
                </div>
            </div>
        </div>
    </nav>