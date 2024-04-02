@include('header3')
<h5>Maklumat Perbelanjaan</h5>
    <form action="{{ route('perbelanjaan.new')}}" method="POST">
    <table class="table table-border">
        @csrf
        @if(isset($pemohonId))
        <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
        @endif
        <h5>PERBELANJAAN ISI RUMAH</h5>
        <tbody>
            <tr>
                <th>Makan / Minum</th>
                <td>RM<input type="number" class="form-control" name="makan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Perubatan</th>
                <td>RM<input type="number" class="form-control" name="perubatan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Bil TNB / SAJ</th>
                <td>RM<input type="number" class="form-control" name="bil" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Pengangkutan</th>
                <td>RM<input type="number" class="form-control" name="pengangkutan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Sewa Rumah</th>
                <td>RM<input type="number" class="form-control" name="sewa_rumah" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Persekolahan</th>
                <td>RM<input type="number" class="form-control" name="persekolahan" step="0.01" min="0" required></td>
            </tr><tr>
                <th>Lain-lain</th>
                <td>RM<input type="number" class="form-control" name="lain" step="0.01" min="0" required></td> 
            </tr><tr>
                <th colspan="3"><center><input type="submit" class="button" value="Seterusnya"></center></th>    
            </tr>   
        </tbody> 
    </table>
</form>     
</div>
</main>
</body>
