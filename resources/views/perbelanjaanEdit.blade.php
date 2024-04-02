@include('header2a')
<body>
    <main class="main">
    <div class="container">
        <h5>PERBELANJAAN ISI RUMAH</h5>
    <form action="{{ route('perbelanjaan.edit', ['id' => $perbelanjaan->id])}}" method="POST">
    <table class="table table-striped">
        @csrf
        <tbody>
            <tr>
                <th>Makan / Minum</th>
                <td>RM:<input type="number" value="{{ old('makan', $perbelanjaan->makan) }}" class="form-control" name="makan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Perubatan</th>
                <td>RM:<input type="number" value="{{ old('perubatan', $perbelanjaan->perubatan) }}" class="form-control" name="perubatan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Bil TNB / SAJ</th>
                <td>RM:<input type="number" value="{{ old('bil', $perbelanjaan->bil) }}" class="form-control" name="bil" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Pengangkutan</th>
                <td>RM:<input type="number" value="{{ old('pengangkutan', $perbelanjaan->pengangkutan) }}" class="form-control" name="pengangkutan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Sewa Rumah</th>
                <td>RM:<input type="number" value="{{ old('sewa_rumah', $perbelanjaan->sewa_rumah) }}" class="form-control" name="sewa_rumah" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Persekolahan</th>
                <td>RM:<input type="number" value="{{ old('persekolahan', $perbelanjaan->persekolahan) }}" class="form-control" name="persekolahan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Lain-lain</th>
                <td>RM:<input type="number" value="{{ old('lain', $perbelanjaan->lain) }}" class="form-control" name="lain" step="0.01" min="0" required></td> 
            </tr><tr>
                <td colspan="2" style="text-align: center"><a href="{{ route('kewangan.details', ['id' => $perbelanjaan->maklumat_pemohon_id]) }}"><button type="button" class="btn btn-danger">Batal</button>
                </a><input type="submit" class="btn btn-success" value="Update"></td>
            </tr>   
        </tbody> 
    </table>
</form>     
</div>
</main>
</body>
</html>
