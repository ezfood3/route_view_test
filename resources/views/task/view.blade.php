<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Todo List</h1>
  <div>
    <span>-충격- </span>
    {{$task['task_name']}}
  </div>
  <div>
    <span>작성자: </span>
    {{$task['due_date']}}
  </div>
  <div>
    <span>사인: </span>
    {{$trans_data}}
  </div>
</body>
</html>