@include('header2a')
<body>
    <main class="main">
    <div class="container">
    <form action="{{route('waris.edit', $waris->id)}}" method="POST">
    @csrf
    @method('PUT')
    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <td><input type="text" name="nama" class="form-control" value="{{$waris->nama}}" required></td>
        </tr><tr>
            <th>No kad. Pengenalan</th>
            <td><input type="text" name="ic" id="icInput" class="form-control" value="{{$waris->ic}}" maxlength="12" required></td>
        </tr><tr>
            <th>Umur</th>
            <td><input type="text" name="umur" id="ageOutput" class="form-control" value="{{$waris->umur}}" min="0" readonly></td>
        </tr><tr>
            <th>Hubungan</th>
            <td><select name="hubungan" class="form-control" id="hubungan" required>
                <option value="Ibu" {{$waris->hubungan == 'Ibu' ? 'selected' : ''}}>Ibu</option>
                <option value="Bapa" {{$waris->hubungan == 'Bapa' ? 'selected' : ''}}>Bapa</option>
                <option value="Datuk" {{$waris->hubungan == 'Datuk' ? 'selected' : ''}}>Datuk</option>
                <option value="Nenek" {{$waris->hubungan == 'Nenek' ? 'selected' : ''}}>Nenek</option>
                <option value="Cucu" {{$waris->hubungan == 'Cucu' ? 'selected' : ''}}>Cucu</option>
                <option value="Adik Beradik" {{$waris->hubungan == 'Adik Beradik' ? 'selected' : ''}}>Adik Beradik</option>
                <option value="Anak" {{$waris->hubungan == 'Anak' ? 'selected' : ''}}>Anak</option>
                <option value="Anak Tiri" {{$waris->hubungan == 'Anak Tiri' ? 'selected' : ''}}>Anak Tiri</option>    
                <option value="Anak Angkat" {{$waris->hubungan == 'Anak Angkat' ? 'selected' : ''}}>Anak Angkat</option>
                <option value="Anak Saudara" {{$waris->hubungan == 'Anak Saudara' ? 'selected' : ''}}>Anak Saudara</option>
                <option value="Isteri 1" {{$waris->hubungan == 'Isteri 1' ? 'selected' : ''}}>Isteri 1</option>
                <option value="Isteri 2" {{$waris->hubungan == 'Isteri 2' ? 'selected' : ''}}>Isteri 2</option>
                <option value="Isteri 3" {{$waris->hubungan == 'Isteri 3' ? 'selected' : ''}}>Isteri 3</option>
                <option value="Isteri 4" {{$waris->hubungan == 'Isteri 4' ? 'selected' : ''}}>Isteri 4</option>
                <option value="Lain - lain" {{$waris->hubungan == 'Lain - lain' ? 'selected' : ''}}>Lain - lain</option>
            </select></td>
        </tr><tr>
            <th>Status</th>
            <td><select name="status" class="form-control" required>
                <option value="">Select Status</option>
                <option value="Masih kecil" {{$waris->status == 'Masih kecil' ? 'selected' : ''}}>Masih kecil</option>
                <option value="Sekolah" {{$waris->status == 'Sekolah' ? 'selected' : ''}}>Sekolah</option>
                <option value="IPTA/S" {{$waris->status == 'IPTA/S' ? 'selected' : ''}}>IPTA/S</option>
                <option value="Bekerja" {{$waris->status == 'Bekerja' ? 'selected' : ''}}>Bekerja</option>
                <option value="Tidak Bekerja" {{$waris->status == 'Tidak Bekerja' ? 'selected' : ''}}>Tidak Bekerja</option>
            </select></td>
        </tr><tr>
            <th>Sekolah/Pekerjaan</th>
            <td><input type="text" name="kerja" class="form-control" value="{{$waris->kerja}}" required></td>
        </tr><tr>
            <th>Fizikal</th>
            <td><select name="fizikal" class="form-control" id="fizikal">
                <option value="Sihat" {{ $waris->fizikal == 'Sihat' ? 'selected' : '' }}>Sihat</option>
                <option value="Sakit" {{ $waris->fizikal == 'Sakit' ? 'selected' : '' }}>Sakit</option>    
                <option value="OKU" {{ $waris->fizikal == 'OKU' ? 'selected' : '' }}>OKU</option>
                <option value="Terlantar" {{ $waris->fizikal == 'Terlantar' ? 'selected' : '' }}>Terlantar</option>
                </select></td>
        </tr><tr>
            <th>Tinggal Bersama/Tidak</th>
            <td><select name="serumah" id="serumah" class="form-control">
                <option value="">sila pilih</option>
                <option value="Tinggal bersama" {{ $waris->serumah == 'Tinggal bersama' ? 'selected' : '' }}>Tinggal bersama</option>    
                <option value="Tinggal berasingan" {{ $waris->serumah == 'Tinggal berasingan' ? 'selected' : '' }}>Tinggal berasingan</option>    
            </select></td>
        </tr>
        <tr>
            <th>Mental</th>
            <td><select name="mental" class="form-control" id="mental">
                <option value="Waras" {{$waris->mental == 'Waras' ? 'selected' : '' }}>Waras</option>    
                <option value="Tidak Waras" {{$waris->mental == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
                </select></td>
        </tr><tr>
            <th>Pendapatan</th>
            <td><input type="number" name="pendapatan" class="form-control" value="{{$waris->pendapatan}}" min="0" required></td>
        </tr>
        <tr>
            <th colspan="2"><a href="{{ route('waris.details', ['id' => $waris->maklumat_pemohon_id]) }}"><button type="button" class="btn btn-danger">Batal</button>
            </a><input type="submit" class="btn btn-success" value="Update"></th>
        </tr>
    </table>
    </form>
</div>
</main>
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