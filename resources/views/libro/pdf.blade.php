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
        <table class="min-w-full text-center mt-4" style="background-color: rgb(241, 236, 236)">
            <thead class="border-b bg-gray-800" style="background-color: rgb(90, 198, 244)">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                        Título
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                        Cantidad Páginas
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                        Libro Original
                    </th>

                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                        Año Publicación
                    </th>

                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                        Idioma
                    </th>

                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                        Área
                    </th>

                    <th scope="col"
                        class=" px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                        Editorial
                    </th>

                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($libros as $libro)
                    <tr>

                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $libro->titulo }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $libro->cantidadpaginas }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $libro->libroOriginal }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $libro->aniopublicacion }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $libro->idioma }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $libro->area }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $libro->editorial }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </div>

</body>

</html>
