<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Autores') }}
        </h2>
    </x-slot>


    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">
                

        <div class="py-12 bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">
    
            <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt="" class=" w-60 ">    

                <!--h2 class=" font-bold mx-auto ml-60 -mt-10">Registrar autores</h2-->

            <div class="flex flex-col">
                
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <br><br><h1>El codigo ya exite ingrese otro !!</h1>
                            <style>
                                h1 {
                                    color: red;
                                    text-align: center;
                                    font-family: Bahnschrift, SemiBold;
                                    font-size: 100%;
                                }
                            </style>
                            @endforeach

                        </ul>
                    </div>

                    </div>
                    @endif
                </div>
                    <form action="/autores" class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-3 -mt-16" method="post">
                        @csrf()
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Código autor</label>
                            </div>
                            <input required type="text" id="codigo" name="codigo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
                        </div>
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="nombre" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombres</label>
                            </div>
                            <input required type="text" id="nombre" name="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="apellido" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Apellidos</label>
                            </div>
                            <input required  type="text" id="apellido" name="apellido" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="3">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="fecha_nacimiento" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Fecha de nacimiento</label>
                            </div>
                            <input required type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="3">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="nacionalidad" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">nacionalidad</label>
                            </div>
                            <input required type="text" id="nacionalidad" name="nacionalidad" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
                        </div>
                        
                        <form>
                            <a href="/autores" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                        </form>

                    </div>



            </div>  

<!--p>se divide</p-->

<div class="py-12 bg-blue-100  overflow-hidden shadow-xl sm:rounded-lg">   

    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Código
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Nombres
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Apellidos
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Fecha de nacimiento
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                nacionalidad
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                <span class="sr-only">Acciones</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($autores as $autor)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $autor->codigo }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $autor->nombre }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm ">
                                {{ $autor->apellido }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm ">
                                {{ $autor->fecha_nacimiento }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm ">
                                {{ $autor->nacionalidad }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            
                            <form action="{{ route('autores.destroy', $autor->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/autores/{{ $autor->id }}/edit" class="text-indigo-900 hover:text-indigo-900 mr-4 "> Editar </a>
                                <button type="submit" class="text-red-500 hover:text-indigo-900">Eliminar</a>
                            </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                        </div>

                {{ $autores->links() }} 



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