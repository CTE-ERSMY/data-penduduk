@include('header2')
<header>
    <style>
    .table {
        width: 100%;
    }
    td, th {
        width: 30%;
    }
</style>
</header>
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
        <td>{{ $pendapatan->gaji ?? 'N/A'}} </td>
    </tr><tr>
        <td>No. Kad Pengenalan</td>
        <td>{{ $pemohon->ic }}</td>
        <td>Pendapatan Pasangan (RM)</td>
        <td>{{ $pendapatan->gaji_psgn ?? 'N/A'}} </td>
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
                <td style="width:15%"><a href="{{ route('hadTanggungan.Eview', $tanggungan->id) }}"><button type="button" class="btn btn-info">Edit</button></a></td>
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
    <center><h4><a href="{{ route('hadPenolakan.Eview', ['id' => $hadPenolakan->id]) }}">Edit Had Penolakan</a></h4></center>
    
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
    <center><h4><a href="{{ route('hadPenambahan.Eview', ['id' => $hadPenambahan->id]) }}">Edit Had Penambahan</a></h4></center>
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
</main>