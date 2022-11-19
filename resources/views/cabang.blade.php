<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if(count($record) === 1)
    Punya 1 record
  @elseif(count($record) > 1)
    Banyak record
  @else
    Tidak Ada
  @endif
</body>
</html>