@include('header2a')
<main class="main">
<div class="container">
    <form action="{{route('hadTanggungan.edit', $hadTanggungan->id)}}" method="POST">
    @csrf
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Butiran Had Kifayah</th>
                <th>Jumlah (RM)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <select name="butiran_tanggungan" id="butiran_tanggungan" class="form-control">
                        <option disabled selected>Pilih Butiran</option>
                        <option value="Ketua Keluarga-Luar Bandar" {{$hadTanggungan->butiran_tanggungan == 'Ketua Keluarga-Luar Bandar' ? 'selected' : ''}}>Ketua Keluarga-Luar Bandar</option>
                        <option value="Ketua Keluarga-Dalam Bandar"  {{$hadTanggungan->butiran_tanggungan == 'Ketua Keluarga-Dalam Bandar' ? 'selected' : ''}}>Ketua Keluarga-Dalam Bandar</option>
                        <option value="Pasangan" {{$hadTanggungan->butiran_tanggungan == 'Pasangan' ? 'selected' : ''}}>Pasangan</option>
                        <option value="Anak Sekolah Menengah 13 - 17 Tahun" {{$hadTanggungan->butiran_tanggungan == 'Anak Sekolah Menengah 13 -17 Tahun' ? 'selected' : ''}}>Anak Sekolah Menengah 13 - 17 Tahun</option>
                        <option value="Anak sekolah Rendah 7 - 12 Tahun" {{$hadTanggungan->butiran_tanggungan == 'Anak sekolah Rendah 7 - 12 Tahun' ? 'selected' : ''}}>Anak sekolah Rendah 7 - 12 Tahun</option>
                        <option value="Anak 6 Tahun ke Bawah" {{$hadTanggungan->butiran_tanggungan == 'Anak 6 Tahun ke Bawah' ? 'selected' : ''}}>Anak 6 Tahun ke Bawah</option>
                        <option value="Anak Menuntut di IPTA/S" {{$hadTanggungan->butiran_tanggungan == 'Anak Menuntut di IPTA/S' ? 'selected' : ''}}>Anak Menuntut di IPTA/S</option>
                        <option value="Anak Tidak Bersekolah (Bawah 17 Tahun)" {{$hadTanggungan->butiran_tanggungan == 'Anak Tidak Bersekolah (Bawah 17 Tahun)' ? 'selected' : ''}}>Anak Tidak Bersekolah (Bawah 17 Tahun)</option>
                        <option value="Dewasa (18 tahun ke atas/tidak bekerja)" {{$hadTanggungan->butiran_tanggungan == 'Dewasa (18 tahun ke atas/tidak bekerja)' ? 'selected' : ''}}>Dewasa (18 tahun ke atas/tidak bekerja)</option>
                      </select>
                </td>
                <td><input type="number" name="jumlah_tanggungan" value="{{$hadTanggungan->jumlah_tanggungan}}" id="jumlah_tanggungan" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <center><a href="{{ route('kifayah.details', ['id' => $hadTanggungan->maklumat_pemohon_id]) }}"><button type="button" class="btn btn-danger">Batal</button>
    </a><input type="submit" value="Edit" class="btn btn-success"></center>
    </form>
</div>
</main>