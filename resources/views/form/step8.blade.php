@extends('layout.new')

@section('form-content')
<header>
    <style>
        td {
            width: 20%;
        }
        .butiran {
            width: 40%;
        }
    </style>
</header>
<h5>Had Penambahan</h5>
    <form action="{{route('hadPenambahan.new')}}" method="POST">
    @csrf
    @if(isset($pemohonId))
        <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
        @endif
    <table class="table table-border">
        <thead>
            <tr>
                <th class="butiran">Butiran Had Kifayah</th>
                <th>Kadar Had Kifayah(RM)</th>
                <th>Kuantiti</th>
                <th>Jumlah(RM)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kos Perubatan Sakit Kronik</td>
                <td>150</td>
                <td><input type="number" value="0" name="int_kos_kronik" id="int_kos_kronik" min="0" class="form-control" required></td>
                <td><input type="number" name="kos_kronik" id="kos_kronik" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Cacat Semulajadi</td>
                <td>150</td>
                <td><input type="number" value="0" name="int_cacat_semulajadi" id="int_cacat_semulajadi" min="0" class="form-control"></td>
                <td><input type="number" name="cacat_semulajadi" id="cacat_semulajadi" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Cacat Mendatang</td>
                <td>150</td>
                <td><input type="number" value="0" name="int_cacat_mendatang" id="int_cacat_mendatang" min="0" class="form-control"></td>
                <td><input type="number" name="cacat_mendatang" id="cacat_mendatang" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Ibu/Bapa</td>
                <td>150</td>
                <td><input type="number" value="0" name="int_ibu_bapa" id="int_ibu_bapa" min="0" class="form-control"></td>
                <td><input type="number" name="ibu_bapa" id="ibu_bapa" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Ibu Tinggal</td>
                <td>150</td>
                <td><input type="number" value="0" name="int_ibu_tinggal" id="int_ibu_tinggal" min="0" class="form-control"></td>
                <td><input type="number" name="ibu_tinggal" id="ibu_tinggal" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Keluarga Bermasalah</td>
                <td>150</td>
                <td><input type="number" value="0" name="int_masalah_keluarga" id="int_masalah_keluarga" min="0" class="form-control"></td>
                <td><input type="number" name="masalah_keluarga" id="masalah_keluarga" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Ibu Tunggal</td>
                <td>150</td>
                <td><input type="number" value="0" name="int_ibu_tunggal" id="int_ibu_tunggal" min="0" class="form-control"></td>
                <td><input type="number" name="ibu_tunggal" id="ibu_tunggal" class="form-control" readonly></td>
            </tr>
            <tr>
                <th colspan="4"><center><input type="submit" class="btn btn-success" value="Lanjut"></center></th> 
            </tr>
        </tbody>
    </table>
    </form>
</main>
@endsection

<script>
     document.addEventListener('DOMContentLoaded', function() {
        const inputFields = document.querySelectorAll('input[name^="int_"]');

        inputFields.forEach(function(input) {
            input.addEventListener('input', function() {
                const inputValue = parseFloat(this.value) || 0; // Parse as float or default to 0
                const pricePerUnit = 150; // Assuming a constant price per unit
                const calculatedValue = inputValue * pricePerUnit;
                const correspondingField = document.getElementById(this.name.replace('int_', '')); // Get the corresponding readonly field by removing 'int_' from the name

                if (correspondingField) {
                    correspondingField.value = calculatedValue.toFixed(2);
                }
            });
        });
    });
</script>