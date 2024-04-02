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
        <a class="tab active">Pemohon</a>
        <a href="{{route('newPasangan.view')}}" class="tab">Pasangan</a>
        <a href="{{route('pendapatan.view')}}" class="tab">Pendapatan</a>
        <a href="{{route('perbelanjaan.view')}}" class="tab">Perbelanjaan</a>
        <a href="{{route('newWaris.view')}}" class="tab">Tanggungan dan Waris</a>
        <a href="{{route('newHarta.view')}}" class="tab">Harta</a>
        <a class="tab">Bantuan</a>
        <a href="{{route('hadTanggungan.view')}}" class="tab">Had Kifayah</a>
        <a class="tab">Lampiran Dokumen</a>
        <a class="tab">Rumusan Siasatan</a>
        <a class="tab">Sejarah Bantuan</a>
    </div>