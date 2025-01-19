@include('header2')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <h5>MAKLUMAT PEMOHON</h5>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Nama Pemohon</th>
                <td>{{ $pemohon->nama }} </td>
                <th>No. Kad Pengenalan</th>
                <td>{{ $pemohon->ic }}</td>
            </tr><tr>
                <th>Jantina</th>
                <td>{{ $pemohon->jantina }}</td>
                <th>Tarikh Lahir</th>
                <td>{{ $pemohon->tarikh_lahir }}</td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <td>{{ $pemohon->status }}</td>
                <th>Keadaan Mental</th>
                <td>{{ $pemohon->mental }}</td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <td>{{ $pemohon->islam }}</td>
                <th>Keadaan Fizikal</th>
                <td>{{ $pemohon->fizikal }}</td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <td rowspan="2">{{ $pemohon->alamat }}
                    <br>{{ $pemohon->poskod }}
                    <br>{{ $pemohon->bandar }}
                </td>
                <th>No. Telefon Rumah</th>
                <td>{{ $pemohon->nombor_rumah }}</td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <td>{{ $pemohon->nombor_bimbit }};</td>
            </tr>    
        </tbody>    
    </table>
    <center><h4><a href="{{ route('pemohon.Eview', ['id' => $pemohon->id]) }}">Edit Pemohon</a></h4>
        <h4><a href="{{ route('all.details', ['id' => $pemohon->id]) }}">Rumusan Maklumat</a></h4></center>
    <br>
    @if ($pasangan)
    <table class="table table-striped">
        <h5>MAKLUMAT PASANGAN</h5>
        <tbody>
            <tr>
                <th>Nama Pasangan</th>
                <td>{{ $pasangan->nama }}</td>
                <th>No. Kad Pengenalan</th>
                <td>{{ $pasangan->ic }}</td>
            </tr><tr>
                <th>Jantina</th>
                <td>{{ $pasangan->jantina }}</td>
                <th>Tarikh Lahir</th>
                <td>{{ $pasangan->tarikh_lahir }}</td>
            </tr><tr>
                <th>Status Perkahwinan</th>
                <td>{{ $pasangan->status }}</td>
                <th>Keadaan Mental</th>
                <td>{{ $pasangan->mental }}</td>
            </tr><tr>
                <th>Penghayatan Islam</th>
                <td>{{ $pasangan->islam }}</td>
                <th>Keadaan Fizikal</th>
                <td>{{ $pasangan->fizikal }}</td>
            </tr><tr>
                <th rowspan="2">Alamat</th>
                <td rowspan="2">{{ $pasangan->alamat }}
                    <br>{{ $pasangan->poskod }}
                    <br>{{ $pasangan->bandar }}
                </td>
                <th>No. Telefon Rumah</th>
                <td>{{ $pasangan->nombor_rumah }}</td>
            </tr><tr>
                <th>No. Telefon Bimbit</th>
                <td>{{ $pasangan->nombor_bimbit }}</td>
            </tr>    
        </tbody> 
    </table>
<center><h4><a href="{{ route('pasangan.Eview', ['id' => $pasangan->id]) }}">Edit Pasangan</a></h4></center><br>
    @else
    <p>Pemohon tidak mempunyai maklumat pasangan</p>
    <button class="btn btn-primary" style="width:fit-content" data-bs-toggle="modal" data-bs-target="#addPasanganModal">+ Maklumat Pasangan</button>
    <br><br>
    @endif
</div>
<br><br><br>
<div class="modal fade" id="addPasanganModal" tabindex="-1" aria-labelledby="addPasanganModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPasanganModalLabel">Tambah Maklumat Pasangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for adding MaklumatPasangan -->
                <form action="{{ route('newPasangan.new') }}" method="POST">
                    @csrf
                    <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohon->id }}">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pasangan</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="ic" class="form-label">No. Kad Pengenalan</label>
                        <input type="text" class="form-control" id="icInput" name="ic" maxlength="12" required>
                    </div>
                    <div class="mb-3">
                        <label for="jantina" class="form-label">Jantina</label>
                        <input type="text" name="jantina" id="jantina" readonly class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tarikh_lahir" class="form-label">Tarikh Lahir</label>
                        <input type="date" class="form-control" id="tarikh_lahir" name="tarikh_lahir" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tarikh_lahir" class="form-label">Status Perkahwinan</label>
                        <select name="status" id="status" class="form-control" readonly required>
                            <option selected disabled>Pilih status</option>
                            <option selected value="Kahwin">Kahwin</option>
                            <option value="Bujang">Bujang</option>    
                            <option value="Duda(Kematian Isteri)">Duda (Kematian Isteri)</option>
                            <option value="Duda(Bercerai)">Duda (Bercerai)</option>
                            <option value="Janda(Kematian Suami)">Janda (Kematian Suami)</option>
                            <option value="Janda(Bercerai)">Janda (Bercerai)</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="mental" class="form-label">Keadaan Mental</label>
                        <select name="mental" id="mental" class="form-control">
                            <option selected disabled>Sila Pilih</option>
                            <option value="Waras">Waras</option>
                            <option value="Tidak Waras">Tidak Waras</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fizikal" class="form-label">Keadaan Fizikal</label>
                        <select name="fizikal" id="fizikal" class="form-control">
                            <option selected disabled>Sila Pilih</option>
                                <option value="Sihat">Sihat</option>
                                <option value="Sakit">Sakit</option>
                                <option value="OKU">OKU</option>
                                <option value="Terlantar">Terlantar</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="islam" class="form-label">Penghayatan Islam</label>
                        <select name="islam" id="islam" class="form-control">
                            <option selected disabled>Sila Pilih</option>
                            <option value="Baik">Baik</option>
                            <option value="Kurang Baik">Kurang Baik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        <label for="poskod" class="form-label">Poskod</label>
                        <input type="text" name="poskod" id="poskod" class="form-control" required>
                        <label for="bandar" class="form-label">Bandar</label>
                        <input type="text" name="bandar" id="bandar" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombor_rumah" class="form-label">No Tel 1</label>
                        <input type="number" class="form-control" id="nombor_rumah" name="nombor_rumah">
                    </div>
                    <div class="mb-3">
                        <label for="nombor_bimbit" class="form-label">No Tel 2</label>
                        <input type="number" class="form-control" id="nombor_bimbit" name="nombor_bimbit">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</main>
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

