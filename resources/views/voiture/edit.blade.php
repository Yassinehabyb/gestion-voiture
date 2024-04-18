<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
                height: 30px;
                width: 250px;
        }
        .save{
            background-color: black;
            color: white;
            border: 2px solid white;
            border-radius: 10px;
        }
        .save:hover{
            background-color: gray;
            color: black;
            border: 2px solid gray;
            border-radius: 5px;
            transition-duration: 1s;
        }
        table{
            margin: auto;
            background-color: gray;
            border-radius: 5px;
            text-align: end;
        }
        
        
    </style>
</head>
<body>
    <h1>voiture update page</h1>
    @include('Navigation.Nav')
    
    <form action="{{url("voitures/$voiture->id")}}" method="POST">
    @csrf
    @method('PUT')
    <table >
        <tr>
            <td><label for="matricule"> matricule :</label></td>
            <td><input name="matricule" type="text" value={{$voiture->matricule}}></td>
        </tr>
        <tr>
            <td><label for="type"> type :</label></td>
            <td><input name="type" type="text"  value={{$voiture->type}}></td>
        </tr>
        <tr>
            <td><label for="marque"> marque :</label></td>
            <td><input name="marque" type="text"  value={{$voiture->marque}}></td>
        </tr>
        <tr>
            <td><label for="prix"> prix :</label></td>
            <td><input name="prix" type="number"  value={{$voiture->prix}}></td>
        </tr >
        <tr >
            <td colspan="2"><input class="save" type="submit" value="update" ></td>
        </tr>
    </table>
        
        
        
        
        
    </form>
</body>
</html>