@include('header2a')
<main class="main"
<div class="container">
    <form action="{{route('sejarah.edit', $sejarahBantuan->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Bantuan di Pohon/Terima</th>
                    <th>No Akaun</th>
                    <th>Tarikh Memohon</th>
                    <th>Tarikh Keluarkan</th>
                    <th>Tarikh Mula Bantuan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="nama_bantuan" value="{{ $sejarahBantuan->nama_bantuan }}" class="form-control" placeholder="Nama bantuan">
                        <a href="{{ $file_path }}" target="_blank">{{ $sejarahBantuan->file_name }}</a><input type="file" name="file" id="file" class="form-control"></td>
                    <td><input type="text" name="no_akaun" value="{{ $sejarahBantuan->no_akaun }}" class="form-control"></td>
                    <td><input type="date" name="tarikh_mohon" value="{{ $sejarahBantuan->tarikh_mohon }}" class="form-control"></td>
                    <td><input type="date" name="tarikh_lulus" value="{{ $sejarahBantuan->tarikh_lulus }}" class="form-control"></td>
                    <td><input type="date" name="tarikh_mula" value="{{ $sejarahBantuan->tarikh_mula }}" class="form-control"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Jumlah Diluluskan (RM)</th>
                    <th>Status Bantuan</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="number" name="jumlah_lulus" value="{{ $sejarahBantuan->jumlah_lulus }}" class="form-control"></td>
                    <td><input type="text" name="status_bantuan" value="{{ $sejarahBantuan->status_bantuan }}" class="form-control"></td>
                    <td><textarea name="catatan" id="catatan" value="{{ $sejarahBantuan->catatan }}" cols="30" rows="5" class="form-control" style="resize: none"></textarea></td>
                </tr>
            </tbody>
        </table>
        <center><a href="{{ route('sejarah.details', ['id' => $sejarahBantuan->maklumat_pemohon_id]) }}"><button type="button" class="btn btn-danger">Batal</button></a><input type="submit" value="Simpan" class="btn btn-success"></center>
    </table>
    </form>        
    </div>
</main>