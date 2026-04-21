<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade form</title>
</head>
<body>
    <form action="{{route('mahasiswa.simpan') }}" method="post">
        <!-- csrf untuk pengamanan form (harus digunakan ketika membuat form) -->
        @csrf 
        <label for="npm">NPM</label>
        <input type="text" name="npm"> <br> <br>

        <label for="nama">Nama</label>
        <input type="text" name="nama">  <br> <br>

        <button type="Submit">Simpan</button>
    </form>
</body>
</html>