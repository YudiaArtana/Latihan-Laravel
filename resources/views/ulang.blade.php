<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @for($i = 0; $i < 10; $i++)
    Angka = {{ $i }} <br>
  @endfor

  <br>
  {{-- Komen --}}

  @foreach ($banyakangka as $angka)
    Huruf = {{$angka}} <br>
  @endforeach

  <br>

  @php
  $x = 1
  @endphp

  @while ($x <= 5)
    Hasil = {{$x}}
    @php
    $x++;
    @endphp
    <br>
  @endwhile

  <br>

  @php
  echo "Ini Adalah Echo";
  @endphp
</body>
</html>