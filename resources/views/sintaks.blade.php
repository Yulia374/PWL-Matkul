<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks Dasar Blade</title>
</head>
<body>
    <p>Selamat datang 
        {{ $nama }}</p>
    <p>id user anda {{ $id }} </p>
    <p>alamat anda {{ $alamat }}</p>
    <p>alamat anda {!! $alamat !!}</p>

    <!-- cek data sudah dibuat -->
     @isset($nilai)
        <b>nilai tersedia</b>
     @endisset

    <!-- cek data kosong -->
    @empty($nilai)
        <b>nilainya kosong</b>
    @endempty

    <br>
    <!-- struktur kontrol -->
     @if ($nilai > 80)
        <b>Nilai A</b>
    @elseif ($nilai > 70)
        <b>Nilai B</b>
    @else
        <b>tidak lulus</b>
    @endif

    <!-- looping for -->
     <ul>
     @for ($i = 0; $i < count ($buah); $i++)
        <li>{{ $buah[$i] }}</li>
     @endfor
     </ul>

    <!-- looping foreach -->
    <ol>
        @foreach ($buah as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ol>
     
</body>
</html>