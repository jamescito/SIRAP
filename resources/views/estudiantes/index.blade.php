<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudiante') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">
                
            <a href="estudiantes/create" ></a>
                 <!--TABLA CON TAILWIND-->
                <div class="my-4 overflow-x-auto sm:mx-6 lg:mx-8 w-full">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>

                              <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Codigo Carnet
                              </th>

                               <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                              </th>

                              <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Apellido
                              </th>
                              <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Carrera
                              </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($estudiantes as $estudiantes)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiantes->codigoCarnet }}
                            </td>
                     
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiantes->nombre }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiantes->apellido }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiantes-> carrera_id }}
                            </td>
                     
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('estudiantes.destroy', $estudiantes->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/estudiantes/{{ $estudiantes->id }}/edit" class="text-indigo-600 hover:text-indigo-900 mr-4"> Editar </a>
                                <button type="submit" class="text-indigo-600 hover:text-indigo-900">Eliminar</a>
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


</x-app-layout>