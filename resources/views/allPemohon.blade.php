@include('header')
<header>
    <style>
        table {
            font-size: 14px;
            padding: 5px;
        }
    </style>
</header>
<body>
    <main class="main">
    <br>
    {{-- <form action="{{ route('pemohon.display')}}" method="GET">
    <center><input type="text" name="nama" id="nama" placeholder="Nama Pemohon">
    <input type="submit" value="Cari" class="btn btn-info" style="padding-top:3px; padding-bottom:3px; margin:0"></center>
    </form>
    <br><br> --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif
    @if(session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
            </div>
            @endif
    @if(isset($pemohon) && count($pemohon) > 0)
    <table id="pemohonTable" class="table table-hover">
        <thead style="text-transform:uppercase; background-color:#f2f2f2">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Pasangan</th>
                <th>No. Kad Pengenalan</th>
                <th>Status Perkahwinan</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @php
                $count = 1;
            @endphp
            @foreach($pemohon as $pemohons)
            <tr>
                <td>{{ $count++ }} </td>
                <td><a href="{{ route('pemohon.details', ['id' => $pemohons->id])}}">{{ $pemohons->nama}}</a></td>
                <td>{{$pemohons->pasangan->nama ?? 'N/A'}} </td>
                <td>{{ $pemohons->ic}} </td>
                <td>{{ $pemohons->status}} </td>
                <td><form action="{{ route('pemohon.delete', ['id' => $pemohons->id]) }}" method="POST" id="deleteForm_{{ $pemohons->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmDelete({{ $pemohons->id }})" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @else
    <p>Tiada Pemohon</p>
    @endif

    </main>
    <script>
        function confirmDelete(id) {
            if (confirm("Adakah anda pasti untuk hapuskan data?")) {
                // If user confirms, submit the form
                document.getElementById('deleteForm_' + id).submit();
            }
        }

    $(document).ready(function () {
        $('#pemohonTable').DataTable({
            search: true,
            paging: true,
            info: true
        });
    });
    </script>
</body>

