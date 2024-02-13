<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunting Maklumat Pemohon</title>
    <link rel="stylesheet" href="{{ asset('css/navi.css')}}">
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
</head>
<body>
    <div class="container">
    <div id="pemohon">
    <h5>MAKLUMAT PEMOHON</h5>
    <form action="{{ route('pemohon.edit', ['id' => $pemohon->id])}}" method="POST">
        @csrf
    <table>
        <tbody>
            <tr>
                <th>Nama Pemohon</th>
                <th>:</th>
                <td><input type="text" name="nama" value="{{ old('nama', $pemohon->nama) }}" size="50" required></td>
                <th>No. Kad Pengenalan</th>
                <th>:</th>
                <td><input type="text" name="ic" value="{{ old('ic', $pemohon->ic) }}" maxlength="12" required></td>
            </tr><tr>
                <th>Jantina</th>
                <th>:</th>
                <td><select name="jantina" id="jantina" required>
                        <option selected disabled>Pilih Jantina</option>
                        <option value="Lelaki" {{ old('jantina', $pemohon->jantina) == 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
                        <option value="Wanita" {{ old('jantina', $pemohon->jantina) == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                    </select></td>
                <th>Tarikh Lahir</th>
                <th>:</th>
                <td><input type="date" name="tarikh_lahir" id="tarikh_lahir" value="{{ old('tarikh_lahir', $pemohon->tarikh_lahir ? \Carbon\Carbon::parse($pemohon->tarikh_lahir)->format('Y-m-d') : '') }}" required>
                </td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <th>:</th>
                <td><select name="status" id="status" required>
                        <option selected disabled>Pilih status</option>
                        <option value="Kahwin" {{ old('status', $pemohon->status) == 'Kahwin' ? 'selected' : '' }}>Kahwin</option>
                        <option value="Bujang" {{ old('status', $pemohon->status) == 'Bujang' ? 'selected' : '' }}>Bujang</option>    
                        <option value="Duda(Kematian Isteri)" {{ old('status', $pemohon->status) == 'Duda(Kematian Isteri)' ? 'selected' : '' }}>Duda (Kematian Isteri)</option>
                        <option value="Duda(Bercerai)" {{ old('status', $pemohon->status) == 'Duda(Bercerai)' ? 'selected' : '' }}>Duda (Bercerai)</option>
                        <option value="Janda(Kematian Suami)" {{ old('status', $pemohon->status) == 'Janda(Kematian Suami)' ? 'selected' : '' }}>Janda (Kematian Suami)</option>
                        <option value="Janda(Bercerai)" {{ old('status', $pemohon->status) == 'Janda(Bercerai)' ? 'selected' : '' }}>Janda (Bercerai)</option>
                </select></td>
                <th>Keadaan Mental</th>
                <th>:</th>
                <td><select name="mental" id="mental" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Waras" {{ old('mental', $pemohon->mental) == 'Waras' ? 'selected' : '' }}>Waras</option>
                        <option value="Tidak Waras" {{ old('mental', $pemohon->mental) == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
                    </select></td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <th>:</th>
                <td><select name="islam" id="islam" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Baik" {{ old('islam', $pemohon->islam) == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Kurang Baik" {{ old('islam', $pemohon->islam) == 'Kurang Baik' ? 'selected' : '' }}>Kurang Baik</option>
                    </select></td>
                <th>Keadaan Fizikal</th>
                <th>:</th>
                <td><select name="fizikal" id="fizikal" required>
                    <option selected disabled>Sila Pilih</option>
                        <option value="Sihat" {{ old('fizikal', $pemohon->fizikal) == 'Sihat' ? 'selected' : '' }}>Sihat</option>
                        <option value="Sakit" {{ old('fizikal', $pemohon->fizikal) == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                        <option value="OKU" {{ old('fizikal', $pemohon->fizikal) == 'OKU' ? 'selected' : '' }}>OKU</option>
                    </select></td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">:</th>
                <td rowspan="2">
                    <input type="text" name="alamat" value="{{ old('alamat', $pemohon->alamat) }}" size="50" required><br>
                    <select name="poskod" id="poskod" required>
                        <option selected value="81900" {{ old('poskod', $pemohon->poskod) == '81900' ? 'selected' : '' }}>81900</option>
                    </select><br>
                    <select name="bandar" id="bandar">
                        <option selected value="Kota Tinggi" {{ old('bandar', $pemohon->bandar) == 'Kota Tinggi' ? 'selected' : '' }}>Kota Tinggi</option>
                    </select>
                </td>
                <th>No. Telefon Rumah</th>
                <th>:</th>
                <td><input type="text" name="nombor_rumah" id="nombor_rumah" value="{{ old('nombor_rumah', $pemohon->nombor_rumah) }}"></td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <th>:</th>
                <td><input type="text" name="nombor_bimbit" id="nombor_bimbit" value="{{ old('nombor_bimbit', $pemohon->nombor_bimbit) }}" required></td>
            </tr>
            <tr>
                <th><a href="{{ route('pemohon.details', ['id' => $pemohon->id]) }}"><button type="button">Batal</button></a>
                </th>
                <th><input type="submit" value="Update"></th>    
            </tr>    
        </tbody>    
    </table>
</div>
</form>
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
<br><br>
</div>
</body>
</html>