<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-black-800 leading-tight">
            {{ __('Estudiantes') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">

    <div class="py-12 bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">
    
        <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ">    

        <form action="/estudiantes" class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-3 -mt-16" method="post">
                        @csrf()
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Código de carnet</label>
                            </div>
                            <input required type="text" id="codigoCarnet" name="codigoCarnet" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="nombre" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre</label>
                            </div>
                            <input required type="text" id="nombre" name="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="apellido" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Apellido</label>
                            </div>
                            <input required type="text" id="apellido" name="apellido" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>

                        <div wire:ignore class=" ml-6 mx-auto">
                            <div class="">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Seleccione el tipo</label>
                            </div>
                            <select  name="carrera_id" class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 -ml-4" >
                                <option value="">Seleccione una carrera</option>
                                @foreach($carrerasLista as $lsc)
                                    <option class="text-gray-70" value="{{$lsc->carrera_id}}">{{$lsc->carrera}} </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="correo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">correo</label>
                            </div>
                            <input required type="text" id="correo" name="correo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>

                        <a href="/estudiantes" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                <!--/div-->
                </form>

    </div>



    
    <div class="py-12 bg-blue-100  overflow-hidden shadow-xl sm:rounded-lg">   
    <a href="{{ route('estudiantes-pdf') }}" class="bg-transparent mt-4 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 m-6  border border-blue-500 hover:border-transparent rounded">Generar PDF</a>        
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
                                {{ $estudiante->carrera}}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $estudiante-> correo }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/estudiantes/{{ $estudiante->id }}/edit" class="text-indigo-900 hover:text-indigo-900 mr-4"> Editar </a>
                                <button type="submit" class="text-red-500 hover:text-indigo-900">Eliminar</a>
                            </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

    </div>
    

    {{ $estudiantes->links() }}                         

            </div>
        </div>
    </div>


<!--p>FOOTER</p -->


    <div class="border-t border-smoke px-8 py-4 bg-white">
        <div class="flex justify-center text-grey">
            Todos los derechos reservado 
        </div>
        <div class="flex justify-center text-grey">
            jr76407900@gmail.com
        </div>
        <div class="flex justify-center text-grey">
            Faruckchavarria@gmail.com
        </div>
</div>
</x-app-layout>

