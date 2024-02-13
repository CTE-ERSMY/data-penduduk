<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maklumat Pemohon</title>
</head>
<body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pemohon</title>
    <link rel="stylesheet" href="{{ asset('css/navi.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
</head>
<body>
    <div class="container">
    <div class="navigation-bar">
        <a href="{{route('index')}}" class="tab laman">Laman Utama</a>
        <a href="{{route('pemohon.details', ['id' => $pemohon->id])}}" class="tab active">Profil Peribadi</a>
        <a href="{{route('kewangan.details', ['id' => $pemohon->id])}}" class="tab">Kewangan</a>
        <a href="{{route('waris.details', ['id' => $pemohon->id])}}"class="tab">Tanggungan dan Waris</a>
        <a href="# "class="tab">Harta</a>
        <a href="# "class="tab">Bantuan</a>
        <a href="# "class="tab">Had Kifayah</a>
        <a href="# "class="tab">Lampiran Dokumen</a>    
        <a href="# "class="tab">Rumusan Siasatan</a>
        <a href="# "class="tab">Sejarah Bantuan</a>
    </div>

    <h5>MAKLUMAT PEMOHON</h5>
    <table>
        <tbody>
            <tr>
                <th>Nama Pemohon</th>
                <th>:</th>
                <td>{{ $pemohon->nama }} </td>
                <th>No. Kad Pengenalan</th>
                <th>:</th>
                <td>{{ $pemohon->ic }}</td>
            </tr><tr>
                <th>Jantina</th>
                <th>:</th>
                <td>{{ $pemohon->jantina }}</td>
                <th>Tarikh Lahir</th>
                <th>:</th>
                <td>{{ $pemohon->tarikh_lahir }}</td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <th>:</th>
                <td>{{ $pemohon->status }}</td>
                <th>Keadaan Mental</th>
                <th>:</th>
                <td>{{ $pemohon->mental }}</td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <th>:</th>
                <td>{{ $pemohon->islam }}</td>
                <th>Keadaan Fizikal</th>
                <th>:</th>
                <td>{{ $pemohon->fizikal }}</td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">:</th>
                <td rowspan="2">{{ $pemohon->alamat }}
                    <br>{{ $pemohon->poskod }}
                    <br>{{ $pemohon->bandar }}
                </td>
                <th>No. Telefon Rumah</th>
                <th>:</th>
                <td>{{ $pemohon->nombor_rumah }}</td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <th>:</th>
                <td>{{ $pemohon->nombor_bimbit }};</td>
            </tr>    
        </tbody>    
    </table>
    <center><h4><a href="{{ route('pemohon.Eview', ['id' => $pemohon->id]) }}">Edit Pemohon</a></h4></center>
    <br>
    @if ($pasangan)
    <table>
        <h5>MAKLUMAT PASANGAN</h5>
        <tbody>
            <tr>
                <th>Nama Pasangan</th>
                <th>:</th>
                <td>{{ $pasangan->nama }}</td>
                <th>No. Kad Pengenalan</th>
                <th>:</th>
                <td>{{ $pasangan->ic }}</td>
            </tr><tr>
                <th>Jantina</th>
                <th>:</th>
                <td>{{ $pasangan->jantina }}</td>
                <th>Tarikh Lahir</th>
                <th>:</th>
                <td>{{ $pasangan->tarikh_lahir }}</td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <th>:</th>
                <td>{{ $pasangan->status }}</td>
                <th>Keadaan Mental</th>
                <th>:</th>
                <td>{{ $pasangan->mental }}</td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <th>:</th>
                <td>{{ $pasangan->islam }}</td>
                <th>Keadaan Fizikal</th>
                <th>:</th>
                <td>{{ $pasangan->fizikal }}</td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">:</th>
                <td rowspan="2">{{ $pasangan->alamat }}
                    <br>{{ $pasangan->poskod }}
                    <br>{{ $pasangan->bandar }}
                </td>
                <th>No. Telefon Rumah</th>
                <th>:</th>
                <td>{{ $pasangan->nombor_rumah }}</td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <th>:</th>
                <td>{{ $pasangan->nombor_bimbit }}</td>
            </tr>    
        </tbody> 
    </table>
<center><h4><a href="{{ route('pasangan.Eview', ['id' => $pasangan->id]) }}">Edit Pasangan</a></h4></center><br>
    @else
    <p>Pemohon tidak mempunyai maklumat pasangan</p>
    @endif
</div>
<br><br><br>
</body>
</html>
</body>
</html>