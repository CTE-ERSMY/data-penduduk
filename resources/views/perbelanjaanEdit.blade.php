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
    <link rel="stylesheet" href="{{ asset('css/navi.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
    <title>Suntingan Perbelanjaan</title>
</head>
<body>
    <div class="container">
    <form action="{{ route('perbelanjaan.edit', ['id' => $perbelanjaan->id])}}" method="POST">
    <table>
        @csrf
        <h5>PERBELANJAAN ISI RUMAH</h5>
        <tbody>
            <tr>
                <th>Makan / Minum</th>
                <th>:</th>
                <td>RM:<input type="number" value="{{ old('makan', $perbelanjaan->makan) }}" name="makan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Perubatan</th>
                <th>:</th>
                <td>RM:<input type="number" value="{{ old('perubatan', $perbelanjaan->perubatan) }}" name="perubatan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Bil TNB / SAJ</th>
                <th>:</th>
                <td>RM:<input type="number" value="{{ old('bil', $perbelanjaan->bil) }}" name="bil" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Pengangkutan</th>
                <th>:</th>
                <td>RM:<input type="number" value="{{ old('pengangkutan', $perbelanjaan->pengangkutan) }}" name="pengangkutan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Sewa Rumah</th>
                <th>:</th>
                <td>RM:<input type="number" value="{{ old('sewa_rumah', $perbelanjaan->sewa_rumah) }}" name="sewa_rumah" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Persekolahan</th>
                <th>:</th>
                <td>RM:<input type="number" value="{{ old('persekolahan', $perbelanjaan->persekolahan) }}" name="persekolahan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Lain-lain</th>
                <th>:</th>
                <td>RM:<input type="number" value="{{ old('lain', $perbelanjaan->lain) }}" name="lain" step="0.01" min="0" required></td> 
            </tr><tr>
                <th><a href="{{ route('kewangan.details', ['id' => $perbelanjaan->maklumat_pemohon_id]) }}"><button type="button">Batal</button></a></th>
                <th colspan="2"><input type="submit" value="Update"></th>    
            </tr>   
        </tbody> 
    </table>
</form>     
</div>
</body>
</html>
</body>
</html>