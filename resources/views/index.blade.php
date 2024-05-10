@include('header')
<body>

       <main class="main">
         
     
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
       </main>
     
       <footer class="footer">
         <div class="footer__copyright">&copy; 2024 Data Penduduk Kota Tinggi</div>
         <div class="footer__signature"></div>
       </footer>
     </div>
</body>
