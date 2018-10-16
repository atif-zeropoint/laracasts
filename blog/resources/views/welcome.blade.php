<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<head>
    <title>Blog!</title>
</head>
<body>

<ul>
    @foreach($tasks as $task)
        <li>{{$task->body}}</li>
    @endforeach
</ul>

</body>
</html>