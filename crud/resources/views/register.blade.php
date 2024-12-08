<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">

<h1>Register</h1>
@if(Session::has('success'))
    {{ Session::get('success') }} 
@endif
<form method="POST" action="{{route('register')}}">
    @csrf
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" value="Register">
    <input type="button" value="cancel">
</div>
</form>
</body>
</html>