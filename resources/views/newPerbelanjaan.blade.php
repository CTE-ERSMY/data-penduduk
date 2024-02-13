<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maklumat Perbelanjaan</title>
</head>
<body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/navi2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tableNew.css')}}">
    <title>Kewangan</title>
</head>
<body>
    <div class="navigation-bar">
        <a href="{{route('index')}}"class="tab laman">Laman Utama<br>(batal)</a>
        <a class="tab done">Pemohon</a>
        <a class="tab done">Pasangan</a>
        <a class="tab done">Pendapatan</a>
        <a class="tab active">Perbelanjaan</a>
        <a class="tab">Tanggungan dan Waris</a>
        <a class="tab">Harta</a>
        <a class="tab">Bantuan</a>
        <a class="tab">Had Kifayah</a>
        <a class="tab">Lampiran Dokumen</a>
        <a class="tab">Rumusan Siasatan</a>
        <a class="tab">Sejarah Bantuan</a>
    </div>
    <div class="container">
    <form action="{{ route('perbelanjaan.new')}}" method="POST">
    <table>
        @csrf
        @if(isset($pemohonId))
        <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
        @endif
        <h5>PERBELANJAAN ISI RUMAH</h5>
        <tbody>
            <tr>
                <th>Makan / Minum</th>
                <th>:</th>
                <td>RM:<input type="number" name="makan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Perubatan</th>
                <th>:</th>
                <td>RM:<input type="number" name="perubatan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Bil TNB / SAJ</th>
                <th>:</th>
                <td>RM:<input type="number" name="bil" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Pengangkutan</th>
                <th>:</th>
                <td>RM:<input type="number" name="pengangkutan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Sewa Rumah</th>
                <th>:</th>
                <td>RM:<input type="number" name="sewa_rumah" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Persekolahan</th>
                <th>:</th>
                <td>RM:<input type="number" name="persekolahan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Lain-lain</th>
                <th>:</th>
                <td>RM:<input type="number" name="lain" step="0.01" min="0" required></td> 
            </tr><tr>
                <th colspan="3"><center><input type="submit" class="button" value="Seterusnya"></center></th>    
            </tr>   
        </tbody> 
    </table>
</form>     
</div>
</body>
</html>
</body>
</html>