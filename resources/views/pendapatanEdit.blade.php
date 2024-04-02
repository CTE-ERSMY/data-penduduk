@include('header2a')
<body>
    <main class="main">
    <div class="container">
        <h5>PENDAPATAN PEMOHON</h5>
    <form action="{{ route('pendapatan.edit', ['id' => $pendapatan->id])}}" method="POST">
        @csrf
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <td><input type="text" value="{{ old('jawatan', $pendapatan->jawatan) }}" class="form-control" name="jawatan"required></td>
                </tr><tr>
                    <th>Gaji</th>
                    <td><input type="number" value="{{ old('gaji', $pendapatan->gaji) }}" class="form-control" name="gaji" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <td><input type="text" value="{{ old('majikan', $pendapatan->majikan) }}" class="form-control" name="majikan"></td>
                </tbody>
        </table>
        <br><br>
        <table class="table table-striped">
            <h5>PENDAPATAN PASANGAN</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <td><input type="text" value="{{ old('jawatan_psgn', $pendapatan->jawatan_psgn) }}" class="form-control" name="jawatan_psgn"></td>
                </tr><tr>
                    <th>Gaji</th>
                    <td><input type="number" value="{{ old('gaji_psgn', $pendapatan->gaji_psgn) }}" class="form-control" name="gaji_psgn" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <td><input type="text" value="{{ old('majikan_psgn', $pendapatan->majikan_psgn) }}" class="form-control" name="majikan_psgn"></td>
                </tbody>
            </tbody>
        </table>
        <br><br>
        <table class="table table-striped">
            <h5>PENDAPATAN DAN LAIN-LAIN SUMBANGAN</h5>
            <tbody>
                <tr>
                    <th>Sumbangan Anak</th>
                    <td><input type="number" value="{{ old('sumbangan_anak', $pendapatan->sumbangan_anak) }}" class="form-control" name="sumbangan_anak" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Saudara Mara</th>
                    <td><input type="number" value="{{ old('sumbangan_saudara', $pendapatan->sumbangan_saudara) }}" class="form-control" name="sumbangan_saudara" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Pendapatan Sampingan</th>
                    <td><input type="number" value="{{ old('sampingan', $pendapatan->sampingan) }}" class="form-control" name="sampingan" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Agensi</th>
                    <td><input type="number" value="{{ old('sumbangan_agensi', $pendapatan->sumbangan_agensi) }}" class="form-control" name="sumbangan_agensi" step="0.01" min="0" required></td>
                </tr><tr>
                    <td colspan="2" style="text-align: center"><a href="{{ route('kewangan.details', ['id' => $pendapatan->maklumat_pemohon_id]) }}"><button type="button" class="btn btn-danger">Batal</button></a>
                    <input type="submit" class="btn btn-success" value="Update"></td>
                </tr> 
            </tbody> 
        </table>
    </form>
</div>
</main>
</body>
</html>