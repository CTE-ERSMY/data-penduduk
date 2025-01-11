@extends('layout.new')

@section('form-content')
    <form action="{{ route('pemohon.baru')}}" method="POST">
        @csrf
        <input type="hidden" name="step" value="3">
        
        <table class="table table-border">
            <h5>Pendapatan Pemohon</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <td><input type="text" class="form-control" name="jawatan" required></td>
                </tr><tr>
                    <th>Gaji</th>
                    <td>RM<input type="number" class="form-control" value="0" name="gaji" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <td><input type="text" class="form-control" name="majikan" required></td>
                </tbody>
        </table>
        <br><br>
        <table class="table table-border">
            <h5>Pendapatan Pasangan</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <td><input type="text" class="form-control" name="jawatan_psgn" required></td>
                </tr><tr>
                    <th>Gaji</th>
                    <td>RM<input type="number" class="form-control" value="0" name="gaji_psgn" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <td><input type="text" class="form-control" name="majikan_psgn" required></td>
                </tbody>
            </tbody>
        </table>
        <br><br>
        <table class="table table-border">
            <h5>Pendapatan Dan Lain - Lain Sumbangan</h5>
            <tbody>
                <tr>
                    <th>Sumbangan Anak</th>
                    <td>RM<input type="number" class="form-control" value="0" name="sumbangan_anak" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Saudara Mara</th>
                    <td>RM<input type="number" class="form-control" value="0" name="sumbangan_saudara" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Pendapatan Sampingan</th>
                    <td>RM<input type="number" class="form-control" value="0" name="sampingan" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Agensi</th>
                    <td>RM<input type="number" class="form-control" value="0" name="sumbangan_agensi" step="0.01" min="0" required></td>
                </tr><tr>
                    <th colspan="3"><center><input type="submit" class="btn btn-success" value="Lanjut"></center></th>
                </tr> 
            </tbody> 
        </table>
    </form>
</div>
@endsection