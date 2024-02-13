<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tableNew.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navi2.css')}}">
    <title>Pendapatan Pemohon</title>
</head>
<body>
    <div class="navigation-bar">
        <a href="{{route('index')}}"class="tab laman">Laman Utama<br>(batal)</a>
        <a class="tab done">Pemohon</a>
        <a class="tab done">Pasangan</a>
        <a class="tab active">Pendapatan</a>
        <a class="tab">Perbelanjaan</a>
        <a class="tab">Tanggungan dan Waris</a>
        <a class="tab">Harta</a>
        <a class="tab">Bantuan</a>
        <a class="tab">Had Kifayah</a>
        <a class="tab">Lampiran Dokumen</a>
        <a class="tab">Rumusan Siasatan</a>
        <a class="tab">Sejarah Bantuan</a>
    </div>
    <div class="container">
    <form action="{{ route('pendapatan.new')}}" method="POST">
        @csrf
        @if(isset($pemohonId))
            <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
            @endif
        <table>
            <h5>PENDAPATAN PEMOHON</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <th>:</th>
                    <td><input type="text" name="jawatan"required></td>
                </tr><tr>
                    <th>Gaji</th>
                    <th>:</th>
                    <td><input type="number" name="gaji" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <th>:</th>
                    <td><input type="text" name="majikan"></td>
                </tbody>
        </table>
        <br><br>
        <table>
            <h5>PENDAPATAN PASANGAN</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <th>:</th>
                    <td><input type="text" name="jawatan_psgn"></td>
                </tr><tr>
                    <th>Gaji</th>
                    <th>:</th>
                    <td><input type="number" name="gaji_psgn" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <th>:</th>
                    <td><input type="text" name="majikan_psgn"></td>
                </tbody>
            </tbody>
        </table>
        <br><br>
        <table>
            <h5>PENDAPATAN DAN LAIN-LAIN SUMBANGAN</h5>
            <tbody>
                <tr>
                    <th>Sumbangan Anak</th>
                    <th>:</th>
                    <td><input type="number" name="sumbangan_anak" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Saudara Mara</th>
                    <th>:</th>
                    <td><input type="number" name="sumbangan_saudara" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Pendapatan Sampingan</th>
                    <th>:</th>
                    <td><input type="number" name="sampingan" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Agensi</th>
                    <th>:</th>
                    <td><input type="number" name="sumbangan_agensi" step="0.01" min="0" required></td>
                </tr><tr>
                    <th colspan="3"><center><input type="submit" class="button" value="Seterusnya"></center></th>
                </tr> 
            </tbody> 
        </table>
    </form>
</div>
</body>
</html>