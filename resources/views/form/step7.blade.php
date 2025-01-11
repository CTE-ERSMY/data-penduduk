@extends('layout.new')

@section('form-content')
<h5>Had Tanggungan</h5>
<form action="{{route('hadTanggungan.new')}}" method="POST">
@csrf
@if(isset($pemohonId))
            <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
            @endif
    <table class="table table-border">
        <thead>
        <tr>
            <th>Butiran Had Kifayah</th>
            <th>Jumlah (RM)</th>
            <th><a href="javascript:void(0)" class="btn btn-success addRow">+</a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <select name="butiran_tanggungan[]" id="butiran_tanggungan" class="form-control">
                    <option disabled selected>Pilih Butiran</option>
                    <option value="Ketua Keluarga-Luar Bandar">Ketua Keluarga-Luar Bandar</option>
                    <option value="Ketua Keluarga-Dalam Bandar">Ketua Keluarga-Dalam Bandar</option>
                    <option value="Pasangan">Pasangan</option>
                    <option value="Anak Sekolah Menengah 13 - 17 Tahun">Anak Sekolah Menengah 13 - 17 Tahun</option>
                    <option value="Anak sekolah Rendah 7 - 12 Tahun">Anak sekolah Rendah 7 - 12 Tahun</option>
                    <option value="Anak 6 Tahun ke Bawah">Anak 6 Tahun ke Bawah</option>
                    <option value="Anak Menuntut di IPTA/S">Anak Menuntut di IPTA/S</option>
                    <option value="Anak Tidak Bersekolah (Bawah 17 Tahun)">Anak Tidak Bersekolah (Bawah 17 Tahun)</option>
                    <option value="Dewasa (18 tahun ke atas/tidak bekerja)">Dewasa (18 tahun ke atas/tidak bekerja)</option>
                  </select>
            </td>
            <td><input type="number" name="jumlah_tanggungan[]" id="jumlah_tanggungan" class="form-control"></td>
            <th><a href="javascript:void(0)" class="btn btn-danger deleteRow">-</a></th>
        </tr>
    </tbody>
    </table>
    <button type="submit" class="btn btn-success">Selesai</button>

</form>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('body').on('click', '.addRow', function(){
            var tr = "<tr>"+
                         "<td>"+
                             "<select name='butiran_tanggungan[]' class='form-control'>"+
                                 "<option disabled selected>Pilih Butiran</option>"+
                                 "<option value='Ketua Keluarga-Luar Bandar'>Ketua Keluarga-Luar Bandar</option>"+
                                 "<option value='Ketua Keluarga-Dalam Bandar'>Ketua Keluarga-Dalam Bandar</option>"+
                                 "<option value='Pasangan'>Pasangan</option>"+
                                 "<option value='Anak Sekolah Menengah 13 - 17 Tahun'>Anak Sekolah Menengah 13 - 17 Tahun</option>"+
                                 "<option value='Anak sekolah Rendah 7 - 12 Tahun'>Anak sekolah Rendah 7 - 12 Tahun</option>"+
                                 "<option value='Anak 6 Tahun ke Bawah'>Anak 6 Tahun ke Bawah</option>"+
                                 "<option value='Anak Menuntut di IPTA/S'>Anak Menuntut di IPTA/S</option>"+
                                 "<option value='Anak Tidak Bersekolah (Bawah 17 Tahun)'>Anak Tidak Bersekolah (Bawah 17 Tahun)</option>"+
                                 "<option value='Dewasa (18 tahun ke atas/tidak bekerja)'>Dewasa (18 tahun ke atas/tidak bekerja)</option>"+
                             "</select>"+
                         "</td>"+
                         "<td><input type='number' name='jumlah_tanggungan[]' min='0' class='form-control'></td>"+
                         "<td><a href='javascript:void(0)' class='btn btn-danger deleteRow'>-</a></td>"+
                     "</tr>";
            $('tbody').append(tr);
        });

        $('body').on('click', '.deleteRow', function(){
            $(this).closest('tr').remove();
        });
    });
  </script>