@include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pemohon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/navi.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
</head>
<body>
<main class="main">
    <div class="container"> 
        <div class="navigation-bar">
            <a class="tab {{ request()->is('newPemohon.view') ? 'active' : '' }}">Pemohon</a>
            <a class="tab {{ request()->is('newPasangan.view') ? 'active' : '' }}">Pasangan</a>
            <a class="tab {{ request()->is('pendapatan.view') ? 'active' : '' }}">Pendapatan</a>
            <a class="tab {{ request()->is('perbelanjaan.view') ? 'active' : '' }}">Perbelanjaan</a>
            <a class="tab {{ request()->is('newWaris.view') ? 'active' : '' }}">Tanggungan dan Waris</a>
            <a class="tab {{ request()->is('newHarta.view') ? 'active' : '' }}">Harta</a>
            <a class="tab {{ request()->is('hadTanggungan.view') ? 'active' : '' }}">Had Tanggungan</a>
            <a class="tab {{ request()->is('hadPenambahan.view') ? 'active' : '' }}">Had Penambahan</a>
            <a class="tab {{ request()->is('hadPenolakan.view') ? 'active' : '' }}">Had Penolakan</a>
            <a class="tab {{ request()->is('sejarahBantuan.view') ? 'active' : '' }}">Sejarah Bantuan</a>
        </div>
        