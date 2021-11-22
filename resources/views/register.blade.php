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
    <h1><b>Registration form</b></h1>
    <form action="post">
        <label for="">name :</label><input type="text"> <br>
        <label for="">place :</label><input type="text"> <br>
        <label for="">contact :</label><input type="text">
    </form>
</body>
</html>