@include('header3')
<header>
    <style>
        th, td {
            width: 20%;
        }
    </style>
</header>
<h5>Tanggungan dan Waris</h5>
<form action="{{route('newWaris.new')}}" method="POST">
@csrf
    @if(isset($pemohonId))
        <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
     @endif

     <table class="table table-border">
        <tr>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur</th>
            <th>Hubungan</th>
            <th>Status</th>
        </tr>
        <tr>
            <td><input type="text" name="nama" id="nama" class="form-control" required></td>
            <td><input type="text" name="ic" id="ic" maxlength="12" class="form-control" required></td>
            <td class="small"><input type="number" name="umur" id="umur" min="0" class="form-control" required></td>
            <td>
                <select name="hubungan" class="form-control" id="hubungan" required>
                    <option selected disabled>Sila Pilih</option>
                    <option value="Anak">Anak</option>
                    <option value="Anak Tiri">Anak Tiri</option>    
                    <option value="Anak Angkat">Anak Angkat</option>
                    <option value="Anak Saudara">Anak Saudara</option>
                    <option value="Isteri 1">Isteri 1</option>
                    <option value="Isteri 2">Isteri 2</option>
                    <option value="Isteri 3">Isteri 3</option>
                    <option value="Isteri 4">Isteri 4</option>
                </select>
            </td>
            <td>
                <select name="status" class="form-control" id="status" required>
                    <option selected disabled>Sila Pilih</option>
                    <option value="Sekolah">Sekolah</option>   
                    <option value="Bekerja">Bekerja</option>
                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                </select>
            </td>
        <tr>
            <th>Pekerjaan/Tahap Pendidikan</th>
            <th>Fizikal</th>
            <th>Mental</th>
            <th>Pendapatan/Keperluan</th>
        </tr>
              <td><input type="text" name="kerja" id="kerja" class="form-control" required></td>
              <td><select name="fizikal" class="form-control" id="fizikal" required>
                <option value="Sihat">Sihat</option>
                <option value="Sakit">Sakit</option>    
                <option value="OKU">OKU</option>
                </select></td>
              <td><select name="mental" class="form-control" id="mental" required>
                <option value="Waras">Waras</option>    
                <option value="Tidak Waras">Tidak Waras</option>
                </select></td>
              <td><input type="number" name="pendapatan" id="pendapatan" class="form-control" required></td>
              <td><input type="submit" value="+" class="btn btn-success"></td>  
        </tr>
    </table>
</form>
    <form id="redirectForm" action="{{ route('newHarta.view') }}" method="GET">
        @csrf
        @if($pemohonId)
        <input type="hidden" name="pemohonId" value="{{ $pemohonId }}">
     @endif
    </form>
    <center><button id="redirectToHarta" class="btn btn-success">Lanjut</button></center>

@if(isset($allWarisData) && count($allWarisData) > 0)
        <h5>Entered Data</h5>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>No. Kad Pengenalan</th>
                <th>Umur</th>
                <th>Hubungan</th>
                <th>Status</th>
                <th>Pekerjaan/Tahap P.</th>
                <th>Fizikal</th>
                <th>Mental</th>
                <th>Pendapatan/Keperluan</th>
            </tr>
            @foreach($allWarisData as $warisData)
                <tr>
                    <td>{{ $warisData['nama'] }}</td>
                    <td>{{ $warisData['ic'] }}</td>
                    <td>{{ $warisData['umur'] }}</td>
                    <td>{{ $warisData['hubungan'] }}</td>
                    <td>{{ $warisData['status'] }}</td>
                    <td>{{ $warisData['kerja'] }}</td>
                    <td>{{ $warisData['fizikal'] }}</td>
                    <td>{{ $warisData['mental'] }}</td>
                    <td>{{ $warisData['pendapatan'] }}</td>
                </tr>
            @endforeach
        </table>
    @endif

</main>
<script>
    document.getElementById('redirectToHarta').addEventListener('click', function() {
        document.getElementById('redirectForm').submit();
    });
</script>