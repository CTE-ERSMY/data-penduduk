<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="{{asset('css/navi.css')}}">
    <title>Sunting Maklumat Pasangan</title>
</head>
<body>
    <div id="container">
        <form action="{{ route('pasangan.edit', ['id' => $pasangan->id])}}" method="POST">
            @csrf
        <h5>MAKLUMAT PASANGAN</h5>
        <table>
        <tbody>
            <tr>
                <th>Nama Pasangan</th>
                <th>:</th>
                <td><input type="text" name="nama" value="{{ old('nama', $pasangan->nama) }}" size="50" required></td>
                <th>No. Kad Pengenalan</th>
                <th>:</th>
                <td><input type="text" name="ic" value="{{ old('ic', $pasangan->ic) }}" required></td>
            </tr><tr>
                <th>Jantina</th>
                <th>:</th>
                <td><select name="jantina" id="jantina" required>
                        <option selected disabled>Pilih Jantina</option>
                        <option value="Lelaki" {{ old('jantina', $pasangan->jantina) == 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
                        <option value="Wanita" {{ old('jantina', $pasangan->jantina) == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                    </select></td>
                <th>Tarikh Lahir</th>
                <th>:</th>
                <td><input type="date" name="tarikh_lahir" id="tarikh_lahir" value="{{ old('tarikh_lahir', $pasangan->tarikh_lahir ? \Carbon\Carbon::parse($pasangan->tarikh_lahir)->format('Y-m-d') : '') }}" required>
                </td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <th>:</th>
                <td><select name="status" id="status" required>
                        <option selected disabled>Pilih status</option>
                        <option value="Kahwin" {{ old('status', $pasangan->status) == 'Kahwin' ? 'selected' : '' }}>Kahwin</option>
                        <option value="Bujang" {{ old('status', $pasangan->status) == 'Bujang' ? 'selected' : '' }}>Bujang</option>    
                        <option value="Duda(Kematian Isteri)" {{ old('status', $pasangan->status) == 'Duda(Kematian Isteri)' ? 'selected' : '' }}>Duda (Kematian Isteri)</option>
                        <option value="Duda(Bercerai)" {{ old('status', $pasangan->status) == 'Duda(Bercerai)' ? 'selected' : '' }}>Duda (Bercerai)</option>
                        <option value="Janda(Kematian Suami)" {{ old('status', $pasangan->status) == 'Janda(Kematian Suami)' ? 'selected' : '' }}>Janda (Kematian Suami)</option>
                        <option value="Janda(Bercerai)" {{ old('status', $pasangan->status) == 'Janda(Bercerai)' ? 'selected' : '' }}>Janda (Bercerai)</option>
                </select></td>
                <th>Keadaan Mental</th>
                <th>:</th>
                <td><select name="mental" id="mental" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Waras" {{ old('mental', $pasangan->mental) == 'Waras' ? 'selected' : '' }}>Waras</option>
                        <option value="Tidak Waras" {{ old('mental', $pasangan->mental) == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
                    </select></td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <th>:</th>
                <td><select name="islam" id="islam" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Baik" {{ old('islam', $pasangan->islam) == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Kurang Baik" {{ old('islam', $pasangan->islam) == 'Kurang Baik' ? 'selected' : '' }}>Kurang Baik</option>
                    </select></td>
                <th>Keadaan Fizikal</th>
                <th>:</th>
                <td><select name="fizikal" id="fizikal" required>
                    <option selected disabled>Sila Pilih</option>
                        <option value="Sihat" {{ old('fizikal', $pasangan->fizikal) == 'Sihat' ? 'selected' : '' }}>Sihat</option>
                        <option value="Sakit" {{ old('fizikal', $pasangan->fizikal) == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                        <option value="OKU" {{ old('fizikal', $pasangan->fizikal) == 'OKU' ? 'selected' : '' }}>OKU</option>
                    </select></td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">:</th>
                <td rowspan="2">
                    <input type="text" name="alamat" value="{{ old('alamat', $pasangan->alamat) }}" size="50" required><br>
                    <select name="poskod" id="poskod" required>
                        <option selected value="81900" {{ old('poskod', $pasangan->poskod) == '81900' ? 'selected' : '' }}>81900</option>
                    </select><br>
                    <select name="bandar" id="bandar">
                        <option selected value="Kota Tinggi" {{ old('bandar', $pasangan->bandar) == 'Kota Tinggi' ? 'selected' : '' }}>Kota Tinggi</option>
                    </select>
                </td>
                <th>No. Telefon Rumah</th>
                <th>:</th>
                <td><input type="text" name="nombor_rumah" id="nombor_rumah" value="{{ old('nombor_rumah', $pasangan->nombor_rumah) }}"></td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <th>:</th>
                <td><input type="text" name="nombor_bimbit" id="nombor_bimbit" value="{{ old('nombor_bimbit', $pasangan->nombor_bimbit) }}" required></td>
            </tr>
            <tr>
                <th><a href="{{ route('pemohon.details', ['id' => $pasangan->maklumat_pemohon_id]) }}"><button type="button">Batal</button></a></th>    
                <th><input type="submit" value="Update"></th>
            </tr>        
        </tbody> 
    </table>
</form>
</div>
</body>
</html>