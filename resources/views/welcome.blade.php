<!DOCTYPE="html">
<html>
<head>
    <title></title>
</head>
<body>

At least it didn't blow up...
<ul>
@foreach( $tasks as $task )

<li>{{ $task->body }}</li>

@endforeach
</ul>

</body>
</html>
