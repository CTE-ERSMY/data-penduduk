@include('header2')
    <table class="table table-striped">
        @if ($pendapatan)
        <h5>PENDAPATAN PEMOHON</h5>
        <tbody>
            <tr>
                <th>Jawatan</th>
                <td>RM {{ $pendapatan->jawatan }} </td>
            </tr><tr>
                <th>Gaji</th>
                <td>RM {{ $pendapatan->gaji}}</td>
            </tr><tr>
                <th>Majikan</th>
                <td>RM {{ $pendapatan->majikan }}</td>
            </tbody>
    </table>
    <br><br>
    <table class="table table-striped">
        <h5>PENDAPATAN PASANGAN</h5>
        <tbody>
            <tr>
                <th>Jawatan</th>
                <td>RM {{ $pendapatan->jawatan_psgn}}</td>
            </tr><tr>
                <th>Gaji</th>
                <td>RM {{ $pendapatan->gaji_psgn}}</td>
            </tr><tr>
                <th>Majikan</th>
                <td>RM {{ $pendapatan->majikan_psgn}}</td>
            </tbody>
        </tbody>
    </table>
    <br><br>
    <table class="table table-striped">
        <h5>PENDAPATAN DAN LAIN-LAIN SUMBANGAN</h5>
        <tbody>
            <tr>
                <th>Pendapatan Pemohon</th>
                <td>RM {{ $pendapatan->gaji}}</td>
            </tr><tr>
                <th>Pendapatan Pasangan</th>
                <td>RM {{ $pendapatan->gaji_psgn}}</td>
            </tr><tr>
                <th>Sumbangan Anak</th>
                <td>RM {{ $pendapatan->sumbangan_anak}}</td>
            </tr><tr>
                <th>Sumbangan Saudara Mara</th>
                <td>RM {{ $pendapatan->sumbangan_saudara}}</td>
            </tr><tr>
                <th>Pendapatan Sampingan</th>
                <td>RM {{ $pendapatan->sampingan}}</td>
            </tr><tr>
                <th>Sumbangan Agensi</th>
                <td>RM {{ $pendapatan->sumbangan_agensi}}</td>
            </tr><tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr><tr>
                <th>JUMLAH KESULURUHAN</th>
                <td>RM {{ $pendapatan->gaji + $pendapatan->gaji_psgn + $pendapatan->sumbangan_anak + $pendapatan->sumbangan_saudara - $pendapatan->sampingan - $pendapatan->sumbangan_agensi }}</td>
            </tr>    
        </tbody> 
    </table>
    <center><h4><a href="{{ route('pendapatan.Eview', ['id' => $pendapatan->id]) }}">Edit Pendapatan</a></h4></center>
    <br>
    <table class="table table-striped">
        <h5>PENDAPATAN ISI RUMAH</h5>
        <tbody>
            <tr>
                <th>Makan / Minum</th>
                <td>RM {{ $perbelanjaan->makan}}</td>
            </tr><tr>
                <th>Perubatan</th>
                <td>RM {{ $perbelanjaan->perubatan}}</td>
            </tr><tr>
                <th>Bil TNB / SAJ</th>
                <td>RM {{ $perbelanjaan->bil}}</td>
            </tr><tr>
                <th>Pengangkutan</th>
                <td>RM {{ $perbelanjaan->pengangkutan}}</td>
            </tr><tr>
                <th>Sewa Rumah</th>
                <td>RM {{ $perbelanjaan->sewa_rumah}}</td>
            </tr><tr>
                <th>Persekolahan</th>
                <td>RM {{ $perbelanjaan->persekolahan}}</td>
            </tr><tr>
                <th>Lain-lain</th>
                <td>RM {{ $perbelanjaan->lain}}</td> 
            </tr><tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr><tr>
                <th>JUMLAH PERBELANJAAN</th>
                <td>RM {{ $perbelanjaan->makan + $perbelanjaan->perubatan + $perbelanjaan->bil + $perbelanjaan->sewa_rumah + $perbelanjaan->pengangkutan + $perbelanjaan->persekolahan + $perbelanjaan->lain}} </td>
            </tr>    
        </tbody> 
    </table>
    <center><h4><a href="{{ route('perbelanjaan.Eview', ['id' => $perbelanjaan->id]) }}">Edit Pemohon</a></h4></center>
    @else
            <p>Tiada maklumat kewangan pemohon</p>
        @endif
<br><br>
</div>
</main>
