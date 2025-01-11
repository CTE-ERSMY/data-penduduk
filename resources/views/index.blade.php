@extends('header')

@section('content')
         <div class="main-overview">
           <div class="overviewcard">
             <div class="overviewcard__icon">Jumlah Admin  -  <i class="fas fa-user-tie" style="font-size: 25px"></i></div>
             <div class="overviewcard__info">{{ $totalUser}}</div>
           </div>
           <div class="overviewcard">
             <div class="overviewcard__icon">Jumlah Pemohon  -  <i class="fas fa-users" style="font-size: 25px"></i>&nbsp; </div>
             <div class="overviewcard__info">{{ $totalPemohon}}</div>
           </div>
           <div class="overviewcard">
             <div class="overviewcard__icon">Purata Pendapatan  -  <i class="fas fa-money-bill" style="font-size: 25px"></i>&nbsp; </div>
             <div class="overviewcard__info">RM {{ number_format($avgGaji, 2) }} </div>
           </div>
         </div>
     
         <div class="main-cards">

         </div>
    
@endsection

