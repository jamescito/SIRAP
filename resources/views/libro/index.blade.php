<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Libros') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">



            <div class="py-12  bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">
                <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ">    
                
                <div class="flex flex-col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <h1>El código ya exite, ingrese otro !!</h1>
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
                    @endif
            
                    <!--p></p-->

                    <form action="/libros"  class="p-3 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-7 -mt-16" method="post">

                        @csrf()
                        <div >
                        <div class=" ml-6 mx-auto">
                            <div class="">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Seleccione el tipo</label>
                            </div>
                            <select required type="text" id="tipolibro" name="tipolibro" class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 -ml-4" >
                                <option value="tipolibro">Seleccione</option>
                                <option value="tipolibro">Libros</option>
                                <option value="tipolibro">Revista</option>
                                <option value="tipolibro">Monografía</option>
                            </select>
                        </div>




                        <div class="ml-6 mx-auto">
                            <div class="">
                                <label for="Autores" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3">Autores</label>
                            </div>
                            <input required  type="text" id="autoresCodigo" name="autoresCodigo" class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 -ml-4" tabindex="3">
                            
                        </div>


                        <div class="flex items-center">

                            <div class="container font-bold mt-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Código</label>
                                <input required type="text" id="codigolibro" name="codigolibro" class="bg-gray-200 border-collapse ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="1">
                            </div>

                            <div class=" mt-3 ">
                                <label for="titulo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Titulo</label>
                                <input required type="text" id="titulo" name="titulo" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="2">
                            </div>

                        </div>



                        <div class=" flex items-center">

                            <div class="container font-bold mt-3">
                                <label for="cantidadpaginas" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Cantidad pagina</label>
                                <input required type="text" id="cantidadpaginas" name="cantidadpaginas" class="bg-gray-200 border-collapse ml-2 space-y-1 hhover:bg-white border-transparent rounded" tabindex="3">
                            </div>

                            <div class="mt-3">
                                <label for="libroOriginal" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Libro Original</label>
                                <input required type="text" id="libroOriginal" name="libroOriginal" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                            </div>
                        </div>


                        <div class="flex items-center">
                            <div class="container font-bold mt-3">
                                <label for="aniopublicacion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Año publicacion</label>                            
                                <input required type="Date" id="aniopublicacion" name="aniopublicacion" class="bg-gray-200 border-collapse ml-2 space-y-1 hhover:bg-white border-transparent rounded" tabindex="4">
                            </div>


                            <div class="mt-3">
                                <label for="idioma" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Idioma</label>
                                <input required type="text" id="idioma" name="idioma" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                            </div>

                        </div>

                        <div class=" flex items-center">

                        <div class="container font-bold mt-3">
                            <label for="cantidadpaginas" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Area</label>
                            <input required type="text" name="area_id" class="bg-gray-200 border-collapse ml-2 space-y-1 hhover:bg-white border-transparent rounded" tabindex="3">
                        </div>

                        <div class="mt-3">
                            <label for="libroOriginal" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Editorial</label>
                            <input required type="text" name="editorial_id" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                        </div>

                        </div>


                </div>

                        <div class="flex items-center ml-3 mt-6" style="width: 100%;">
                            <a href="/libros" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                            <button type="submit" class="ml-3 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                        </div>

                </div>
                </form>


        <!--p></p-->


        <div class="py-12 bg-blue-100  overflow-hidden shadow-xl sm:rounded-lg"> 
        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50" >
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                Tipo                             
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Código libro
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Titulo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Cantidad Páginas
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Libro Original
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Año Publicación
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Idioma
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Area
                            </th>

                            <th scope="col" class=" px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Editorial
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                <span class="sr-only">Acciones</span>
                            </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($libros as $libro)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap ">
                                {{ $libro->tipolibro }}
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap ">
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
                                {{ $libro->area }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $libro->editorial }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('libros.destroy', $libro->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/libros/{{ $libro->id }}/edit" class="text-indigo-900 hover:text-indigo-900 mr-4">Editar  </a>
                                <button type="submit" class="text-red-500 hover:text-indigo-900">Eliminar</a>
                            </form>
                            </td>
                            </tr>
                            @endforeach

                        </tbody>
                        </table>
                    </div>

                <!--FIN TABLA TAILWIND-->

    
    




    
                {{ $libros->links() }}     

            


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