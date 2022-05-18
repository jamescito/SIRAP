
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

    <div style="width:100%">
        <div style="width:50%; background:orange">

        </div>
        <div style="width:50%; background:red">

        </div>
    </div>
    <div class="flex flex-col mt-4">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-center" style="background-color: rgb(241, 236, 236)">
                <thead class="border-b bg-gray-800" style="background-color: rgb(90, 198, 244)">
                    <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        LIBRO
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        ESTUDIANTE
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        FECHA DEL PRESTAMO
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        F. DEVOLUCIÓN DEL PRESTAMO
                    </th>

                    <th scope="col" class="text-sm font-medium text-white px-5 py-3">
                        F. ESTADO DEL PRESTAMO
                    </th>
                    </tr>
                </thead class="border-b">
                <tbody style="font-family: Verdana, Geneva, Tahoma, sans-serif; color:rgb(49, 47, 47)">
                    @foreach ($prestamos as $presta)
                    <tr class="bg-white border-b">
                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                        {{ $presta->titulo }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $presta->nombre }} {{ $presta->apellido }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $presta->fechaprestamo }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $presta->fechadevolucion }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-5 py-3 whitespace-nowrap">
                        {{ $presta->fechaestadoprestamo }}
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
