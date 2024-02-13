<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/navi.css')}}">
    <title>Semua Pemohon</title>
    <style>
        .table-wrapper {
  overflow-x: auto;
}

.responsive-table {
  width: 100%;
  border-collapse: collapse;
}

.responsive-table th, .responsive-table td {
  padding: 10px;
  border: 1px solid #ddd;
}

.responsive-table th {
  background-color: #f2f2f2;
}

/* Responsive styles */
@media only screen and (max-width: 600px) {
  .responsive-table th, .responsive-table td {
    font-size: 12px;
  }
}
.clean-button {
  background-color: #ff0000;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}
    </style>
</head>
<body>
    <div class="container">
        <a href="{{route('index')}}"><button type="button" class="cbutton">Laman Utama</button></a> <br><br>
    <form action="{{ route('pemohon.display')}}" method="GET">
    <center><input type="text" name="nama" id="nama" class="simple" placeholder="Nama Pemohon">
    <input type="submit" value="Cari" class="cbutton"></center>
    </form>
    <br><br>
    @if(session('success'))
    <center><div class="alert alert-success">
        {{ session('success') }}</center>
        </div>
        @endif
    @if(session('error'))
        <center><div class="alert alert-success">
            {{ session('error') }}</center>
            </div>
            @endif
    @if(isset($pemohon) && count($pemohon) > 0)
    <div class="table-wrapper">
    <table class="responsive-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>No. Kad Pengenalan</th>
                <th>Jantina</th>
                <th>Tarikh Lahir</th>
                <th>Status Perkahwinan</th>
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
                <td>{{ $pemohons->ic}} </td>
                <td>{{ $pemohons->jantina}} </td> 
                <td>{{ $pemohons->tarikh_lahir}} </td>
                <td>{{ $pemohons->status}} </td>
                <td><form action="{{ route('pemohon.delete', ['id' => $pemohons->id]) }}" method="POST" id="deleteForm_{{ $pemohons->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmDelete({{ $pemohons->id }})" class="clean-button">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @else
    <p>Tiada Pemohon</p>
    @endif
</div>
    <script>
        function confirmDelete(id) {
            if (confirm("Adakah anda pasti untuk hapuskan data?")) {
                // If user confirms, submit the form
                document.getElementById('deleteForm_' + id).submit();
            }
        }
    </script>
</body>
</html>
