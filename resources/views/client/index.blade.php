<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: white;
           
        }
        .update{
            
            width: 100%;
            border: 3px solid black;
            border-radius: 5px;
            background-color: blue;
        }
        .ajouter{
            margin-bottom: 10px;
            padding: 10px;
            font-size: large;
            border-radius: 15%;
            background-color: orangered;
        }
        .delete{
            width: 100%;
            border: 3px solid black;
            border-radius: 5px;
            background-color: red;
        }
        .valid{
            color: green;
            border-left: 7px solid green;
            padding-left: 10px;
            background-color: olivedrab;
            padding: 10px;
            color: white;
        }
        .nonValid{
            color: red;
            border-left: 7px solid red;
            padding-left: 10px;
            background-color: orangered;
            padding: 10px;
            color: white;
        }
        table{
            width: 100%;
            text-align: center;
            border-collapse: collapse;
            background-color: aqua;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
        @if (session('success'))
        <div class="valid">{{session('success')}}</div>
        
        @elseif(session('erreur'))
        <div class="nonValid">{{session('erreur')}}</div>
        @endif
    <h1 >page index</h1>
    
    <button class="ajouter"><a href="{{url('clients/create')}}">ajouter</a></button>@include('Navigation.Nav')
    <table border="1">
        <thead>
            <tr>
                <th>numero client</th>
                <th>nom client</th>
                <th>email client</th>
                <th>adress client</th>
                <th colspan="2"> action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->adress}}</td>
                <td><button class="update" ><a  href="{{url("clients/$client->id/edit")}}"> update</a></button></td>
                <td><button class="delete" ><a href="{{url("clients/destroy/$client->id")}}" > delete</a></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>