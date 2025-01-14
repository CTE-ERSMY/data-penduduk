@extends('header')

@section('content')
<div id="pemohon" style="padding: 20px">
  <h5>Maklumat Pemohon</h5>
  <form action="{{ route('newPemohon.new')}}" method="POST">
      @csrf
      <div class="table-responsive">
      <table class="table table-border">
          <tbody>
              <tr>
                  <th>Nama Pemohon</th>
                  <td><input type="text" name="nama" placeholder="Nama Penuh" class="form-control" required></td>
                  <th>No. Kad Pengenalan</th>
                  <td><input type="text" name="ic" maxlength="12" placeholder="tanpa (-)" class="form-control" id="icInput" required></td>
              </tr><tr>
                  <th>Jantina</th>
                  <td><input type="text" class="form-control" name="jantina" id="jantina" readonly>
                  <th>Tarikh Lahir</th>
                  <td><input type="date" name="tarikh_lahir" id="tarikh_lahir" class="form-control" readonly required>
                  </td>
              </tr><tr>
                  <th>Status Perkahwinan</th>
                  <td><select name="status" id="status" class="form-control">
                          <option selected disabled>Pilih status</option>
                          <option value="Kahwin" >Kahwin</option>
                          <option value="Bujang" >Bujang</option>    
                          <option value="Duda(Kematian Isteri)">Duda (Kematian Isteri)</option>
                          <option value="Duda(Bercerai)">Duda (Bercerai)</option>
                          <option value="Janda(Kematian Suami)">Janda (Kematian Suami)</option>
                          <option value="Janda(Bercerai)">Janda (Bercerai)</option>
                  </select></td>
                  <th>Keadaan Mental</th>
                  <td><select name="mental" id="mental" class="form-control">
                          <option selected disabled>Sila Pilih</option>
                          <option value="Waras">Waras</option>
                          <option value="Tidak Waras">Tidak Waras</option>
                      </select></td>
              </tr><tr>
                  <th>Penghayatan Islam</th>
                  <td><select name="islam" id="islam" class="form-control">
                          <option selected disabled>Sila Pilih</option>
                          <option value="Baik">Baik</option>
                          <option value="Kurang Baik">Kurang Baik</option>
                      </select></td>
                  <th>Keadaan Fizikal</th>
                  <td><select name="fizikal" id="fizikal" class="form-control">
                      <option selected disabled>Sila Pilih</option>
                          <option value="Sihat">Sihat</option>
                          <option value="Sakit">Sakit</option>
                          <option value="OKU">OKU</option>
                          <option value="Terlantar">Terlantar</option>
                      </select></td>
              </tr><tr>
                  <th rowspan="2">Alamat</th>
                  <td rowspan="2">
                      <input type="text" name="alamat" class="form-control" size="50" required><br>
                      <select name="poskod" id="poskod" class="form-control" required>
                          <option selected value="81900">81900</option>
                      </select><br>
                      <select name="bandar" id="bandar" class="form-control">
                          <option selected value="Kota Tinggi">Kota Tinggi</option>
                      </select>
                  </td>
                  <th>No. Tel 1</th>
                  <td><input type="text" name="nombor_rumah" placeholder="tanpa (-)" id="nombor_rumah" class="form-control"></td>
              </tr><tr>
                  <th>No. Tel 2 </th>
                  <td><input type="text" name="nombor_bimbit" placeholder="tanpa (-)" id="nombor_bimbit" class="form-control"></td>
              </tr>
              <tr>
                  <td colspan="4" style="text-align: center"><button type="reset" class="btn btn-danger" style="margin-left: 10px; margin-right: 10px">Reset</button><input type="submit" class="btn btn-success" value="Seterusnya" style="margin-left: 10px; margin-right: 10px">
                  </td>     
              </tr>    
          </tbody>    
      </table>
    </div>
</main>
@endsection

@push('scripts')
<script>
    document.getElementById('icInput').addEventListener('change', function () {
        const ic = this.value;
    
        // Check if the IC number is exactly 12 digits
        if (ic.length === 12) {
            const year = ic.substring(0, 2); // YY
            const month = ic.substring(2, 4); // MM
            const day = ic.substring(4, 6); // DD
            const genderDigit = ic.substring(11, 12); // Last digit
    
            // Determine full year based on YY
            const fullYear = parseInt(year) >= 50 ? `19${year}` : `20${year}`;
    
            // Validate date and assign to tarikh_lahir
            const birthDate = `${fullYear}-${month}-${day}`;
            const isValidDate = !isNaN(new Date(birthDate).getTime());
    
            if (isValidDate) {
                document.getElementById('tarikh_lahir').value = birthDate;
            } else {
                document.getElementById('tarikh_lahir').value = '';
            }
    
            // Determine gender
            const gender = parseInt(genderDigit) % 2 === 0 ? 'Perempuan' : 'Lelaki';
            document.getElementById('jantina').value = gender;
        } else {
            // Clear fields if IC number is incomplete or invalid
            document.getElementById('tarikh_lahir').value = '';
            document.getElementById('jantina').value = '';
        }
    });
    </script>
    @endpush    
    