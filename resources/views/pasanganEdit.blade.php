@include('header2a')
<body>
    <main class="main">
    <div class="container">
        <h5>MAKLUMAT PASANGAN</h5>
        <form action="{{ route('pasangan.edit', ['id' => $pasangan->id])}}" method="POST">
            @csrf
        <table class="table table-striped">
        <tbody>
            <tr>
                <th>Nama Pasangan</th>
                <td><input class="form-control" type="text" name="nama" value="{{ old('nama', $pasangan->nama) }}" required></td>
                <th>No. Kad Pengenalan</th>
                <td><input class="form-control" type="text" name="ic" value="{{ old('ic', $pasangan->ic) }}" maxlength="12" required></td>
            </tr><tr>
                <th>Jantina</th>
                <td><select class="form-control" name="jantina" id="jantina" required>
                        <option selected disabled>Pilih Jantina</option>
                        <option value="Lelaki" {{ old('jantina', $pasangan->jantina) == 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
                        <option value="Perempuan" {{ old('jantina', $pasangan->jantina) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select></td>
                <th>Tarikh Lahir</th>
                <td><input class="form-control" type="date" name="tarikh_lahir" id="tarikh_lahir" value="{{ old('tarikh_lahir', $pasangan->tarikh_lahir ? \Carbon\Carbon::parse($pasangan->tarikh_lahir)->format('Y-m-d') : '') }}" required>
                </td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <td><select class="form-control" name="status" id="status">
                        <option selected disabled>Pilih status</option>
                        <option value="Kahwin" {{ old('status', $pasangan->status) == 'Kahwin' ? 'selected' : '' }}>Kahwin</option>
                        <option value="Bujang" {{ old('status', $pasangan->status) == 'Bujang' ? 'selected' : '' }}>Bujang</option>    
                        <option value="Duda(Kematian Isteri)" {{ old('status', $pasangan->status) == 'Duda(Kematian Isteri)' ? 'selected' : '' }}>Duda (Kematian Isteri)</option>
                        <option value="Duda(Bercerai)" {{ old('status', $pasangan->status) == 'Duda(Bercerai)' ? 'selected' : '' }}>Duda (Bercerai)</option>
                        <option value="Janda(Kematian Suami)" {{ old('status', $pasangan->status) == 'Janda(Kematian Suami)' ? 'selected' : '' }}>Janda (Kematian Suami)</option>
                        <option value="Janda(Bercerai)" {{ old('status', $pasangan->status) == 'Janda(Bercerai)' ? 'selected' : '' }}>Janda (Bercerai)</option>
                </select></td>
                <th>Keadaan Mental</th>
                <td><select class="form-control" name="mental" id="mental">
                        <option selected disabled>Sila Pilih</option>
                        <option value="Waras" {{ old('mental', $pasangan->mental) == 'Waras' ? 'selected' : '' }}>Waras</option>
                        <option value="Tidak Waras" {{ old('mental', $pasangan->mental) == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
                    </select></td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <td><select class="form-control" name="islam" id="islam">
                        <option selected disabled>Sila Pilih</option>
                        <option value="Baik" {{ old('islam', $pasangan->islam) == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Kurang Baik" {{ old('islam', $pasangan->islam) == 'Kurang Baik' ? 'selected' : '' }}>Kurang Baik</option>
                    </select></td>
                <th>Keadaan Fizikal</th>
                <td><select class="form-control" name="fizikal" id="fizikal">
                    <option selected disabled>Sila Pilih</option>
                        <option value="Sihat" {{ old('fizikal', $pasangan->fizikal) == 'Sihat' ? 'selected' : '' }}>Sihat</option>
                        <option value="Sakit" {{ old('fizikal', $pasangan->fizikal) == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                        <option value="OKU" {{ old('fizikal', $pasangan->fizikal) == 'OKU' ? 'selected' : '' }}>OKU</option>
                    </select></td>
            </tr><tr>
                <th rowspan="2">Alamat</th> 
                <td rowspan="2">
                    <input class="form-control" type="text" name="alamat" value="{{ old('alamat', $pasangan->alamat) }}" style="text-transform: uppercase;" size="50" required><br>
                    <input type="text" name="poskod" id="poskod" value="{{ old('poskod', $pasangan->poskod) }}" style="text-transform: uppercase;" class="form-control" required><br>
                    <input type="text" name="bandar" id="bandar" value="{{ old('bandar', $pasangan->bandar) }}" style="text-transform: uppercase;" class="form-control" required>
                </td>
                <th>No. Tel 1</th>
                <td><input class="form-control" type="text" name="nombor_rumah" id="nombor_rumah" value="{{ old('nombor_rumah', $pasangan->nombor_rumah) }}"></td>
            </tr><tr>
                <th>No. Tel 2</th>
                <td><input class="form-control" type="text" name="nombor_bimbit" id="nombor_bimbit" value="{{ old('nombor_bimbit', $pasangan->nombor_bimbit) }}"></td>
            </tr>
            <tr>
                <td colspan="4"><a href="{{ route('pemohon.details', ['id' => $pasangan->maklumat_pemohon_id]) }}"><button type="button" class="btn btn-secondary">Batal</button></a><input type="submit" class="btn btn-primary" value="Simpan">
                </td>    
            </tr>        
        </tbody> 
    </table>     
</form>
</div>
</main>
</body>
<script>
    document.addEventListener('input', function (event) {
        if (event.target.matches('#alamat, #poskod, #bandar')) {
            event.target.value = event.target.value.toUpperCase();
        }
    });
</script>