@include('header')
<body>

       <main class="main">
         
     
         <div class="main-overview">
           <div class="overviewcard">
             <div class="overviewcard__icon">Jumlah Admin</div>
             <div class="overviewcard__info">{{ $totalUser}}</div>
           </div>
           <div class="overviewcard">
             <div class="overviewcard__icon">Jumlah Pemohon</div>
             <div class="overviewcard__info">{{ $totalPemohon}}</div>
           </div>
           <div class="overviewcard">
             <div class="overviewcard__icon">Overview</div>
             <div class="overviewcard__info">Card</div>
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
