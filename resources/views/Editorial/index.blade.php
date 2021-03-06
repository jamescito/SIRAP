<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editoriales') }}
        </h2>
    </x-slot>



    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">

    <div class="py-12 bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">

        <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ">

                <!--p></p-->


                <form action="/editoriales" class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-3 -mt-16" method="post">
                        @csrf()
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="codigoEditorial" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Código</label>
                            </div>
                            <input required type="text" id="codigoEditorial" name="codigoEditorial" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
                        </div>


                        <div class="flex flex-col">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <h1>El código ya exite ingrese otro !!</h1>
                                            <style>
                                                h1 {
                                                    color: red;
                                                    text-align: center;
                                                }
    
                                            </style>
                                        @endforeach
    
                                    </ul>
                                </div>
                            @endif
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="editorial" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Editorial</label>
                            </div>
                            <input required type="text" id="editorial" name="editorial" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="pais" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">País</label>
                            </div>
                            <input required type="text" id="pais" name="pais" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="3">
                        </div>
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="correo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Correo</label>
                            </div>
                            <input required type="text" id="correo" name="correo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
                        </div>
                        <form>
                            <a href="/editoriales"  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                </div>
                </form>

            


            <!--p></p-->


                <div class="py-12 bg-blue-100  overflow-hidden shadow-xl sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 mt-4">
                        <thead class="bg-gray-50">
                            <tr>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Código
                            </th>
                            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Editorial
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                País
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Correo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Acciones
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($editoriales as $editorial)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $editorial->codigoEditorial }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $editorial->editorial }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap ">
                                {{ $editorial->pais }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap ">
                                {{ $editorial->correo }}
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('editoriales.destroy', $editorial->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/editoriales/{{ $editorial->id }}/edit" class="text-indigo-900 hover:text-indigo-900 mr-4"> Editar </a>
                                <button type="submit" class="text-red-500 hover:text-indigo-900">Eliminar</a>
                            </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                {{ $editoriales->links() }}





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
