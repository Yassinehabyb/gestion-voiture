<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>creation </h1>
    @include('Navigation.Nav')
    <form action="{{url('clients')}}" method="post">
    @csrf
        <label for="name"> nom :</label>
        <input name="name" type="text"><br><br>
        <label for="adress"> adress :</label>
        <textarea name="adress" id="" cols="20" rows="2" >
        </textarea><br><br>
        <label for="email"> email :</label>
        <input name="email" type="email"><br>
        <input type="submit" name="save" id="" value="save">
        
        
    </form>
    
</body>
</html>