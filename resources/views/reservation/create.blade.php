<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>creation d'un reservation</h1>
    @include('Navigation.Nav')
    
    <form action="{{url('clients')}}" method="post">
    @csrf
        <label for="name"> nom :</label>
        <input name="name" type="text"><br><br>
        <label for="adress"> adress :</label>
        <textarea name="adress" id="" cols="20" rows="2" >
        </textarea><br><br>
        <label for="email"> email :</label>
        <input name="email" type="email"><br><br>
        <label for="email"> voiteurs :</label>
        <select name="" id="">
            <option value="null">les voiture dispo</option>
            @foreach ($voitures as $elt)
            <option value="{{$elt->id}}">{{$elt->marque}}</option>
            @endforeach
        </select><br><br>
        <label for="dateD">date debute:</label>
        <input type="date" name="dateD" id=""><br><br>
        <label for="dateF">date de Routeur:</label>
        <input type="date" name="dateF" id=""><br><br>
        
        


</form>
    
</body>
</html>