<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/navi.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      * {
        font-family:'Arial';
        font-weight: 300;
        line-height: 1.5em;
        letter-spacing: 0.8px;
      }
    </style>
    <title>Data Penduduk Kota Tinggi</title>
</head>
<div class="grid-container">
  <div class="menu-icon">
   <i class="fas fa-bars header__menu"></i>
 </div>
 <header class="header">
  <div class="header__search">DATA PENDUDUK KOTA TINGGI</div>
  <div class="header__avatar"></div>
</header>

   <aside class="sidenav">
     <div class="sidenav__close-icon">
       <i class="fas fa-times sidenav__brand-close"></i>

     </div>
     <ul class="sidenav__list" >

       <a style="text-decoration: none; font-weight:500" href="{{route('index')}}"><li class="sidenav__list-item"><i class="fas fa-home"></i>&nbsp; LAMAN UTAMA</li></a>
       <a style="text-decoration: none; font-weight:500" href="{{route('pemohon.baru')}}"><li class="sidenav__list-item"><i class="fas fa-user-plus"></i>&nbsp; PEMOHON BARU</li></a>
       <a style="text-decoration: none; font-weight:500" href="{{route('pemohon.display')}}"><li class="sidenav__list-item"><i class="fas fa-clipboard-list"></i>&nbsp; SEMUA PEMOHON</li></a>
       <a style="text-decoration: none; font-weight:500" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><li class="sidenav__list-item"><i class="fas fa-power-off"></i>&nbsp; LOG KELUAR</li></a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
          @csrf
      </form>
       <li class="sidenav__list-item"></li>
     </ul>
   </aside>
   <script src="{{asset('js/main.js')}}"></script>
</html>