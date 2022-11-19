<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tes View</title>
  <style>
    .kotak{
      height: 300px;
      width: 300px;
      background-color: red;     
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10px;
    }

    .kotak2{
      width: 100px;
      height: 100px;
      background-color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }



    body{
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

  </style>
</head>
<body>
  <div class="kotak">
    <div class="kotak2">
      <img src="https://www.kibrispdr.org/data/1779/gif-lucu-wa-51.gif" alt="">
    </div>
  </div>
  <div class="nama">Halo saya {{$nama}} ({{$nim}}) dari jurusan {{$jurusan}}</div>
  <br>
  <a href="http://127.0.0.1:8000/halaman-2">Ke Halaman 2</a>
</body>
</html>