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
    <link rel="stylesheet" href="{{ asset('css/navi2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table copy.css')}}">
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
<body>
    <h5>MAKLUMAT PEMOHON</h5>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Nama Pemohon</th>
                <td>{{ $pemohon->nama }} </td>
                <th>No. Kad Pengenalan</th>
                <td>{{ $pemohon->ic }}</td>
            </tr><tr>
                <th>Jantina</th>
                <td>{{ $pemohon->jantina }}</td>
                <th>Tarikh Lahir</th>
                <td>{{ $pemohon->tarikh_lahir }}</td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <td>{{ $pemohon->status }}</td>
                <th>Keadaan Mental</th>
                <td>{{ $pemohon->mental }}</td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <td>{{ $pemohon->islam }}</td>
                <th>Keadaan Fizikal</th>
                <td>{{ $pemohon->fizikal }}</td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <td rowspan="2">{{ $pemohon->alamat }}
                    <br>{{ $pemohon->poskod }}
                    <br>{{ $pemohon->bandar }}
                </td>
                <th>No. Telefon Rumah</th>
                <td>{{ $pemohon->nombor_rumah }}</td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <td>{{ $pemohon->nombor_bimbit }};</td>
            </tr>    
        </tbody>    
    </table>
    <br>
    @if ($pasangan)
    <table class="table table-striped">
        <h5>MAKLUMAT PASANGAN</h5>
        <tbody>
            <tr>
                <th>Nama Pasangan</th>
                <td>{{ $pasangan->nama }}</td>
                <th>No. Kad Pengenalan</th>
                <td>{{ $pasangan->ic }}</td>
            </tr><tr>
                <th>Jantina</th>
                <td>{{ $pasangan->jantina }}</td>
                <th>Tarikh Lahir</th>
                <td>{{ $pasangan->tarikh_lahir }}</td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <td>{{ $pasangan->status }}</td>
                <th>Keadaan Mental</th>
                <td>{{ $pasangan->mental }}</td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <td>{{ $pasangan->islam }}</td>
                <th>Keadaan Fizikal</th>
                <td>{{ $pasangan->fizikal }}</td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <td rowspan="2">{{ $pasangan->alamat }}
                    <br>{{ $pasangan->poskod }}
                    <br>{{ $pasangan->bandar }}
                </td>
                <th>No. Telefon Rumah</th>
                <td>{{ $pasangan->nombor_rumah }}</td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <td>{{ $pasangan->nombor_bimbit }}</td>
            </tr>    
        </tbody> 
    </table>
    @else
    <p>Pemohon tidak mempunyai maklumat pasangan</p>
    @endif
</div>

<table class="table table-striped">
    @if ($pendapatan)
    <h5>PENDAPATAN PEMOHON</h5>
    <tbody>
        <tr>
            <th>Jawatan</th>
            <td>RM {{ $pendapatan->jawatan }} </td>
        </tr><tr>
            <th>Gaji</th>
            <td>RM {{ $pendapatan->gaji}}</td>
        </tr><tr>
            <th>Majikan</th>
            <td>RM {{ $pendapatan->majikan }}</td>
        </tbody>
</table>
<br><br>
<table class="table table-striped">
    <h5>PENDAPATAN PASANGAN</h5>
    <tbody>
        <tr>
            <th>Jawatan</th>
            <td>RM {{ $pendapatan->jawatan_psgn}}</td>
        </tr><tr>
            <th>Gaji</th>
            <td>RM {{ $pendapatan->gaji_psgn}}</td>
        </tr><tr>
            <th>Majikan</th>
            <td>RM {{ $pendapatan->majikan_psgn}}</td>
        </tbody>
    </tbody>
</table>
<br><br>
<table class="table table-striped">
    <h5>PENDAPATAN DAN LAIN-LAIN SUMBANGAN</h5>
    <tbody>
        <tr>
            <th>Pendapatan Pemohon</th>
            <td>RM {{ $pendapatan->gaji}}</td>
        </tr><tr>
            <th>Pendapatan Pasangan</th>
            <td>RM {{ $pendapatan->gaji_psgn}}</td>
        </tr><tr>
            <th>Sumbangan Anak</th>
            <td>RM {{ $pendapatan->sumbangan_anak}}</td>
        </tr><tr>
            <th>Sumbangan Saudara Mara</th>
            <td>RM {{ $pendapatan->sumbangan_saudara}}</td>
        </tr><tr>
            <th>Pendapatan Sampingan</th>
            <td>RM {{ $pendapatan->sampingan}}</td>
        </tr><tr>
            <th>Sumbangan Agensi</th>
            <td>RM {{ $pendapatan->sumbangan_agensi}}</td>
        </tr><tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr><tr>
            <th>JUMLAH KESULURUHAN</th>
            <td>RM {{ $pendapatan->gaji + $pendapatan->gaji_psgn + $pendapatan->sumbangan_anak + $pendapatan->sumbangan_saudara - $pendapatan->sampingan - $pendapatan->sumbangan_agensi }}</td>
        </tr>    
    </tbody> 
</table>
<br>
<table class="table table-striped">
    <h5>PENDAPATAN ISI RUMAH</h5>
    <tbody>
        <tr>
            <th>Makan / Minum</th>
            <td>RM {{ $perbelanjaan->makan}}</td>
        </tr><tr>
            <th>Perubatan</th>
            <td>RM {{ $perbelanjaan->perubatan}}</td>
        </tr><tr>
            <th>Bil TNB / SAJ</th>
            <td>RM {{ $perbelanjaan->bil}}</td>
        </tr><tr>
            <th>Pengangkutan</th>
            <td>RM {{ $perbelanjaan->pengangkutan}}</td>
        </tr><tr>
            <th>Sewa Rumah</th>
            <td>RM {{ $perbelanjaan->sewa_rumah}}</td>
        </tr><tr>
            <th>Persekolahan</th>
            <td>RM {{ $perbelanjaan->persekolahan}}</td>
        </tr><tr>
            <th>Lain-lain</th>
            <td>RM {{ $perbelanjaan->lain}}</td> 
        </tr><tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr><tr>
            <th>JUMLAH PERBELANJAAN</th>
            <td>RM {{ $perbelanjaan->makan + $perbelanjaan->perubatan + $perbelanjaan->bil + $perbelanjaan->sewa_rumah + $perbelanjaan->pengangkutan + $perbelanjaan->persekolahan + $perbelanjaan->lain}} </td>
        </tr>    
    </tbody> 
</table>
@else
        <p>Tiada maklumat kewangan pemohon</p>
    @endif
<br><br>
</div>

@if ($waris->isNotEmpty())
    @php
                $count=1;
            @endphp
<h5>MAKLUMAT TANGGUNGAN</h5>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 5%">Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur (tahun)</th>
            <th>Hubungan</th>
            <th>Sekolah</th>
            <th>Fizikal</th>
            <th>Mental</th>
            <th>Keperluan</th>
        </tr>
    </thead>
    @foreach ($waris as $warisData)
    @if ($warisData->status == 'Sekolah')
    <tbody>
            <tr>
                <td style="width: 5%">{{ $count++ }} </td>
                <td>{{ $warisData->nama }}</td>
                <td>{{ $warisData->ic }} </td>
                <td>{{ $warisData->umur }} </td>
                <td>{{ $warisData->hubungan }} </td>
                <td>{{ $warisData->kerja }} </td>
                <td>{{ $warisData->fizikal }} </td>
                <td>{{ $warisData->mental }} </td>
                <td>{{ $warisData->pendapatan }} </td>
            </tr>       
            @endif
        @endforeach     
    </tbody>
</table>
<br>
@php
$count2=1;
@endphp
<h5>MAKLUMAT WARIS</h5>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 5%">Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur (tahun)</th>
            <th>Hubungan</th>
            <th>Pekerjaan</th>
            <th>Fizikal</th>
            <th>Mental</th>
            <th>Pendapatan</th>
        </tr>
    </thead>
    @foreach ($waris as $warisData)
    @if ($warisData->status == 'Bekerja' || $warisData->status == 'Tidak Bekerja')
    <tbody>
            <tr>
                <td style="width: 5%">{{ $count2++ }} </td>
                <td>{{ $warisData->nama }}</td>
                <td>{{ $warisData->ic }} </td>
                <td>{{ $warisData->umur }} </td>
                <td>{{ $warisData->hubungan }} </td>
                <td>{{ $warisData->kerja }} </td>
                <td>{{ $warisData->fizikal }} </td>
                <td>{{ $warisData->mental }} </td>
                <td>{{ $warisData->pendapatan }} </td>
            </tr>        
            @endif  
        @endforeach
    </tbody>
</table> 
@else
    <p>Tiada maklumat waris</p>
@endif
</div>

<table class="table table-striped">
    @if ($harta)
    <h5>Maklumat Kediaman Pemohon</h5>
    <tbody>
        <tr>
            <th>Status Kediaman</th>
            <td>{{ $harta->status_kediaman }} </td>
        </tr><tr>
            <th>Jenis Kediaman</th>
            <td>{{ $harta->jenis_kediaman }}</td>
        </tr><tr>
            <th>Kemudahan</th>
            <td>{{ $harta->kemudahan}}</td>
        </tr><tr>
            <th>Kemudahan Tambahan</th>
            <td>{{ $harta->kemudahan_tambahan }}</td>
        </tr><tr>
            <th>Anggaran Nilai Semasa Kediaman</th>
            <td>RM {{ $harta->nilai_kediaman }}</td>
        </tr><tr>
            <th>Bayaran Bulanan</th>
            <td>RM {{ $harta->bulanan}}</td>
        </tr></tbody>
    </table>
        
        <table class="table table-striped">
            <h5>Maklumat Harta Pemohon</h5>
            <tbody>
        <tr>
            <th>Rumah (unit)</th>
            <td>{{ $harta->rumah}}</td>
        </tr><tr>
            <th>Nilai Rumah</th>
            <td>RM {{ $harta->nilai_rumah}}</td>
        </tr><tr>
            <th>Tanah (ekar)</th>
            <td>{{ $harta->tanah}}</td>
        </tr><tr>
            <th>Nilai Tanah</th>
            <td>RM {{ $harta->nilai_tanah}}</td>
        </tr><tr>
            <th>Kenderaan</th>
            <td>{{ $harta->Kenderaan}}</td>
        </tr><tr>
            <th>Nilai Kenderaan</th>
            <td>RM {{ $harta->nilai_kenderaan}}</td>
        </tr><tr>
            <th>Astro</th>
            <td>{{ $harta->nilai_kenderaan}}</td>
        </tr><tr>
            <th>Nilai Astro</th>
            <td>RM {{ $harta->nilai_astro}}</td>
        </tr><tr>
            <th>Nilai Barang Kemas</th>
            <td>RM {{ $harta->nilai_barang_kemas}}</td>
        </tr><tr>
            <th>Nilai Simpanan</th>
            <td>RM {{ $harta->nilai_simpanan}}</td>
        </tr><tr>
            <th>Lain-lain</th>
            <td>RM {{ $harta->lain}}</td>
        </tr><tr>
            <th>Nilai lain-lain</th>
            <td>RM {{ $harta->nilai_lain}}</td>
        </tr>
        </tbody>
</table>
@else
        <p>Tiada maklumat kewangan pemohon</p>
    @endif


    @if ($hadTanggungan->isNotEmpty())
    @php
    $count=1;
    @endphp
    <br>
<table class="table table-bordered">
    <tr>
        <td>Nama</td>
        <td>{{ $pemohon->nama }}</td>
        <td>Pendapatan Pemohon (RM)</td>
        <td>{{ $pendapatan->gaji}} </td>
    </tr><tr>
        <td>No. Kad Pengenalan</td>
        <td>{{ $pemohon->ic }}</td>
        <td>Pendapatan Pasangan (RM)</td>
        <td>{{ $pendapatan->gaji_psgn }} </td>
    </tr><tr>
        <td>Bilangan Tanggungan</td>
        <td>{{ $bilTanggungan}} </td>
        <td>Sumbangan anak (RM)</td>
        <td>{{ $pendapatan->sumbangan_anak}} </td>
    </tr><tr>
        <td></td>
        <td></td>
        <td>Lain-lain Sumbangan (RM)</td>
        <td>{{ $pendapatan->sumbangan_saudara}} </td>
    </tr><tr>
        <td></td>
        <td></td>
        <td><b>Jumlah Keseluruhan</b></td>
        <td>{{ $pendapatan->sumbangan_saudara + $pendapatan->sumbangan_anak + $pendapatan->gaji + $pendapatan->gaji_psgn }}</td>
    </tr>
</table>
<h5>Had Tanggungan</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:5%">Bil</th>
                <th style="width:50%">Butiran Had Kifayah</th>
                <th style="width:40%">Jumlah (RM)</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        @foreach ($hadTanggungan as $tanggungan)
        <tbody>
            <tr>    
                <td style="width:5%">{{ $count++ }}</td>
                <td style="width:40%">{{ $tanggungan->butiran_tanggungan }}</td>
                <td style="width:40%">{{ $tanggungan->jumlah_tanggungan }} </td>
            </tr>
            @endforeach
            <tr>
                <td style="width:5%">&nbsp;</td>
                <td>Jumlah Keseluruhan</td>
                <td>{{ $totalJumlah }} </td>
                <td></td>
            </tr>
        </tbody>
        
        @endif
    </table>

    @if ($hadPenolakan)
<h5>Had Penolakan</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:5%">Bil</th>
                <th>Butiran Had Kifayah</th>
                <th>Kadar Had Kifayah (RM)</th>
                <th>Kuantiti</th>
                <th>Jumlah (RM)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width:5%">1</td>
                <td>Kereta (RM 30, 000 dan ke atas)</td>
                <td>300</td>
                <td>{{ $hadPenolakan->int_kereta_mahal }} </td>
                <td>{{ $hadPenolakan->kereta_mahal}} </td>
            </tr>
            <tr>
                <td style="width:5%">2</td>
                <td>Kereta (RM 30, 000 dan ke bawah)</td>
                <td>100</td>
                <td>{{ $hadPenolakan->int_kereta_murah }} </td>
                <td>{{ $hadPenolakan->kereta_murah}} </td>
            </tr>
            <tr>
                <td style="width:5%">3</td>
                <td>Telefon Bimbit</td>
                <td>50</td>
                <td>{{ $hadPenolakan->int_telefon_bimbit }} </td>
                <td>{{ $hadPenolakan->telefon_bimbit}} </td>
            </tr>
            <tr>
                <td style="width:5%">4</td>
                <td>Barang Kemas (Emas Melebihi Keperluan)</td>
                <td>100</td>
                <td>{{ $hadPenolakan->int_emas }} </td>
                <td>{{ $hadPenolakan->emas}} </td>
            </tr>
            <tr>
                <td style="width:5%">5</td>
                <td>Astro</td>
                <td>50</td>
                <td>{{ $hadPenolakan->int_astro }} </td>
                <td>{{ $hadPenolakan->astro}} </td>
            </tr>
            <tr>
                <td style="width:5%">6</td>
                <td>Alat Penghawa Dingin</td>
                <td>50</td>
                <td>{{ $hadPenolakan->int_aircond }} </td>
                <td>{{ $hadPenolakan->aircond}} </td>
            </tr>
            <tr>
                <td style="width:5%">7</td>
                <td>VCD / DVD / Radio-HIFI</td>
                <td>50</td>
                <td>{{ $hadPenolakan->int_radio }} </td>
                <td>{{ $hadPenolakan->radio}} </td>
            </tr>
            <tr>
                <td style="width:5%">8</td>
                <td>Wang Simpanan</td>
                <td>0</td>
                <td>{{ $hadPenolakan->int_simpanan }} </td>
                <td>{{ $hadPenolakan->simpanan}} </td>
            </tr>
            <tr>
                <td style="width:5%">9</td>
                <td>Home Theater</td>
                <td>50</td>
                <td>{{ $hadPenolakan->int_home_theater }} </td>
                <td>{{ $hadPenolakan->home_theater}} </td>
            </tr>
            <tr>
                <td style="width:5%">10</td>
                <td>Perokok</td>
                <td>50</td>
                <td>{{ $hadPenolakan->int_perokok }} </td>
                <td>{{ $hadPenolakan->perokok}} </td>
            </tr>
            <tr>
                <td style="width:5%">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <th>Jumlah Keseluruhan</th>
                <th>RM {{ $hadPenolakan->kereta_mahal + $hadPenolakan->kereta_murah + $hadPenolakan->telefon_bimbit + $hadPenolakan->emas + $hadPenolakan->astro + $hadPenolakan->aircond + $hadPenolakan->radio + $hadPenolakan->simpanan + $hadPenolakan->home_theater + $hadPenolakan->perokok }}</th>
            </tr>
        </tbody>
    </table>
    @endif
    
    @if ($hadPenambahan)
    <h5>Had Penambahan</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:5%">Bil</th>
                <th>Butiran Had Kifayah</th>
                <th>Kadar Had Kifayah (RM)</th>
                <th>Kuantiti</th>
                <th>Jumlah (RM)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width:5%">1</td>
                <td>Kos Perubatan Sakit Kronik</td>
                <td>150</td>
                <td>{{ $hadPenambahan->int_kos_kronik }} </td>
                <td>{{ $hadPenambahan->kos_kronik}} </td>
            </tr>
            <tr>
                <td style="width:5%">2</td>
                <td>Cacat Semulajadi</td>
                <td>150</td>
                <td>{{ $hadPenambahan->int_cacat_semulajadi }} </td>
                <td>{{ $hadPenambahan->cacat_semulajadi}} </td>
            </tr>
            <tr>
                <td style="width:5%">3</td>
                <td>Cacat Mendatang</td>
                <td>150</td>
                <td>{{ $hadPenambahan->int_cacat_mendatang }} </td>
                <td>{{ $hadPenambahan->cacat_mendatang}} </td>
            </tr>
            <tr>
                <td style="width:5%">4</td>
                <td>Ibu / Bapa</td>
                <td>150</td>
                <td>{{ $hadPenambahan->int_ibu_bapa }} </td>
                <td>{{ $hadPenambahan->ibu_bapa}} </td>
            </tr>
            <tr>
                <td style="width:5%">5</td>
                <td>Ibu Tinggal</td>
                <td>150</td>
                <td>{{ $hadPenambahan->int_ibu_tinggal }} </td>
                <td>{{ $hadPenambahan->ibu_tinggal}} </td>
            </tr>
            <tr>
                <td style="width:5%">6</td>
                <td>Keluarga Bermasalah</td>
                <td>150</td>
                <td>{{ $hadPenambahan->int_masalah_keluarga }} </td>
                <td>{{ $hadPenambahan->masalah_keluarga}} </td>
            </tr>
            <tr>
                <td style="width:5%">7</td>
                <td>Ibu Tunggal</td>
                <td>150</td>
                <td>{{ $hadPenambahan->int_ibu_tunggal }} </td>
                <td>{{ $hadPenambahan->ibu_tunggal}} </td>
            </tr>
            <tr>
                <td style="width:5%">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <th>Jumlah Keseluruhan</th>
                <th>RM {{ $hadPenambahan->ibu_tunggal + $hadPenambahan->kos_kronik + $hadPenambahan->cacat_semulajadi + $hadPenambahan->cacat_mendatang + $hadPenambahan->ibu_bapa + $hadPenambahan->ibu_tinggal + $hadPenambahan->masalah_keluarga }}</th>
            </tr>
        </tbody>
    </table>
    @endif

    <h5>KEPUTUSAN</h5>
    <table class="table table-bordered">
        <tr>
            <td>JUMLAH HAD KIFAYAH (HAD TANGGUNGAN + HAD PENAMBAHAN - HAD PENOLAKAN)</td>
            <td>RM {{ $totalJumlah 
            + ( $hadPenambahan->ibu_tunggal + $hadPenambahan->kos_kronik + $hadPenambahan->cacat_semulajadi + $hadPenambahan->cacat_mendatang + $hadPenambahan->ibu_bapa + $hadPenambahan->ibu_tinggal + $hadPenambahan->masalah_keluarga ) 
            - ( $hadPenolakan->kereta_mahal + $hadPenolakan->kereta_murah + $hadPenolakan->telefon_bimbit + $hadPenolakan->emas + $hadPenolakan->astro + $hadPenolakan->aircond + $hadPenolakan->radio + $hadPenolakan->simpanan + $hadPenolakan->home_theater + $hadPenolakan->perokok ) }}</td>
            </tr><tr>
            <td>PENDAPATAN - JUMLAH HAD KIFAYAH</td>
            <td>RM {{ ( $pendapatan->sumbangan_saudara + $pendapatan->sumbangan_anak + $pendapatan->gaji + $pendapatan->gaji_psgn ) - 
                ( $totalJumlah 
                    + ( $hadPenambahan->ibu_tunggal + $hadPenambahan->kos_kronik + $hadPenambahan->cacat_semulajadi + $hadPenambahan->cacat_mendatang + $hadPenambahan->ibu_bapa + $hadPenambahan->ibu_tinggal + $hadPenambahan->masalah_keluarga ) 
                    - ( $hadPenolakan->kereta_mahal + $hadPenolakan->kereta_murah + $hadPenolakan->telefon_bimbit + $hadPenolakan->emas + $hadPenolakan->astro + $hadPenolakan->aircond + $hadPenolakan->radio + $hadPenolakan->simpanan + $hadPenolakan->home_theater + $hadPenolakan->perokok )) }}</td>
        </tr>
    </table>

    @if ($sejarahBantuan)
<h5>SEJARAH BANTUAN</h5>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nama Bantuan</th>
            <th>No. Akaun</th>
            <th>Tarikh Mohon</th>
            <th>Tarikh Lulus</th>
            <th>Tarikh Mula</th>
            <th>Jumlah Lulus</th>
            <th>Status Bantuan</th>
            <th>Catatan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $sejarahBantuan->nama_bantuan }}<br><a href="{{ asset($sejarahBantuan->file_path) }}" target="_blank">{{ $sejarahBantuan->file_name }}</a></td>
            <td>{{ $sejarahBantuan->no_akaun }}</td>
            <td>{{ $sejarahBantuan->tarikh_mohon }}</td>
            <td>{{ $sejarahBantuan->tarikh_lulus }}</td>
            <td>{{ $sejarahBantuan->tarikh_mula }}</td>
            <td>{{ $sejarahBantuan->jumlah_lulus }}</td>
            <td>{{ $sejarahBantuan->status_bantuan }}</td>
            <td>{{ $sejarahBantuan->catatan }}</td>
        </tr>
    </tbody>
</table>
@else
<p>Tiada Maklumat Sejarah Bantuan</p>
@endif    
<center><h4><a href="{{ route('pemohon.details', ['id' => $pemohon->id]) }}">Kembali</h4></center>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>