<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Project</title>
</head>
<body>
    <div>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/test') }}">Test</a>
        <a href="{{ route('about') }}">About</a>
        <hr/>
    </div>
    <div>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="submit" name="btn" value="Submit">
        </form>
    </div>
</body>
</html>
