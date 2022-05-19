<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca INATEC - Siuna</title>
</head>
<body style="background: rgb(6, 94, 113)">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div style="width: 80%; margin-left:auto; margin-right:auto; display:grid; place-items:center; ">
        <img src="image/logo-inatec-2016.png" alt="">
        <h2 style="color:white">BIBLIOTECA VIRTUAL</h2>
        <h3 style="color:rgb(255, 255, 255)">INATEC - Siuna,Nicaragua</h3>
        <input  type="text" name="" id="libro_id" style="margin-top:5px;border-radius:10px;width:90%; font-size:20px;padding:15px" placeholder="Buscar libro por nombre o título">
        <ul id="nombre" style="background-color: white;"></ul>
    </div>
    
    <script src="{{ asset('/js/searchConsulta.js') }}" type="module"></script>    
</body>

</html>
