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
        <a class="tab ">Pemohon</a>
        <a href="{{route('newPasangan.view')}}" class="tab ">Pasangan</a>
        <a href="{{route('pendapatan.view')}}" class="tab ">Pendapatan</a>
        <a href="{{route('perbelanjaan.view')}}" class="tab ">Perbelanjaan</a>
        <a href="{{route('newWaris.view')}}" class="tab ">Tanggungan dan Waris</a>
        <a class="tab ">Harta</a>
        <a href="{{route('hadTanggungan.view')}}" class="tab">Had Tanggungan</a>
        <a href="{{route('hadPenambahan.view')}}" class="tab">Had Penambahan</a>
        <a href="{{route('hadPenolakan.view')}}" class="tab">Had Penolakan</a>
        <a href="{{route('sejarahBantuan.view')}}" class="tab">Sejarah Bantuan</a>
    </div>