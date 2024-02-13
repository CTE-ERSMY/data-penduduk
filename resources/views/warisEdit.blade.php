<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="{{asset('css/navi.css')}}">
    <title>Sunting Waris</title>
</head>
<body>
    <div class="container">
    <form action="{{route('waris.edit', $waris->id)}}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <td><input type="text" name="nama" value="{{$waris->nama}}" required></td>
        </tr><tr>
            <th>No kad. Pengenalan</th>
            <th>:</th>
            <td><input type="text" name="ic" value="{{$waris->ic}}" maxlength="12" required></td>
        </tr><tr>
            <th>Umur</th>
            <th>:</th>
            <td><input type="number" name="umur" value="{{$waris->umur}}" min="0" required></td>
        </tr><tr>
            <th>Hubungan</th>
            <th>:</th>
            <td><select name="hubungan" id="hubungan" required>
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
            <th>:</th>
            <td><select name="status" required>
                <option value="">Select Status</option>
                <option value="Sekolah" {{$waris->status == 'Sekolah' ? 'selected' : ''}}>Sekolah</option>
                <option value="Bekerja" {{$waris->status == 'Bekerja' ? 'selected' : ''}}>Bekerja</option>
                <option value="Tidak Bekerja" {{$waris->status == 'Tidak Bekerja' ? 'selected' : ''}}>Tidak Bekerja</option>
            </select></td>
        </tr><tr>
            <th>Sekolah/Pekerjaan</th>
            <th>:</th>
            <td><input type="text" name="kerja" value="{{$waris->kerja}}"></td>
        </tr><tr>
            <th>Fizikal</th>
            <th>:</th>
            <td><select name="fizikal" id="fizikal" required>
                <option value="Sihat" {{ $waris->fizikal == 'Sihat' ? 'selected' : '' }}>Sihat</option>
                <option value="Sakit" {{ $waris->fizikal == 'Sakit' ? 'selected' : '' }}>Sakit</option>    
                <option value="OKU" {{ $waris->fizikal == 'OKU' ? 'selected' : '' }}>OKU</option>
                </select></td>
        </tr><tr>
            <th>Mental</th>
            <th>:</th>
            <td><select name="mental" id="mental" required>
                <option value="Waras" {{$waris->mental == 'Waras' ? 'selected' : '' }}>Waras</option>    
                <option value="Tidak Waras" {{$waris->mental == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
                </select></td>
        </tr><tr>
            <th>Pendapatan</th>
            <th>:</th>
            <td><input type="number" name="pendapatan" value="{{$waris->pendapatan}}" min="0" required></td>
        </tr>
        <tr>
            <th><th><a href="{{ route('waris.details', ['id' => $waris->maklumat_pemohon_id]) }}"><button type="button">Batal</button></a>
            <th colspan="2"><input type="submit" value="Update"></th>
        </tr>
    </table>
    </form>
</div>
</body>
</html>