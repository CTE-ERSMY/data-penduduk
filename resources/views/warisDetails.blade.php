@include('header2')  
<br>
<button class="btn btn-primary" style="width:fit-content" data-bs-toggle="modal" data-bs-target="#addWarisModal">+ Waris dan Tanggungan</button><br><br>
<h5>MAKLUMAT TANGGUNGAN</h5>
@if ($waris->isNotEmpty())
    @php
                $count=1;
            @endphp

<div class="table-responsive">
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 5%">Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur (tahun)</th>
            <th>Hubungan</th>
            <th>Sekolah</th>
            <th>Tinggal Bersama/Tidak</th>
            <th>Fizikal</th>
            <th>Mental</th>
            <th>Keperluan</th>
        </tr>
    </thead>
    @foreach ($waris as $warisData)
    @if ($warisData->status == 'Sekolah' || $warisData->status == 'IPTA/S')
    <tbody>
            <tr>
                <td style="width: 5%">{{ $count++ }} </td>
                <td>{{ $warisData->nama }}</td>
                <td>{{ $warisData->ic }} </td>
                <td>{{ $warisData->umur }} </td>
                <td>{{ $warisData->hubungan }} </td>
                <td>{{ $warisData->kerja }} </td>
                <td>{{ $warisData->serumah }} </td>
                <td>{{ $warisData->fizikal }} </td>
                <td>{{ $warisData->mental }} </td>
                <td>{{ $warisData->pendapatan }} </td>
                <td><a href="{{ route('waris.Eview', $warisData->id) }}"><button type="button" class="btn btn-info">Edit</button></a></td>
            </tr>       
            @endif
        @endforeach     
    </tbody>
</table>
</div>
<br>
@php
$count2=1;
@endphp
<h5>MAKLUMAT WARIS</h5>
<br>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 5%">Bil</th>
            <th>Nama</th>
            <th>No. Kad Pengenalan</th>
            <th>Umur (tahun)</th>
            <th>Hubungan</th>
            <th>Pekerjaan</th>
            <th>Tinggal Bersama/Tidak</th>
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
                <td>{{ $warisData->serumah }} </td>
                <td>{{ $warisData->fizikal }} </td>
                <td>{{ $warisData->mental }} </td>
                <td>{{ $warisData->pendapatan }} </td>
                <td><a href="{{ route('waris.Eview', $warisData->id) }}"><button class="btn btn-info">Edit</button></a></td>
            </tr>        
            @endif  
        @endforeach
    </tbody>
</table>
</div>
@else
    <p>Tiada maklumat waris</p>
@endif
</div>
<div class="modal fade" id="addWarisModal" tabindex="-1" aria-labelledby="addWarisModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addWarisModalLabel">Tambah Maklumat Waris dan Tanggungan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for adding MaklumatPasangan -->
                <form action="{{ route('newWaris.new') }}" method="POST">
                    @csrf
                    <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohon->id }}">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="ic" class="form-label">No. Kad Pengenalan</label>
                        <input type="text" class="form-control" id="icInput" name="ic" maxlength="12" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" name="umur" id="ageOutput" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="hubungan" class="form-label">Hubungan</label>
                        <select name="hubungan" class="form-control" id="hubungan" required>
                            <option value="" selected disabled>Sila Pilih</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Bapa">Bapa</option>
                            <option value="Datuk">Datuk</option>
                            <option value="Nenek">Nenek</option>
                            <option value="Cucu">Cucu</option>
                            <option value="Anak">Anak</option>
                            <option value="Adik Beradik">Adik Beradik</option>
                            <option value="Anak Tiri">Anak Tiri</option>    
                            <option value="Anak Angkat">Anak Angkat</option>
                            <option value="Anak Saudara">Anak Saudara</option>
                            <option value="Isteri 1">Isteri 1</option>
                            <option value="Isteri 2">Isteri 2</option>
                            <option value="Isteri 3">Isteri 3</option>
                            <option value="Isteri 4">Isteri 4</option>
                            <option value="Lain - lain">Lain - lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status </label>
                        <select name="status" class="form-control" id="status" required>
                            <option value="" selected disabled>Sila Pilih</option>
                            <option value="Masih kecil">Masih kecil</option>   
                            <option value="Sekolah">Sekolah</option>   
                            <option value="IPTA/S">IPTA/S</option>
                            <option value="Bekerja">Bekerja</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mental" class="form-label">Keadaan Mental</label>
                        <select name="mental" id="mental" class="form-control">
                            <option selected disabled>Sila Pilih</option>
                            <option value="Waras">Waras</option>
                            <option value="Tidak Waras">Tidak Waras</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fizikal" class="form-label">Keadaan Fizikal</label>
                        <select name="fizikal" id="fizikal" class="form-control">
                            <option selected disabled>Sila Pilih</option>
                                <option value="Sihat">Sihat</option>
                                <option value="Sakit">Sakit</option>
                                <option value="OKU">OKU</option>
                                <option value="Terlantar">Terlantar</option>
                            </select>
                    </div>

                    <div class="mb-3">
                        <label for="serumah" class="form-label">Tinggal Bersama/Tidak</label>
                        <select name="serumah" id="serumah" class="form-control">
                            <option value="Tinggal bersama">Tinggal bersama</option>
                            <option value="Tinggal berasingan">Tinggal berasingan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kerja" class="form-label">Pekerjaan / Tahap Pendidikan</label>
                        <input type="text" class="form-control" id="kerja" name="kerja">
                    </div>
                    <div class="mb-3">
                        <label for="pendapatan" class="form-label">Pendapatan</label>
                        <input type="number" class="form-control" id="pendapatan" value="0" name="pendapatan" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const icInput = document.getElementById('icInput');
    const ageOutput = document.getElementById('ageOutput');

    icInput.addEventListener('input', function () {
        const icValue = icInput.value;

        if (icValue.length >= 6) {
            const birthDate = icValue.substring(0, 6); // Extract YYMMDD
            const year = parseInt(birthDate.substring(0, 2));
            const month = parseInt(birthDate.substring(2, 4)) - 1; // JavaScript months are 0-based
            const day = parseInt(birthDate.substring(4, 6));

            const fullYear = year > 40 ? 1900 + year : 2000 + year; // Assume 1900s for >50, 2000s otherwise
            const birthDateObj = new Date(fullYear, month, day);

            const today = new Date();
            let age = today.getFullYear() - birthDateObj.getFullYear();
            const m = today.getMonth() - birthDateObj.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDateObj.getDate())) {
                age--;
            }

            ageOutput.value = age;
        } else {
            ageOutput.value = ''; // Clear age if IC is not valid
        }
    });
});
    </script>
</html>
