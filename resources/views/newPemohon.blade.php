<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pemohon</title>
    <link rel="stylesheet" href="{{ asset('css/navi2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tableNew.css')}}">
</head>
<body>
    <div class="navigation-bar">
        <a href="{{route('index')}}"class="tab laman">Laman Utama<br>(batal)</a>
        <a class="tab active">Pemohon</a>
        <a class="tab">Pasangan</a>
        <a class="tab">Pendapatan</a>
        <a class="tab">Perbelanjaan</a>
        <a class="tab">Tanggungan dan Waris</a>
        <a class="tab">Harta</a>
        <a class="tab">Bantuan</a>
        <a class="tab">Had Kifayah</a>
        <a class="tab">Lampiran Dokumen</a>
        <a class="tab">Rumusan Siasatan</a>
        <a class="tab">Sejarah Bantuan</a>
    </div>
    <div class="container">
    <div id="pemohon">
    <h5>MAKLUMAT PEMOHON</h5>
    <form action="{{ route('newPemohon.new')}}" method="POST">
        @csrf
    <table>
        <tbody>
            <tr>
                <th>Nama Pemohon</th>
                <th>:</th>
                <td><input type="text" name="nama" placeholder="Nama Penuh" size="50" required></td>
                <th>No. Kad Pengenalan</th>
                <th>:</th>
                <td><input type="text" name="ic" placeholder="12345601XXXX" maxlength="12" required></td>
            </tr><tr>
                <th>Jantina</th>
                <th>:</th>
                <td><select name="jantina" id="jantina" required>
                        <option selected disabled>Pilih Jantina</option>
                        <option value="Lelaki">Lelaki</option>
                        <option value="Wanita">Wanita</option>
                    </select></td>
                <th>Tarikh Lahir</th>
                <th>:</th>
                <td><input type="date" name="tarikh_lahir" id="tarikh_lahir" required></td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <th>:</th>
                <td><select name="status" id="status" required>
                        <option selected disabled>Pilih status</option>
                        <option value="Kahwin">Kahwin</option>
                        <option value="Bujang">Bujang</option>    
                        <option value="Duda(Kematian Isteri)">Duda (Kematian Isteri)</option>
                        <option value="Duda(Bercerai)">Duda (Bercerai)</option>
                        <option value="Janda(Kematian Suami)">Janda (Kematian Suami)</option>
                        <option value="Janda(Bercerai)">Janda (Bercerai)</option>
                </select></td>
                <th>Keadaan Mental</th>
                <th>:</th>
                <td><select name="mental" id="mental" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Waras">Waras</option>
                        <option value="Tidak Waras">Tidak Waras</option>
                    </select></td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <th>:</th>
                <td><select name="islam" id="islam" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang Baik">Kurang Baik</option>
                    </select></td>
                <th>Keadaan Fizikal</th>
                <th>:</th>
                <td><select name="fizikal" id="fizikal" required>
                    <option selected disabled>Sila Pilih</option>
                        <option value="Sihat">Sihat</option>
                        <option value="Sakit">Sakit</option>
                        <option value="OKU">OKU</option>
                    </select></td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">:</th>
                <td rowspan="2">
                    <input type="text" name="alamat" placeholder="lot 1234, jalan xxxxxx, Felda Sg Mas" size="50" required><br>
                    <select name="poskod" id="poskod">
                        <option selected value="81900" required>81900</option>
                    </select><br>
                    <select name="bandar" id="bandar">
                        <option selected value="Kota Tinggi">Kota Tinggi</option>
                    </select>
                </td>
                <th>No. Telefon Rumah</th>
                <th>:</th>
                <td><input type="text" name="nombor_rumah" id="nombor_rumah" placeholder="tiada(-), 0XXXXXXXX"></td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <th>:</th>
                <td><input type="text" name="nombor_bimbit" id="nombor_bimbit" placeholder="tiada(-), 01XXXXXXXXX" required></td>
            </tr>
            <tr>
                <th colspan="6"><center><input type="submit" class="button" value="Seterusnya"></center></th>    
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