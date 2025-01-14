@include('header2')
<header>
    <style>
        th, td{
            width: 12%;
        }
    </style>
</header>
<br>
<a href="{{route('sejarahBantuan.view', ['pemohonId' => $pemohon->id])}}"><button class="btn btn-primary" style="width: fit-content">+ Sejarah Bantuan</button></a><br><br>
<main>
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
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sejarahBantuan as $bantuan)
        <tr>
            <td>{{ $bantuan->nama_bantuan }}<br><a href="{{ asset($bantuan->file_path) }}" target="_blank">{{ $bantuan->file_name }}</a></td>
            <td>{{ $bantuan->no_akaun }}</td>
            <td>{{ $bantuan->tarikh_mohon }}</td>
            <td>{{ $bantuan->tarikh_lulus }}</td>
            <td>{{ $bantuan->tarikh_mula }}</td>
            <td>{{ $bantuan->jumlah_lulus }}</td>
            <td>{{ $bantuan->status_bantuan }}</td>
            <td>{{ $bantuan->catatan }}</td>
            <td><a href="{{ route('sejarah.Eview', ['id' => $bantuan->id]) }}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<center><h4></h4></center>
@else
<p>Tiada Maklumat Sejarah Bantuan</p>
@endif
</main>
</body>