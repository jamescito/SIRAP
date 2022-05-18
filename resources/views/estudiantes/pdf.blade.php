<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes-pdf</title>

    <link src="asset {{ './public/image/logo-inatec-2016.png' }} ">
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
</head>

<body>

    <div style="width:100%;">
        <div style="width:30%;height:auto;float: left;">
            <img src="image/logo-inatec-2016.png" alt="" class="" width="80%">
        </div>
        <div style="width:68%;height:auto; float: right; border-left:solid 1px black">
            <label for="" style="font-size:22px; margin-left:10px;">REPORTE DE ESTUDIANTES</label><br>
            <label for="" style="font-size:18px; margin-left:10px;">Clasificación: {{ $datos[1] }}</label><br>
            <label for="" style="font-size:18px; margin-left:10px;">Cantidad de registros: {{ $datos[2] }}</label><br>
            <label for="" style="font-size:18px; margin-left:10px;">Fecha de generación: {{ $datos[0] }}</label>
        </div>
    </div>

    <div style="width: 100%; margin-top:200px; border-top:solid 1px black">
        <table class="min-w-full text-center mt-4" style="background-color: rgb(241, 236, 236)">
            <thead class="border-b bg-gray-800" style="background-color: rgb(90, 198, 244)">
                <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        CÓDIGO CARNET
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        NOMBRES
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        APELLIDOS
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        CARRERA
                    </th>

                    <th scope="col" class="text-sm font-medium text-white px-5 py-3">
                        CORREO
                    </th>
                </tr>
            </thead class="border-b">
            <tbody style="font-family: Verdana, Geneva, Tahoma, sans-serif; color:rgb(49, 47, 47)">
                @foreach ($estudiantes as $estudiante)
                    <tr class="bg-white border-b">
                        <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                            {{ $estudiante->codigoCarnet }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $estudiante->nombre }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $estudiante->apellido }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $estudiante->carrera }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-5 py-3 whitespace-nowrap">
                            {{ $estudiante->correo }}
                        </td>
                    </tr class="bg-white border-b">
                    <tr class="bg-white border-b">
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
