<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link src= "asset {{('./public/image/logo-inatec-2016.png')}} " >
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
</head>
<body>

    <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ">    

    <div  class="py-12 bg-blue-600  overflow-hidden shadow-xl sm:rounded-lg mt-3 p-5">   

        <table style="background-color: rgb(209, 213, 219); text-align: center;" style="padding:22" class="min-w-full divide-y divide-gray-200 mt-4 mr-7">
            <thead style="border: 1px solid rgb(12, 5, 5);" class="bg-gray-50 ">
                <tr>
                <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                libro
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                estudiante
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                Fecha Prestamo
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                Fecha Devolucion
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                Fecha fecha estado prestamo
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                    <span class="sr-only">Acciones</span>
                </th>
                </tr>
            </thead>

            <tbody style="border: 1px solid black;" class="bg-white divide-y divide-gray-200">
            @foreach ($prestamos as $presta)
                <tr>
                <td  class="px-6 py-4 whitespace-nowrap">
                    {{ $presta->titulo }}
                </td>
        
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $presta->nombre}}
                    {{ $presta->apellido }}
                </td>
                

                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $presta->fechaprestamo }}
                </td>

                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $presta->fechadevolucion }}
                </td>

                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $presta->fechaestadoprestamo }}
                </td>

                </tr>
                @endforeach

            </tbody>
            </table>

    </div>

</body>
</html>