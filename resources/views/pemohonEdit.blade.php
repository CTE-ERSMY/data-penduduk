@include('header2a')
<body>
    <main class="main">
    <div class="container">
    <div id="pemohon">
    <h5>MAKLUMAT PEMOHON</h5>
    <form action="{{ route('pemohon.edit', ['id' => $pemohon->id])}}" method="POST">
        @csrf
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Nama Pemohon</th>
                <td><input type="text" name="nama" value="{{ old('nama', $pemohon->nama) }}" class="form-control" required></td>
                <th>No. Kad Pengenalan</th>
                <td><input type="text" name="ic" value="{{ old('ic', $pemohon->ic) }}" maxlength="12" class="form-control" required></td>
            </tr><tr>
                <th>Jantina</th>
                <td><select name="jantina" id="jantina" class="form-control" required>
                        <option selected disabled>Pilih Jantina</option>
                        <option value="Lelaki" {{ old('jantina', $pemohon->jantina) == 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
                        <option value="Wanita" {{ old('jantina', $pemohon->jantina) == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                    </select></td>
                <th>Tarikh Lahir</th>
                <td><input type="date" name="tarikh_lahir" id="tarikh_lahir" class="form-control" value="{{ old('tarikh_lahir', $pemohon->tarikh_lahir ? \Carbon\Carbon::parse($pemohon->tarikh_lahir)->format('Y-m-d') : '') }}" required>
                </td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <td><select name="status" id="status" class="form-control" required>
                        <option selected disabled>Pilih status</option>
                        <option value="Kahwin" {{ old('status', $pemohon->status) == 'Kahwin' ? 'selected' : '' }}>Kahwin</option>
                        <option value="Bujang" {{ old('status', $pemohon->status) == 'Bujang' ? 'selected' : '' }}>Bujang</option>    
                        <option value="Duda(Kematian Isteri)" {{ old('status', $pemohon->status) == 'Duda(Kematian Isteri)' ? 'selected' : '' }}>Duda (Kematian Isteri)</option>
                        <option value="Duda(Bercerai)" {{ old('status', $pemohon->status) == 'Duda(Bercerai)' ? 'selected' : '' }}>Duda (Bercerai)</option>
                        <option value="Janda(Kematian Suami)" {{ old('status', $pemohon->status) == 'Janda(Kematian Suami)' ? 'selected' : '' }}>Janda (Kematian Suami)</option>
                        <option value="Janda(Bercerai)" {{ old('status', $pemohon->status) == 'Janda(Bercerai)' ? 'selected' : '' }}>Janda (Bercerai)</option>
                </select></td>
                <th>Keadaan Mental</th>
                <td><select name="mental" id="mental" class="form-control" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Waras" {{ old('mental', $pemohon->mental) == 'Waras' ? 'selected' : '' }}>Waras</option>
                        <option value="Tidak Waras" {{ old('mental', $pemohon->mental) == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
                    </select></td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <td><select name="islam" id="islam" class="form-control" required>
                        <option selected disabled>Sila Pilih</option>
                        <option value="Baik" {{ old('islam', $pemohon->islam) == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Kurang Baik" {{ old('islam', $pemohon->islam) == 'Kurang Baik' ? 'selected' : '' }}>Kurang Baik</option>
                    </select></td>
                <th>Keadaan Fizikal</th>
                <td><select name="fizikal" id="fizikal" class="form-control" required>
                    <option selected disabled>Sila Pilih</option>
                        <option value="Sihat" {{ old('fizikal', $pemohon->fizikal) == 'Sihat' ? 'selected' : '' }}>Sihat</option>
                        <option value="Sakit" {{ old('fizikal', $pemohon->fizikal) == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                        <option value="OKU" {{ old('fizikal', $pemohon->fizikal) == 'OKU' ? 'selected' : '' }}>OKU</option>
                    </select></td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <td rowspan="2">
                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $pemohon->alamat) }}" size="50" required><br>
                    <select name="poskod" id="poskod" class="form-control" required>
                        <option selected value="81900" {{ old('poskod', $pemohon->poskod) == '81900' ? 'selected' : '' }}>81900</option>
                    </select><br>
                    <select name="bandar" id="bandar" class="form-control">
                        <option selected value="Kota Tinggi" {{ old('bandar', $pemohon->bandar) == 'Kota Tinggi' ? 'selected' : '' }}>Kota Tinggi</option>
                    </select>
                </td>
                <th>No. Telefon Rumah</th>
                <td><input type="text" name="nombor_rumah" id="nombor_rumah" class="form-control" value="{{ old('nombor_rumah', $pemohon->nombor_rumah) }}"></td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <td><input type="text" name="nombor_bimbit" id="nombor_bimbit" class="form-control" value="{{ old('nombor_bimbit', $pemohon->nombor_bimbit) }}" required></td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: center"><a href="{{ route('pemohon.details', ['id' => $pemohon->id]) }}"><button type="button" class="btn btn-danger" style="margin-left: 10px; margin-right: 10px">Batal</button><input type="submit" class="btn btn-success" value="Update" style="margin-left: 10px; margin-right: 10px"></a>
                </td>     
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
</main>
</body>
