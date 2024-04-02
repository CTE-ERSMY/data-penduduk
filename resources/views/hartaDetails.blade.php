@include('header2')
<table class="table table-striped">
    @if ($harta)
    <h5>Maklumat Kediaman Pemohon</h5>
    <tbody>
        <tr>
            <th>Status Kediaman</th>
            <td>{{ $harta->status_kediaman }} </td>
        </tr><tr>
            <th>Jenis Kediaman</th>
            <td>{{ $harta->jenis_kediaman }}</td>
        </tr><tr>
            <th>Kemudahan</th>
            <td>{{ $harta->kemudahan}}</td>
        </tr><tr>
            <th>Kemudahan Tambahan</th>
            <td>{{ $harta->kemudahan_tambahan }}</td>
        </tr><tr>
            <th>Anggaran Nilai Semasa Kediaman</th>
            <td>RM {{ $harta->nilai_kediaman }}</td>
        </tr><tr>
            <th>Bayaran Bulanan</th>
            <td>RM {{ $harta->bulanan}}</td>
        </tr></tbody>
    </table>
        
        <table class="table table-striped">
            <h5>Maklumat Harta Pemohon</h5>
            <tbody>
        <tr>
            <th>Rumah (unit)</th>
            <td>{{ $harta->rumah}}</td>
        </tr><tr>
            <th>Nilai Rumah</th>
            <td>RM {{ $harta->nilai_rumah}}</td>
        </tr><tr>
            <th>Tanah (ekar)</th>
            <td>{{ $harta->tanah}}</td>
        </tr><tr>
            <th>Nilai Tanah</th>
            <td>RM {{ $harta->nilai_tanah}}</td>
        </tr><tr>
            <th>Kenderaan</th>
            <td>{{ $harta->Kenderaan}}</td>
        </tr><tr>
            <th>Nilai Kenderaan</th>
            <td>RM {{ $harta->nilai_kenderaan}}</td>
        </tr><tr>
            <th>Astro</th>
            <td>{{ $harta->nilai_kenderaan}}</td>
        </tr><tr>
            <th>Nilai Astro</th>
            <td>RM {{ $harta->nilai_astro}}</td>
        </tr><tr>
            <th>Nilai Barang Kemas</th>
            <td>RM {{ $harta->nilai_barang_kemas}}</td>
        </tr><tr>
            <th>Nilai Simpanan</th>
            <td>RM {{ $harta->nilai_simpanan}}</td>
        </tr><tr>
            <th>Lain-lain</th>
            <td>RM {{ $harta->lain}}</td>
        </tr><tr>
            <th>Nilai lain-lain</th>
            <td>RM {{ $harta->nilai_lain}}</td>
        </tr>
        </tbody>
</table>
<center><h4><a href="{{ route('harta.Eview', ['id' => $harta->id]) }}">Edit Harta</a></h4></center>
@else
        <p>Tiada maklumat kewangan pemohon</p>
    @endif
</main>