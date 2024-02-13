<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="{{asset('css/navi.css')}}">
    <title>Kewangan Pemohon</title>
</head>
<body>
    <div class="container">
    <div class="navigation-bar">
        <a href="{{route('index')}}" class="tab laman">Laman Utama</a>
        <a href="{{route('pemohon.details', ['id' => $pemohon->id])}}" class="tab">Profil Peribadi</a>
        <a href="{{route('kewangan.details', ['id' => $pemohon->id])}}" class="tab active">Kewangan</a>
        <a href="{{route('waris.details', ['id' => $pemohon->id])}}"class="tab">Tanggungan dan Waris</a>
        <a href="#"class="tab">Harta</a>
        <a href="#"class="tab">Bantuan</a>
        <a href="#"class="tab">Had Kifayah</a>
        <a href="#"class="tab">Lampiran Dokumen</a>
        <a href="#"class="tab">Rumusan Siasatan</a>
        <a href="#"class="tab">Sejarah Bantuan</a>
    </div>
    
    <table>
        <h5>PENDAPATAN PEMOHON</h5>
        <tbody>
            <tr>
                <th>Jawatan</th>
                <th>:</th>
                <td>RM {{ $pendapatan->jawatan }} </td>
            </tr><tr>
                <th>Gaji</th>
                <th>:</th>
                <td>RM {{ $pendapatan->gaji}}</td>
            </tr><tr>
                <th>Majikan</th>
                <th>:</th>
                <td>RM {{ $pendapatan->majikan }}</td>
            </tbody>
    </table>
    <br><br>
    <table>
        <h5>PENDAPATAN PASANGAN</h5>
        <tbody>
            <tr>
                <th>Jawatan</th>
                <th>:</th>
                <td>RM {{ $pendapatan->jawatan_psgn}}</td>
            </tr><tr>
                <th>Gaji</th>
                <th>:</th>
                <td>RM {{ $pendapatan->gaji_psgn}}</td>
            </tr><tr>
                <th>Majikan</th>
                <th>:</th>
                <td>RM {{ $pendapatan->majikan_psgn}}</td>
            </tbody>
        </tbody>
    </table>
    <br><br>
    <table>
        <h5>PENDAPATAN DAN LAIN-LAIN SUMBANGAN</h5>
        <tbody>
            <tr>
                <th>Pendapatan Pemohon</th>
                <th>:</th>
                <td>RM {{ $pendapatan->gaji}}</td>
            </tr><tr>
                <th>Pendapatan Pasangan</th>
                <th>:</th>
                <td>RM {{ $pendapatan->gaji_psgn}}</td>
            </tr><tr>
                <th>Sumbangan Anak</th>
                <th>:</th>
                <td>RM {{ $pendapatan->sumbangan_anak}}</td>
            </tr><tr>
                <th>Sumbangan Saudara Mara</th>
                <th>:</th>
                <td>RM {{ $pendapatan->sumbangan_saudara}}</td>
            </tr><tr>
                <th>Pendapatan Sampingan</th>
                <th>:</th>
                <td>RM {{ $pendapatan->sampingan}}</td>
            </tr><tr>
                <th>Sumbangan Agensi</th>
                <th>:</th>
                <td>RM {{ $pendapatan->sumbangan_agensi}}</td>
            </tr><tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr><tr>
                <th>JUMLAH KESULURUHAN</th>
                <th>:</th>
                <td>RM {{ $pendapatan->gaji + $pendapatan->gaji_psgn + $pendapatan->sumbangan_anak + $pendapatan->sumbangan_saudara - $pendapatan->sampingan - $pendapatan->sumbangan_agensi }}</td>
            </tr>    
        </tbody> 
    </table>
    <center><h4><a href="{{ route('pendapatan.Eview', ['id' => $pendapatan->id]) }}">Edit Pendapatan</a></h4></center>
    <br>
    <table>
        <h5>PENDAPATAN ISI RUMAH</h5>
        <tbody>
            <tr>
                <th>Makan / Minum</th>
                <th>:</th>
                <td>RM {{ $perbelanjaan->makan}}</td>
            </tr><tr>
                <th>Perubatan</th>
                <th>:</th>
                <td>RM {{ $perbelanjaan->perubatan}}</td>
            </tr><tr>
                <th>Bil TNB / SAJ</th>
                <th>:</th>
                <td>RM {{ $perbelanjaan->bil}}</td>
            </tr><tr>
                <th>Pengangkutan</th>
                <th>:</th>
                <td>RM {{ $perbelanjaan->pengangkutan}}</td>
            </tr><tr>
                <th>Sewa Rumah</th>
                <th>:</th>
                <td>RM {{ $perbelanjaan->sewa_rumah}}</td>
            </tr><tr>
                <th>Persekolahan</th>
                <th>:</th>
                <td>RM {{ $perbelanjaan->persekolahan}}</td>
            </tr><tr>
                <th>Lain-lain</th>
                <th>:</th>
                <td>RM {{ $perbelanjaan->lain}}</td> 
            </tr><tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr><tr>
                <th>JUMLAH PERBELANJAAN</th>
                <th>:</th>
                <td>RM {{ $perbelanjaan->makan + $perbelanjaan->perubatan + $perbelanjaan->bil + $perbelanjaan->sewa_rumah + $perbelanjaan->pengangkutan + $perbelanjaan->persekolahan + $perbelanjaan->lain}} </td>
            </tr>    
        </tbody> 
    </table>
    <center><h4><a href="{{ route('perbelanjaan.Eview', ['id' => $perbelanjaan->id]) }}">Edit Pemohon</a></h4></center>
<br><br>
</div>
</body>
</html>
</body>
</html>