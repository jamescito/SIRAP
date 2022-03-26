<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table class="min-w-full divide-y divide-gray-200 mt-4">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            titulo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            nombre
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            apellido
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Fecha Prestamo
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Fecha Devolucion
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                <span class="sr-only">Acciones</span>
                            </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($prestamos as $presta)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->titulo }}
                            </td>
                    
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->nombre}}
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->apellido }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->fechaprestamo }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->fechadevolucion }}
                            </td>

                            </tr>
                            @endforeach

                        </tbody>
                        </table>

</body>
</html>