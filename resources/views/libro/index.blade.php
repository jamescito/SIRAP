<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Libros') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">

            <a href="libros/create" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 m-6  border border-blue-500 hover:border-transparent rounded">CREAR</a>
                
                <!--TABLA CON TAILWIND-->
                <div class="my-4 overflow-x-auto sm:mx-6 lg:mx-8 w-full">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Código libro
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Titulo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Cantidad Páginas
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Libro Original
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Año Publicación
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Idioma
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Area
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Editorial
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Acciones</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($libro as $libro)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $libro->codigolibro }}
                            </td>
                     
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
                                {{ $libro->area_id }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $libro->editoriales_id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('Libros.destroy', $libro->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/libros/{{ $libro->id }}/edit" class="text-indigo-600 hover:text-indigo-900 mr-4">  </a>
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