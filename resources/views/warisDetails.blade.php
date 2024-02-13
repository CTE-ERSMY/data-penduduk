<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggungan dan Waris</title>
    <link rel="stylesheet" href="{{ asset('css/navi.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table2.css')}}">
</head>
<body>
    <div class="container">
    <div class="navigation-bar">
        <a href="{{route('index')}}" class="tab laman">Laman Utama</a>
        <a href="{{route('pemohon.details', ['id' => $pemohon->id])}}" class="tab">Profil Peribadi</a>
        <a href="{{route('kewangan.details', ['id' => $pemohon->id])}}" class="tab">Kewangan</a>
        <a href="{{route('waris.details', ['id' => $pemohon->id])}}"class="tab active">Tanggungan dan Waris</a>
        <a href="#"class="tab">Harta</a>
        <a href="#"class="tab">Bantuan</a>
        <a href="#"class="tab">Had Kifayah</a>
        <a href="#"class="tab">Lampiran Dokumen</a>
        <a href="#"class="tab">Rumusan Siasatan</a>
        <a href="#"class="tab">Sejarah Bantuan</a>
    </div>
    
@if ($waris->isNotEmpty())
    @php
                $count=1;
            @endphp
<h5>MAKLUMAT TANGGUNGAN</h5>
<table>
    <thead>
        <tr>
            <th>Bil</th>
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
                <td>{{ $count++ }} </td>
                <td>{{ $warisData->nama }}</td>
                <td>{{ $warisData->ic }} </td>
                <td>{{ $warisData->umur }} </td>
                <td>{{ $warisData->hubungan }} </td>
                <td>{{ $warisData->kerja }} </td>
                <td>{{ $warisData->fizikal }} </td>
                <td>{{ $warisData->mental }} </td>
                <td>{{ $warisData->pendapatan }} </td>
                <td><button type="button"><a href="{{ route('waris.Eview', $warisData->id) }}">Edit</a></button></td>
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
<table>
    <thead>
        <tr>
            <th>Bil</th>
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
                <td>{{ $count2++ }} </td>
                <td>{{ $warisData->nama }}</td>
                <td>{{ $warisData->ic }} </td>
                <td>{{ $warisData->umur }} </td>
                <td>{{ $warisData->hubungan }} </td>
                <td>{{ $warisData->kerja }} </td>
                <td>{{ $warisData->fizikal }} </td>
                <td>{{ $warisData->mental }} </td>
                <td>{{ $warisData->pendapatan }} </td>
                <td><a href="{{ route('waris.Eview', $warisData->id) }}"><button>Edit</button></a></td>
            </tr>        
            @endif  
        @endforeach
    </tbody>
</table> 
@else
    <p>Tiada maklumat waris</p>
@endif
</div>
</body>
</html>
