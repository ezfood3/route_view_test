<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> if Test</h1>
  @if($num > 19)
    <p>{{ $num }}은 성인입니다.</p>
  @else
    <p>{{ $num }}은 성인이 아닙니다.</p>
  @endif
</body>
</html>