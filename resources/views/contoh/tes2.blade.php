<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tes View 2</title>
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
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBrnZB8mQYe8_XgT3ui35WsuXTzNPCreRc-57Ecpw4j4ag7aMlCqz9ySpQlxtMmh2tv08&usqp=CAU" alt="">
    </div>
  </div>
  <div class="nama">Haha Ketemu lagi, saya {{$nama}} ({{$nim}}) dari jurusan {{$jurusan}}</div>
  <br>
  <a href="http://127.0.0.1:8000/halaman-1">Ke Halaman 1</a>
</body>
</html>