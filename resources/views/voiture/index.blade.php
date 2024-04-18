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
            background-color: gold;
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
            border: 2px solid black;
            background-color: burlywood;
            
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
        @if (session('success'))
        <div class="valid" id="mydiv">{{session('success')}}</div>
        @elseif(session('erreur'))
        <div class="nonValid" id="mydiv">{{session('erreur')}}</div>
        @endif
                    <script>
                        var div =document.getElementById('mydiv')
                        div.style.display='block'
                        setTimeout(function () {
                            div.style.display='none'
                        },5000)
                    </script>
         @include('Navigation.Nav')
        
    <h1 >page index</h1>
    <button class="ajouter"><a href="{{url('voitures/create')}}">ajouter</a></button>
    <table border="1">
        <thead>
            <tr>
                <th>numero de voiture</th>
                <th>matricule de voiture</th>
                <th>type de voiture</th>
                <th>marque de voiture</th>
                <th>prix de voiture</th>
                <th colspan="2"> action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voitures as $voiture)
            <tr>
                <td>{{$voiture->id}}</td>
                <td>{{$voiture->matricule}}</td>
                <td>{{$voiture->type}}</td>
                <td>{{$voiture->marque}}</td>
                <td>{{$voiture->prix}}</td>
                <td><button class="update" ><a  href="{{url("voitures/$voiture->id/edit")}}"> update</a></button></td>
                <td><button class="delete" ><a href="{{url("voitures/destroy/$voiture->id")}}" > delete</a></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>