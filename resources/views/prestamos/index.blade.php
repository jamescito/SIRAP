<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Libros') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">
                
            <a href="prestamos/create" ></a>
                 <!--TABLA CON TAILWIND-->
                <div class="my-4 overflow-x-auto sm:mx-6 lg:mx-8 w-full">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            codigo Prestamo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            estudiante_id
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            libro_id
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha Prestamo
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha Devolucion
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha Estado Prestamo
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Acciones</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($prestamos as $prestamos)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $prestamos->codigoPrestamo }}
                            </td>
                     
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $prestamos->estudiante_id }}
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $prestamos->libro_id }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $prestamos->fechaprestamo }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $prestamos->fechadevolucion }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $prestamos->fechaestadoprestamo }}
                            </td>

                           
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('prestamos.destroy', $prestamos->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/prestamos/{{ $prestamos->id }}/edit" class="text-indigo-600 hover:text-indigo-900 mr-4">  </a>
                                <button type="submit" class="text-indigo-600 hover:text-indigo-900"></a>
                            </form>
                            </td>
                            </tr>
                            @endforeach

                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
                <!--FIN TABLA TAILWIND-->

      
            </div>
        </div>
    </div>

    <div class="border-t border-smoke px-8 py-4 bg-white">
  <div class="flex justify-center text-grey">
              Todos los derechos reservado 
  </div>
  <div class="flex justify-center text-grey">
              jr76407900@gmail.com
  </div>
  <div class="flex justify-center text-grey">
              Eliezerrivera@gmail.com
  </div>
</div>
</x-app-layout>