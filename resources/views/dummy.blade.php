<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/table.css')}}">
    <title>Sunting Waris</title>
</head>
<body>
<div id="container">
<h5>MAKLUMAT TANGGUNGAN</h5>
<form action="{{route('waris.edit', ['id' => $pemohonId])}}" method="POST">
    @csrf
<table>
<thead>
<tr>
    <th>Bil</th>
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
<tbody>
    @php
    $count=1;
@endphp
    @foreach ($warisData as $waris)

    <tr>
        <td>{{ $count++ }}<input type="hidden" name="waris[{{ $waris->id }}][id]" value="{{ $waris->id }}"> </td>
        <td><input type="text" name="waris[{{ $waris->id }}][nama]" value="{{ old('nama', $waris->nama) }}" required></td>
        <td><input type="text" name="waris[{{ $waris->id }}][ic]" value="{{ old('ic', $waris->ic) }}" required></td>
        <td><input type="number" min="0" name="waris[{{ $waris->id }}][umur]" value="{{ old('umur', $waris->umur) }}" required></td>
        <td><select name="waris[{{ $waris->id }}][hubungan]" id="hubungan" required>
            <option selected disabled>Sila Pilih</option>
            <option value="Anak" {{ old('hubungan', $waris->hubungan) == 'Anak' ? 'selected' : '' }}>Anak</option>
            <option value="Anak Tiri" {{ old('hubungan', $waris->hubungan) == 'Anak Tiri' ? 'selected' : '' }}>Anak Tiri</option>    
            <option value="Anak Angkat" {{ old('hubungan', $waris->hubungan) == 'Anak Angkat' ? 'selected' : '' }}>Anak Angkat</option>
            <option value="Anak Saudara" {{ old('hubungan', $waris->hubungan) == 'Anak Saudara' ? 'selected' : '' }}>Anak Saudara</option>
            <option value="Isteri 1" {{ old('hubungan', $waris->hubungan) == 'Isteri 1' ? 'selected' : '' }}>Isteri 1</option>
            <option value="Isteri 2" {{ old('hubungan', $waris->hubungan) == 'Isteri 2' ? 'selected' : '' }}>Isteri 2</option>
            <option value="Isteri 3" {{ old('hubungan', $waris->hubungan) == 'Isteri 3' ? 'selected' : '' }}>Isteri 3</option>
            <option value="Isteri 4" {{ old('hubungan', $waris->hubungan) == 'Isteri $' ? 'selected' : '' }}>Isteri 4</option>
            </select></td>
        <td><select name="waris[{{ $waris->id }}][status]" id="status" required>
            <option selected disabled>Sila Pilih</option>
            <option value="Sekolah" {{ old('status', $waris->status) == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>   
            <option value="Bekerja" {{ old('status', $waris->status) == 'Bekerja' ? 'selected' : '' }}>Bekerja</option>
            <option value="Tidak Bekerja" {{ old('status', $waris->status) == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
            </select></td>
        <td><input type="text" name="waris[{{ $waris->id }}][kerja]" value="{{ old('kerja', $waris->kerja) }}" required></td>
        <td><select name="waris[{{ $waris->id }}][fizikal]"  id="fizikal" required>
            <option value="Sihat" {{ old('fizikal', $waris->fizikal) == 'Sihat' ? 'selected' : '' }}>Sihat</option>
            <option value="Sakit" {{ old('fizikal', $waris->fizikal) == 'Sakit' ? 'selected' : '' }}>Sakit</option>    
            <option value="OKU" {{ old('fizikal', $waris->fizikal) == 'OKU' ? 'selected' : '' }}>OKU</option>
            </select></td>
        <td><select name="waris[{{ $waris->id }}][mental]" id="mental" required>
            <option value="Waras" {{ old('mental', $waris->mental) == 'Waras' ? 'selected' : '' }}>Waras</option>    
            <option value="Tidak Waras" {{ old('mental', $waris->mental) == 'Tidak Waras' ? 'selected' : '' }}>Tidak Waras</option>
            </select></td>
        <td><input type="number" min="0"  name="waris[{{ $waris->id }}][pendapatan]" value="{{ old('pendapatan', $waris->pendapatan) }}" required></td>
    </tr>       
@endforeach     
</tbody>
</table>
<input type="submit" value="Update">
</form>
</div>
</body>
</html>