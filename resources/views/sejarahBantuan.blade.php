@include('header3')
<header>
    <style>
        td {
            width: 20%;
        }
    </style>
</header>
<h5>Sejarah Bantuan</h5>
<form action="{{route('sejarahBantuan.new')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($pemohonId))
        <input type="hidden" name="maklumat_pemohon_id" value="{{ $pemohonId }}">
        @endif
    <table class="table table-border">
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
                <td><input type="text" name="nama_bantuan" class="form-control" placeholder="Nama bantuan">
                <input type="file" name="file" id="file" class="form-control"></td>
                <td><input type="text" name="no_akaun" class="form-control"></td>
                <td><input type="date" name="tarikh_mohon" class="form-control"></td>
                <td><input type="date" name="tarik_lulus" class="form-control"></td>
                <td><input type="date" name="tarikh_mula" class="form-control"></td>
            </tr>
        </tbody>
    </table>
    <table class="table table-border">
        <thead>
            <tr>
                <th>Jumlah Diluluskan (RM)</th>
                <th>Status Bantuan</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="number" name="jumlah_lulus" class="form-control"></td>
                <td><input type="text" name="status_bantuan" class="form-control"></td>
                <td><textarea name="catatan" id="catatan" cols="30" rows="5" class="form-control" style="resize: none"></textarea></td>
            </tr>
        </tbody>
    </table>
</form>