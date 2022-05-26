<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>préstamos-pdf</title>


    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
</head>

<body>

    <div style="width:100%;">
        <div style="width:30%;height:auto;float: left;">
            <img src="image/logo-inatec-2016.png" alt="" class="" width="80%">
        </div>
        <div style="width:68%;height:auto; float: right; border-left:solid 1px black">
            <label for="" style="font-size:22px; margin-left:10px;">REPORTE DE LIBROS</label><br>
            <label for="" style="font-size:18px; margin-left:10px;">Clasificación: {{ $datos[1] }}</label><br>
            <label for="" style="font-size:18px; margin-left:10px;">Cantidad de registros:
                {{ $datos[2] }}</label><br>
            <label for="" style="font-size:18px; margin-left:10px;">Fecha de generación: {{ $datos[0] }}</label>
        </div>
    </div>

    <div style="width: 100%; margin-top:200px; border-top:solid 1px black">

        @foreach ($libros as $libro)
            <div style="height: auto">
                <div class="mt-2"
                    style="border-bottom: solid 1px rgb(67, 66, 66); border-radius:5px; padding:10px;">
                    <div style="background: skyblue; padding:8px;">
                        <h4> {{ $libro->titulo }}</h4>
                    </div>
                    <label for=""> <span style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Id del libro:
                        </span> {{ $libro->codigolibro }}</label> <br>
                    <label for=""> <span style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Cantidad de
                            páginas: </span> {{ $libro->cantidadpaginas }}</label> <br>
                    <label for=""> <span style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Original:
                        </span> {{ $libro->libroOriginal }}</label><br>
                    <label for=""> <span style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Año de
                            publicación: </span> {{ $libro->aniopublicacion }}</label><br>
                    <label for=""> <span style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Idioma: </span>
                        {{ $libro->idioma }}</label><br>
                    <label for=""> <span style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Área que
                            pertenece: </span> {{ $libro->area }}</label><br>
                    <label for=""> <span style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Editorial:
                        </span> {{ $libro->editorial }}</label><br>
                    <label for=""> <span style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Libros totales:
                        </span> {{ $libro->cantidadlibro }}</label><br>
                    <label style="display: inline-block;" for=""> <span
                            style="color:rgb(2, 80, 113);font-weight:bold;font-size:18px;">Autor: </span>
                        {{ $libro->autoresCodigo }}</label>
                </div>
            </div>
        @endforeach

    </div>

</body>

</html>
