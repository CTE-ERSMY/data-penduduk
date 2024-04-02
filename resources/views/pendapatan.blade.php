@include('header3')
    <h5>Maklumat Pendapatan</h5>
    <form action="{{ route('pendapatan.new')}}" method="POST">
        @csrf
        @if(isset($pemohonId))
            <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
            @endif
        
        <table class="table table-border">
            <h5>PENDAPATAN PEMOHON</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <td><input type="text" class="form-control" name="jawatan"required></td>
                </tr><tr>
                    <th>Gaji</th>
                    <td>RM<input type="number" class="form-control" name="gaji" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <td><input type="text" class="form-control" name="majikan"></td>
                </tbody>
        </table>
        <br><br>
        <table class="table table-border">
            <h5>PENDAPATAN PASANGAN</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <td><input type="text" class="form-control" name="jawatan_psgn"></td>
                </tr><tr>
                    <th>Gaji</th>
                    <td>RM<input type="number" class="form-control" name="gaji_psgn" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <td><input type="text" class="form-control" name="majikan_psgn"></td>
                </tbody>
            </tbody>
        </table>
        <br><br>
        <table class="table table-border">
            <h5>PENDAPATAN DAN LAIN-LAIN SUMBANGAN</h5>
            <tbody>
                <tr>
                    <th>Sumbangan Anak</th>
                    <td>RM<input type="number" class="form-control" name="sumbangan_anak" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Saudara Mara</th>
                    <td>RM<input type="number" class="form-control" name="sumbangan_saudara" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Pendapatan Sampingan</th>
                    <td>RM<input type="number" class="form-control" name="sampingan" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Agensi</th>
                    <td>RM<input type="number" class="form-control" name="sumbangan_agensi" step="0.01" min="0" required></td>
                </tr><tr>
                    <th colspan="3"><center><input type="submit" class="button" value="Seterusnya"></center></th>
                </tr> 
            </tbody> 
        </table>
    </form>
</div>
</body>
</html>