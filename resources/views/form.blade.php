<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('sendmail')}}">
        @csrf
        <center><h1>SEND EMAIL</h1></center>
        <center>  Send To <input type="email" name="mail" ><br><br></center>
        {{-- <center>  Message <input type="textarea" placeholder="Enter body here . . . " name="text" ><br><br></center> --}}
        <center> <input type="submit" value="Send Mail"></center>
    </form>
</body>
</html>