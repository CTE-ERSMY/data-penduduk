@include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pemohon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/navi2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
</head>
<body>
    <main class="main">
    <div class="container">
    <div class="navigation-bar">
        <a href="{{route('pemohon.details', ['id' => $pemohon->id])}}" class="tab">Profil Peribadi</a>
        <a href="{{route('kewangan.details', ['id' => $pemohon->id])}}" class="tab">Kewangan</a>
        <a href="{{route('waris.details', ['id' => $pemohon->id])}}" class="tab active">Tanggungan dan Waris</a>
        <a href="{{route('harta.details', ['id' => $pemohon->id])}}" class="tab">Harta</a>
        <a href="{{route('harta.details', ['id' => $pemohon->id])}}" class="tab">Bantuan</a>
        <a href="{{route('kifayah.details', ['id' => $pemohon->id])}} "class="tab">Had Kifayah</a>
        <a href="# "class="tab">Lampiran Dokumen</a>    
        <a href="# "class="tab">Rumusan Siasatan</a>
        <a href="# "class="tab">Sejarah Bantuan</a>
    </div>