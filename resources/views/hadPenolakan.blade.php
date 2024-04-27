@include('header3')
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
<h5>Had Penolakan</h5>
    <form action="{{route('hadPenolakan.new')}}" method="POST">
    @csrf
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
                <td>Kereta (RM 30,000.00 dan ke atas)</td>
                <td>300</td>
                <td><input type="number" min="0" name="int_kereta_mahal" id="int_kereta_mahal" class="form-control"></td>
                <td><input type="number" min="0" name="kereta_mahal" id="kereta_mahal" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Kereta (RM 30,000.00 dan ke bawah)</td>
                <td>100</td>
                <td><input type="number" min="0" name="int_kereta_murah" id="int_kereta_murah" class="form-control"></td>
                <td><input type="number" min="0" name="kereta_murah" id="kereta_murah" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Telefon Bimbit</td>
                <td>50</td>
                <td><input type="number" min="0" name="int_telefon_bimbit" id="int_telefon_bimbit" class="form-control"></td>
                <td><input type="number" min="0" name="telefon_bimbit" id="telefon_bimbit" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Barang Kemas (Emas) Melebihi Keperluan</td>
                <td>100</td>
                <td><input type="number" min="0" name="int_emas" id="int_emas" class="form-control"></td>
                <td><input type="number" min="0" name="emas" id="emas" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Astro</td>
                <td>50</td>
                <td><input type="number" min="0" name="int_astro" id="int_astro" class="form-control"></td>
                <td><input type="number" min="0" name="astro" id="astro" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Alat Penghawa Dingin</td>
                <td>50</td>
                <td><input type="number" min="0" name="int_aircond" id="int_aircond" class="form-control"></td>
                <td><input type="number" min="0" name="aircond" id="aircond" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>VCD / DVD / Radio Hi-Fi</td>
                <td>50</td>
                <td><input type="number" min="0" name="int_radio" id="int_radio" class="form-control"></td>
                <td><input type="number" min="0" name="radio" id="radio" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Wang Simpanan</td>
                <td>0</td>
                <td><input type="number" min="0" name="int_simpanan" id="int_simpanan" class="form-control"></td>
                <td><input type="number" min="0" name="simpanan" id="simpanan" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Home Theater</td>
                <td>50</td>
                <td><input type="number" min="0" name="int_home_theater" id="int_home_theater" class="form-control"></td>
                <td><input type="number" min="0" name="home_theater" id="home_theater" class="form-control" readonly></td>
            </tr>
            <tr>
                <td>Perokok</td>
                <td>50</td>
                <td><input type="number" min="0" name="int_perokok" id="int_perokok" class="form-control"></td>
                <td><input type="number" min="0" name="perokok" id="perokok" class="form-control" readonly></td>
            </tr>
            <tr>
                <th colspan="4"><center><input type="submit" class="btn btn-success" value="Lanjut"></center></th> 
            </tr>
        </tbody>
    </table>
    </form>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputFields = document.querySelectorAll('input[name^="int_"]');

        inputFields.forEach(function(input) {
            input.addEventListener('input', function() {
                const inputValue = parseFloat(this.value) || 0;
                const pricePerUnit = parseFloat(this.parentElement.previousElementSibling.textContent); // Get the price per unit from the previous td
                const calculatedValue = inputValue * pricePerUnit;
                const correspondingField = document.getElementById(this.name.replace('int_', ''));

                if (correspondingField) {
                    correspondingField.value = calculatedValue.toFixed(2);
                }
            });
        });
    });
</script>