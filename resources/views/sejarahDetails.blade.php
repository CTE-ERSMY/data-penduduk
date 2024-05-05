@include('header2')
<header>
    <style>
        th, td{
            width: 12%;
        }
    </style>
</header>
@if ($sejarahBantuan)
<h5>SEJARAH BANTUAN</h5>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nama Bantuan</th>
            <th>No. Akaun</th>
            <th>Tarikh Mohon</th>
            <th>Tarikh Lulus</th>
            <th>Tarikh Mula</th>
            <th>Jumlah Lulus</th>
            <th>Status Bantuan</th>
            <th>Catatan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $sejarahBantuan->nama_bantuan }}<br><a href="{{ asset($sejarahBantuan->file_path) }}" target="_blank">{{ $sejarahBantuan->file_name }}</a></td>
            <td>{{ $sejarahBantuan->no_akaun }}</td>
            <td>{{ $sejarahBantuan->tarikh_mohon }}</td>
            <td>{{ $sejarahBantuan->tarikh_lulus }}</td>
            <td>{{ $sejarahBantuan->tarikh_mula }}</td>
            <td>{{ $sejarahBantuan->jumlah_lulus }}</td>
            <td>{{ $sejarahBantuan->status_bantuan }}</td>
            <td>{{ $sejarahBantuan->catatan }}</td>
        </tr>
    </tbody>
</table>
<center><h4><a href="{{ route('sejarah.Eview', ['id' => $sejarahBantuan->id]) }}">Edit Sejarah Bantuan</a></h4></center>
@else
<p>Tiada Maklumat Sejarah Bantuan</p>
@endif
</main>
</body>