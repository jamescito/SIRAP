<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">

</head>
<body>
    
<img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ">    <div class="py-12 bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg"> 
<table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>

                            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Codigo Carnet
                            </th>

                            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Nombre
                            </th>

                            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Apellido
                            </th>

                            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Carrera
                            </th>

                            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Correo
                            </th>

                            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            
                            </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($estudiantes as $estudiante)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiante->codigoCarnet }}
                            </td>
                    
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiante->nombre }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiante->apellido }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiante-> carrera_id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiante-> correo }}
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

            </div>
    

    {{ $estudiantes->links() }} 




</body>
</html>


</x-app-layout>