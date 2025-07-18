@include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pemohon</title>
    <link rel="stylesheet" href="{{ asset('css/navi2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
</head>
<body>
    <main class="main">
    <div class="container">
    <div class="navigation-bar">
        <a href="{{ route('pemohon.details', ['id' => $pemohon->id]) }}" class="tab {{ request()->routeIs('pemohon.details') ? 'active' : '' }}">Profil Peribadi</a>
    <a href="{{ route('kewangan.details', ['id' => $pemohon->id]) }}" class="tab {{ request()->routeIs('kewangan.details') ? 'active' : '' }}">Kewangan</a>
    <a href="{{ route('waris.details', ['id' => $pemohon->id]) }}" class="tab {{ request()->routeIs('waris.details') ? 'active' : '' }}">Tanggungan dan Waris</a>
    <a href="{{ route('harta.details', ['id' => $pemohon->id]) }}" class="tab {{ request()->routeIs('harta.details') ? 'active' : '' }}">Harta</a>
    <a href="{{ route('kifayah.details', ['id' => $pemohon->id]) }}" class="tab {{ request()->routeIs('kifayah.details') ? 'active' : '' }}">Had Kifayah</a>   
    <a href="{{ route('sejarah.details', ['id' => $pemohon->id]) }}" class="tab {{ request()->routeIs('sejarah.details') ? 'active' : '' }}">Sejarah Bantuan</a>
    </div>