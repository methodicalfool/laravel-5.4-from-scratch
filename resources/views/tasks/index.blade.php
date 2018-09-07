<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <h1>Tasks</h1>

  <ul>
  @foreach( $tasks as $task )
          <li><a href="/task/{{$task->id}}">{{ $task->body }}</a></li>
  @endforeach
  </ul>

  </body>
</html>
