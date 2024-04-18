<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello said</h1>
        <button><a href="{{route('services.edit')}}">lien pour service_edit par route</a></button>
        <button><a href="{{url('/services/edit')}}">lien pour service_edit par url</a></button>
</body>
</html>