
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes-pdf</title>

    <link src= "asset {{('./public/image/logo-inatec-2016.png')}} " >
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
</head>
<body>
    
    <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" mt-3" style="width: 20%">    
    
    <div class="flex flex-col mt-4">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-center" style="background-color: rgb(241, 236, 236)">
                <thead class="border-b bg-gray-800" style="background-color: rgb(90, 198, 244)">
                    <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        CODIGO CARNET
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        NOMBRE
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        APELLIDO
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
          </div>
        </div>
      </div>

</body>
</html>
