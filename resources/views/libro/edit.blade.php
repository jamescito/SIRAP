<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Registros') }}
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

                    <form action="/libros\{{$libro->id}}"  class="w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-7 -mt-16" method="post">
                        @method('PUT')
                        @csrf()
                        <div class=" ml-6 mx-auto">
                            <div class="">
                                <label for="tipolibro" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Seleccione el tipo</label>
                            </div>
                            <select required type="text" id="titulo" name="titulo" class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 -ml-4" >
                                <option value="">Seleccione</option>
                                <option value="">Libros</option>
                                <option value="">Revista</option>
                                <option value="">Monografía</option>
                            </select>
                        </div>




                        <div class="ml-6 mx-auto">
                            <div class="">
                                <label for="Autores" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3">Autores</label>
                            </div>
                            <input required value="{{$libro->autoresCodigo}}"
                            type="text" id="autoresCodigo" name="autoresCodigo" 
                            class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200
                            rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 -ml-4" tabindex="3">
                            
                        </div>


                        <div class="flex items-center">

                            <div class="container font-bold mt-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Código</label>
                                <input value="{{$libro->codigolibro}}" required type="text" id="codigolibro" name="codigolibro" class="bg-gray-200 border-collapse ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="1">
                            </div>

                            <div class=" mt-3 ">
                                <label for="titulo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Titulo</label>
                                <input value="{{$libro->titulo}}" required type="text" id="titulo" name="titulo" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="2">
                            </div>

                        </div>



                        <div class=" flex items-center">

                            <div class="container font-bold mt-3">
                                <label for="cantidadpaginas" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Cantidad pagina</label>
                                <input value="{{$libro->cantidadpaginas}}" required type="text" id="cantidadpaginas" name="cantidadpaginas" class="bg-gray-200 border-collapse ml-2 space-y-1 hhover:bg-white border-transparent rounded" tabindex="3">
                            </div>

                            <div class="mt-3">
                                <label for="libroOriginal" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Libro Original</label>
                                <input value="{{$libro->libroOriginal}}" required type="text" id="libroOriginal" name="libroOriginal" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                            </div>
                        </div>


                        <div class="flex items-center">
                            <div class="container font-bold mt-3">
                                <label for="aniopublicacion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Año publicacion</label>                            
                                <input value="{{$libro->aniopublicacion}}" required type="Date" id="aniopublicacion" name="aniopublicacion" class="bg-gray-200 border-collapse ml-2 space-y-1 hhover:bg-white border-transparent rounded" tabindex="4">
                            </div>


                            <div class="mt-3">
                                <label for="idioma" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Idioma</label>
                                <input value="{{$libro->idioma}}" required type="text" id="idioma" name="idioma" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                            </div>

                        </div>


                        <div class="flex items-center">
                            <div class="container font-bold mt-3">
                                <label for="area_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">area id</label>
                                <input value="{{$libro->area_id}}" required type="text" id="area_id" name="area_id" class="bg-gray-200 border-collapse ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                            </di>

                            <div class="mt-3">
                                <label for="editoriales_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 ml-3">editoriales id</label>
                                <input value="{{$libro->editoriales_id}}" required type="text" id="editoriales_id" name="editoriales_id" class="bg-gray-200 border-collapse ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                            </div>

                        </div>

                        <div class="flex items-center -ml-3">
                            <a href="/libros" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                            <button type="submit" class="ml-3 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                        </div>

                </div>
                </form>






            </div>




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