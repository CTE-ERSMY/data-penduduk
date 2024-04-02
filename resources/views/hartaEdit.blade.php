@include('header2a')
<main class="main">
    <div class="container">
        <h5>MAKLUMAT HARTA PEMOHON</h5>
        <form action="{{route('harta.edit', ['id' => $harta->id])}}" method="POST">
            @csrf
            <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Status Kediaman</th>
                    <td><input type="text"value="{{ old('status_kediaman', $harta->status_kediaman)}}" name="status_kediaman" class="form-control"></td>
                </tr><tr>
                    <th>Jenis Kediaman</th>
                    <td><input type="text" value="{{ old('jenis_kediaman', $harta->jenis_kediaman)}}" name="jenis_kediaman" class="form-control"></td>
                </tr><tr>
                    <th>Kemudahan Asas</th>
                    <td><input type="text" value="{{ old('kemudahan', $harta->kemudahan)}}" name="kemudahan" class="form-control"></td>
                </tr><tr>
                    <th>Kuantiti Bilik</th>
                    <td><input type="number" value="{{ old('bilik', $harta->bilik)}}" name="bilik" class="date form-control"></td>
                </tr><tr>
                    <th>Kemudahan Tambahan</th>
                    <td><input type="text" value="{{ old('kemudahan_tambahan', $harta->kemudahan_tambahan)}}" name="kemudahan_tambahan" class="form-control"></td>
                </tr><tr>
                    <th>Anggaran Nilai Semasa Kediaman</th>
                    <td> <input type="number" value="{{ old('nilai_kediaman', $harta->nilai_kediaman)}}" name="nilai_kediaman" class="form-control"></td>
                </tr><tr>
                    <th>Bayaran Bulanan</th>
                    <td><input type="number" value="{{ old('bulanan', $harta->bulanan)}}" name="bulanan" class="form-control"></td> 
                </tr>
            </tbody> 
        </table>
        <table class="table table-border">
            <h5>Maklumat Harta Pemohon</h5>
            <tbody>
                <tr>
                    <th>Rumah (unit)</th>
                    <td><input type="number" value="{{ old('rumah', $harta->rumah)}}" name="rumah" class="form-control"></td>
                </tr><tr>
                    <th>Nilai Rumah</th>
                    <td><input type="number" value="{{ old('nilai_rumah', $harta->nilai_rumah)}}" name="nilai_rumah" class="form-control"></td>
                </tr><tr>
                    <th>Tanah (ekar)</th>
                    <td><input type="number" value="{{ old('tanah', $harta->tanah)}}" name="tanah" class="form-control"></td>
                </tr><tr>
                    <th>Nilai Tanah</th>
                    <td><input type="number" value="{{ old('nilai_tanah', $harta->nilai_tanah)}}" name="nilai_tanah" class="form-control"></td>
                </tr><tr>
                    <th>Kenderaan (unit)</th>
                    <td><input type="number" value="{{ old('kenderaan', $harta->kenderaan)}}" name="kenderaan" class="form-control"></td>
                </tr><tr>
                    <th>Nilai Kenderaan</th>
                    <td><input type="number" value="{{ old('nilai_kenderaan', $harta->nilai_kenderaan)}}" name="nilai_kenderaan" class="form-control"></td>
                </tr><tr>
                    <th>Astro</th>
                    <td><input type="text" name="astro" value="{{ old('astro', $harta->astro)}}" class="form-control"></td> 
                </tr><tr>
                </tr><tr>
                    <th>Nilai Bayaran Astro</th>
                    <td><input type="number" value="{{ old('nilai_astro', $harta->nilai_astro)}}" min="0" name="nilai_astro" class="form-control"></td> 
                </tr><tr>
                </tr><tr>
                    <th>Nilai Barang Kemas</th>
                    <td><input type="number" min="0" value="{{ old('nilai_barang_kemas', $harta->nilai_barang_kemas)}}" name="nilai_barang_kemas" class="form-control"></td> 
                </tr><tr>
                </tr><tr>
                    <th>Nilai Wang Simpanan</th>
                    <td><input type="number" value="{{ old('nilai_simpanan', $harta->nilai_simpanan)}}" min="0" name="nilai_simpanan" class="form-control"></td> 
                </tr><tr>
                </tr><tr>
                    <th>Lain - lain</th>
                    <td><input type="text" value="{{ old('lain', $harta->lain)}}" name="lain" class="form-control"></td> 
                </tr><tr>
                </tr><tr>
                    <th>Nilai Lain - lain</th>
                    <td><input type="number" value="{{ old('nilai_lain', $harta->nilai_lain)}}" min="0" name="nilai_lain" class="form-control"></td> 
                </tr><tr>
    
                    <td colspan="2" style="text-align: center"><a href="{{ route('harta.details', ['id' => $harta->maklumat_pemohon_id]) }}"><button type="button" class="btn btn-danger">Batal</button></a><input type="submit" class="btn btn-success" value="Edit"></td>    
                </tr>   
            </tbody> 
        </table>
    
        </table>
        </form>
    </div>
</main>