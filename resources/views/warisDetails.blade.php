@include('header2')  
@if ($waris->isNotEmpty())
    @php
                $count=1;
            @endphp
<h5>MAKLUMAT TANGGUNGAN</h5>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 5%">Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur (tahun)</th>
            <th>Hubungan</th>
            <th>Sekolah</th>
            <th>Fizikal</th>
            <th>Mental</th>
            <th>Keperluan</th>
        </tr>
    </thead>
    @foreach ($waris as $warisData)
    @if ($warisData->status == 'Sekolah')
    <tbody>
            <tr>
                <td style="width: 5%">{{ $count++ }} </td>
                <td>{{ $warisData->nama }}</td>
                <td>{{ $warisData->ic }} </td>
                <td>{{ $warisData->umur }} </td>
                <td>{{ $warisData->hubungan }} </td>
                <td>{{ $warisData->kerja }} </td>
                <td>{{ $warisData->fizikal }} </td>
                <td>{{ $warisData->mental }} </td>
                <td>{{ $warisData->pendapatan }} </td>
                <td><a href="{{ route('waris.Eview', $warisData->id) }}"><button type="button" class="btn btn-info">Edit</button></a></td>
            </tr>       
            @endif
        @endforeach     
    </tbody>
</table>
<br>
@php
$count2=1;
@endphp
<h5>MAKLUMAT WARIS</h5>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 5%">Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur (tahun)</th>
            <th>Hubungan</th>
            <th>Pekerjaan</th>
            <th>Fizikal</th>
            <th>Mental</th>
            <th>Pendapatan</th>
        </tr>
    </thead>
    @foreach ($waris as $warisData)
    @if ($warisData->status == 'Bekerja' || $warisData->status == 'Tidak Bekerja')
    <tbody>
            <tr>
                <td style="width: 5%">{{ $count2++ }} </td>
                <td>{{ $warisData->nama }}</td>
                <td>{{ $warisData->ic }} </td>
                <td>{{ $warisData->umur }} </td>
                <td>{{ $warisData->hubungan }} </td>
                <td>{{ $warisData->kerja }} </td>
                <td>{{ $warisData->fizikal }} </td>
                <td>{{ $warisData->mental }} </td>
                <td>{{ $warisData->pendapatan }} </td>
                <td><a href="{{ route('waris.Eview', $warisData->id) }}"><button class="btn btn-info">Edit</button></a></td>
            </tr>        
            @endif  
        @endforeach
    </tbody>
</table> 
@else
    <p>Tiada maklumat waris</p>
@endif
</div>
</body>
</html>
