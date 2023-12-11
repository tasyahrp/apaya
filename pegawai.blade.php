<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="margin: 0; background-color: rgb(205, 237, 212); display: flex; align-items: center; justify-content: center; height: 85vh;">
    <div class="container mt-5 text-white">
        <h1 class="d-flex justify-content-center">Daftar Pegawai</h1>
        <table  class="table" border="1" >
            <tr  class="table-primary">
                <th>ID</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Gaji</th>
                <th>Action</th>
            </tr>
            @foreach($pegawais as $pegawai)
            <tr class="table table-striped-columns">
                <td>{{ $pegawai->id }}</td>
                <td>{{ $pegawai->name }}</td>
                <td>{{ $pegawai->posisi }}</td>
                <td>{{ $pegawai->gaji }}</td>
                <td>
                    <a class="btn btn-outline-success" href="/pegawai/{{ $pegawai->id }}">Update</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>