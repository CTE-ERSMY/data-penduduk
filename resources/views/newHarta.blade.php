@include('header3')

    <form action="{{ route('newHarta.new')}}" method="POST">
    <table class="table table-border">
        @csrf
        @if(isset($pemohonId))
        <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
        @endif
        <h5>Maklumat Kediaman Pemohon</h5>
        <tbody>
            <tr>
                <th>Status Kediaman</th>
                <td><input type="text" value="{{ old('status_kediaman')}}" name="status_kediaman" class="form-control"></td>
            </tr><tr>
                <th>Jenis Kediaman</th>
                <td><input type="text" value="{{ old('jenis_kediaman')}}" name="jenis_kediaman" class="form-control"></td>
            </tr><tr>
                <th>Kemudahan Asas</th>
                <td><input type="text" value="{{ old('kemudahan')}}" name="kemudahan" class="form-control"></td>
            </tr><tr>
                <th>Kuantiti Bilik</th>
                <td><input type="number" value="{{ old('bilik')}}" name="bilik" class="date form-control"></td>
            </tr><tr>
                <th>Kemudahan Tambahan</th>
                <td><input type="text" value="{{ old('kemudahan_tambahan')}}" name="kemudahan_tambahan" class="form-control"></td>
            </tr><tr>
                <th>Anggaran Nilai Semasa Kediaman</th>
                <td> <input type="number" value="{{ old('nilai_kediaman')}}" name="nilai_kediaman" class="form-control"></td>
            </tr><tr>
                <th>Bayaran Bulanan</th>
                <td><input type="number" value="{{ old('bulanan')}}" name="bulanan" class="form-control"></td> 
            </tr>
        </tbody> 
    </table>
    <table class="table table-border">
        <h5>Maklumat Harta Pemohon</h5>
        <tbody>
            <tr>
                <th>Rumah (unit)</th>
                <td><input type="number" value="{{ old('rumah')}}" name="rumah" class="form-control"></td>
            </tr><tr>
                <th>Nilai Rumah</th>
                <td><input type="number" value="{{ old('nilai_rumah')}}" name="nilai_rumah" class="form-control"></td>
            </tr><tr>
                <th>Tanah (ekar)</th>
                <td><input type="number" value="{{ old('tanah')}}" name="tanah" class="form-control"></td>
            </tr><tr>
                <th>Nilai Tanah</th>
                <td><input type="number" value="{{ old('nilai_tanah')}}" name="nilai_tanah" class="form-control"></td>
            </tr><tr>
                <th>Kenderaan (unit)</th>
                <td><input type="number" value="{{ old('kenderaan')}}" name="kenderaan" class="form-control"></td>
            </tr><tr>
                <th>Nilai Kenderaan</th>
                <td><input type="number" value="{{ old('nilai_kenderaan')}}" name="nilai_kenderaan" class="form-control"></td>
            </tr><tr>
                <th>Astro</th>
                <td><input type="text" name="astro" value="{{ old('astro')}}" class="form-control"></td> 
            </tr><tr>
            </tr><tr>
                <th>Nilai Bayaran Astro</th>
                <td><input type="number" value="{{ old('nilai_astro')}}" min="0" name="nilai_astro" class="form-control"></td> 
            </tr><tr>
                <th>Nilai Barang Kemas</th>
                <td><input type="number" min="0" value="{{ old('nilai_barang_kemas')}}" name="nilai_barang_kemas" class="form-control"></td> 
            </tr><tr>
                <th>Nilai Wang Simpanan</th>
                <td><input type="number" value="{{ old('nilai_simpanan')}}" min="0" name="nilai_simpanan" class="form-control"></td> 
            </tr><tr>
                <th>Lain - lain</th>
                <td><input type="text" value="{{ old('lain')}}" name="lain" class="form-control"></td> 
            </tr><tr>
                <th>Nilai Lain - lain</th>
                <td><input type="number" value="{{ old('nilai_lain')}}" min="0" name="nilai_lain" class="form-control"></td> 
            </tr><tr>

                <th colspan="3"><center><input type="submit" class="btn btn-success" value="Lanjut"></center></th>    
            </tr>   
        </tbody> 
    </table>

</form>     
</div>
</main>