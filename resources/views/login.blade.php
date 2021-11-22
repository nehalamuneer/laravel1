<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{url('/')}}">home</a>
    <a href="{{url('registrationpage')}}">register</a>
    <a href="{{url('loginpage')}}">login</a>
    <h1><b>login</b></h1>
    <form action="post">
        <label for="">username</label><input type="text"><br>
        <label for="">password</label><input type="password"><br>
        <button type="submit">login</button>
    </form>
</body>
</html>