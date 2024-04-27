@include('header2')
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
    <center><h4><a href="{{ route('pemohon.Eview', ['id' => $pemohon->id]) }}">Edit Pemohon</a></h4></center>
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
    @endif
</div>
<br><br><br>
</main>

