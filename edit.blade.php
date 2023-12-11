<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="margin: 0; background-color: rgb(246, 225, 173); display: flex; align-items: center; justify-content: center; height: 85vh;">
    <div class="container mt-5" >
        <h2 class="d-flex justify-content-center">Edit Pegawai</h2>
        <form action="/pegawai/{{ $pegawai->id }}" method="POST">
        @csrf
        <div>
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pegawai->name}}">
        </div>
        <br>
        <div>
            <label for="name" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="posisi" name="posisi" value="{{ $pegawai->posisi}}">
        </div>
        <br>
        <div>
            <label for="name" class="form-label">Gaji</label>
            <input type="text" class="form-control" id="gaji" name="gaji" value="{{ $pegawai->gaji}}">
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Simpan">
        </form>
    </div>
</body>
</html>