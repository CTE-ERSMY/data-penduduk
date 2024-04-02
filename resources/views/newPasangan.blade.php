@include('header3')
    <h5>MAKLUMAT PASANGAN</h5>
        <form action="{{ route('newPasangan.new')}}" method="POST">
            @csrf
             @if(isset($pemohonId))
            <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
            @endif
            <table class="table table-border">
            <tbody>
                <tr>
                    <th>Nama Pemohon</th>
                    <td><input type="text" name="nama" placeholder="Nama Penuh" class="form-control" required></td>
                    <th>No. Kad Pengenalan</th>
                    <td><input type="text" name="ic" placeholder="12345601XXXX" class="form-control" maxlength="12" required></td>
                </tr><tr>
                    <th>Jantina</th>
                    <td><select name="jantina" id="jantina" class="form-control" required>
                            <option selected disabled>Pilih Jantina</option>
                            <option value="Lelaki">Lelaki</option>
                            <option value="Wanita">Wanita</option>
                        </select></td>
                    <th>Tarikh Lahir</th>
                    <td><input type="date" name="tarikh_lahir" id="tarikh_lahir" class="form-control" required></td>
                </tr><tr>
                    <th>Status Perkahwinan</th>
                    <td><select name="status" id="status" class="form-control" required>
                            <option selected disabled>Pilih status</option>
                            <option value="Kahwin">Kahwin</option>
                            <option value="Bujang">Bujang</option>    
                            <option value="Duda(Kematian Isteri)">Duda (Kematian Isteri)</option>
                            <option value="Duda(Bercerai)">Duda (Bercerai)</option>
                            <option value="Janda(Kematian Suami)">Janda (Kematian Suami)</option>
                            <option value="Janda(Bercerai)">Janda (Bercerai)</option>
                    </select></td>
                    <th>Keadaan Mental</th>
                    <td><select name="mental" id="mental" class="form-control" required>
                            <option selected disabled>Sila Pilih</option>
                            <option value="Waras">Waras</option>
                            <option value="Tidak Waras">Tidak Waras</option>
                        </select></td>
                </tr><tr>
                    <th>Penghayatan Islam</th>
                    <td><select name="islam" id="islam" class="form-control" required>
                            <option selected disabled>Sila Pilih</option>
                            <option value="Baik">Baik</option>
                            <option value="Kurang Baik">Kurang Baik</option>
                        </select></td>
                    <th>Keadaan Fizikal</th>
                    <td><select name="fizikal" id="fizikal" class="form-control" required>
                        <option selected disabled>Sila Pilih</option>
                            <option value="Sihat">Sihat</option>
                            <option value="Sakit">Sakit</option>
                            <option value="OKU">OKU</option>
                        </select></td>
                </tr><tr>
                    <th rowspan="2">Alamat</th>
                    <td rowspan="2">
                        <input type="text" name="alamat" class="form-control" placeholder="lot 1234, jalan xxxxxx, Felda Sg Mas" size="50" required><br>
                        <select name="poskod" class="form-control" id="poskod">
                            <option selected value="81900" class="form-control" required>81900</option>
                        </select><br>
                        <select name="bandar" class="form-control" id="bandar">
                            <option selected value="Kota Tinggi">Kota Tinggi</option>
                        </select>
                    </td>
                    <th>No. Telefon Rumah</th>
                    <td><input type="text" name="nombor_rumah" class="form-control" id="nombor_rumah" placeholder="tiada(-), 0XXXXXXXX"></td>
                </tr><tr>
                    <th>No. Telefon Bimbit</th>
                    <td><input type="text" name="nombor_bimbit" class="form-control" id="nombor_bimbit" placeholder="tiada(-), 01XXXXXXXXX" required></td>
                </tr>
                <tr>
                    <th colspan="6"><center><input type="submit" class="btn btn-success" value="Seterusnya"></center></th>    
                </tr>    
            </tbody>    
        </table>
        </form>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
        </div>
    </div>
</body>
