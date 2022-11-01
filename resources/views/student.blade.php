<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    <form action="{{ route('save') }}" method="post" >
    @csrf    
        <label for="name">Std name:</label>
        <input type="text" name="name" id="name" value="" ><br>
        <input type="submit" name="" id="">
    </form>
</body>
</html>