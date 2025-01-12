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
            <td><input type="text" name="ic" class="form-control" value="{{$waris->ic}}" maxlength="12" required></td>
        </tr><tr>
            <th>Umur</th>
            <td><input type="number" name="umur" class="form-control" value="{{$waris->umur}}" min="0" required></td>
        </tr><tr>
            <th>Hubungan</th>
            <td><select name="hubungan" class="form-control" id="hubungan" required>
                <option value="Anak" {{$waris->hubungan == 'Anak' ? 'selected' : ''}}>Anak</option>
                <option value="Anak Tiri" {{$waris->hubungan == 'Anak Tiri' ? 'selected' : ''}}>Anak Tiri</option>    
                <option value="Anak Angkat" {{$waris->hubungan == 'Anak Angkat' ? 'selected' : ''}}>Anak Angkat</option>
                <option value="Anak Saudara" {{$waris->hubungan == 'Anak Saudara' ? 'selected' : ''}}>Anak Saudara</option>
                <option value="Isteri 1" {{$waris->hubungan == 'Isteri 1' ? 'selected' : ''}}>Isteri 1</option>
                <option value="Isteri 2" {{$waris->hubungan == 'Isteri 2' ? 'selected' : ''}}>Isteri 2</option>
                <option value="Isteri 3" {{$waris->hubungan == 'Isteri 3' ? 'selected' : ''}}>Isteri 3</option>
                <option value="Isteri 4" {{$waris->hubungan == 'Isteri 4' ? 'selected' : ''}}>Isteri 4</option>
            </select></td>
        </tr><tr>
            <th>Status</th>
            <td><select name="status" class="form-control" required>
                <option value="">Select Status</option>
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
                </select></td>
        </tr><tr>
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
</html>