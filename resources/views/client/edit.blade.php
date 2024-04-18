<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('Navigation.Nav')
    <h1>Update client {{$client->name}}  </h1>
    <form action="{{url("clients/$client->id")}}" method="POST">
    @csrf
    @method('PUT')
        <label for="id"> id :</label>
        <input readonly name="id" type="text" value={{$client->id}}><br><br>
        <label for="name"> nom :</label>
        <input name="name" type="text" value={{$client->name}}><br><br>
        <label for="adress"> adress :</label>
        <input name="adress" id="" cols="20" rows="2" value={{$client->adress}}>
        <br><br>
        <label for="email"> email :</label>
        <input name="email" type="email" value={{$client->email}}><br> <br>
        <input type="submit" name="save" id="" value="update">
        
        
    </form>
    
</body>
</html>