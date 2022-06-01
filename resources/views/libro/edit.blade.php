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

                    <form action="/libros\{{$libros->id}}"  class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-7 -mt-16" method="post">
                        @method('PUT')
                        @csrf()
                        <input value=" {{ $libros->autoresCodigo }}"  type="text" id="id"  name="autoresCodigo" style="display: none" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        <input value=" {{ $libros->editoriales_id }}" type="text" id="id1"  name="editoriales_id" style="display: none"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                            <div >

                            <div class=" ml-6 mx-auto p-3">
                                <div class="">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Seleccione el tipo</label>
                                </div>

                                <select required type="text" id="tipolibro" name="tipolibro" class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 -ml-4" >
                                    <option value="{{$libros->tipolibro}}">{{$libros->tipolibro}}</option>
                                    <option disabled class="bg-blue-300" value="tipolibro">Seleccione</option>
                                    <option>Libros</option>
                                    <option>Revista</option>
                                    <option>Monografía</option>
                                </select>


                            </div>




                            <div class="flex items-center">
                                <div class="container font-bold mt-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Autores</label>
                                    <input value=" {{ $libros->nombre }}"  required type="text" id="autoresCodigo" class="bg-gray-200 border-collapse ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="1">
                                </div>

                                    <div class="mt-3">
                                        <label for=""class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">editorial</label>
                                        
                                        <input value=" {{ $libros->editorial }}" required type="text" id="editoriales_id" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                                    </div>


                            </div>

                            <ul id="nombre" class="mt-3 appearance-none block w-full bg-gray-290 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 " tabindex="1"></ul>

                            <div class="flex items-center">

                                <div class="container font-bold mt-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Código</label>
                                    <input readonly value=" {{ $libros->codigolibro }}" required type="text" id="codigolibro" name="codigolibro" class="bg-gray-200 border-collapse ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="1">
                                </div>

                                <div class=" mt-3 ">
                                    <label for="titulo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Título</label>
                                    <input value=" {{ $libros->titulo }}" required type="text" id="titulo" name="titulo" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="2">
                                </div>

                            </div>



                            <div class=" flex items-center">

                                <div class="container font-bold mt-3">
                                    <label for="cantidadpaginas" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Cantidad páginas</label>
                                    <input value=" {{ $libros->cantidadpaginas }}" required type="text" id="cantidadpaginas" name="cantidadpaginas" class="bg-gray-200 border-collapse ml-2 space-y-1 hhover:bg-white border-transparent rounded" tabindex="3">
                                </div>

                                <div class="mt-3">
                                    <label for="libroOriginal" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Libro Original</label>
                                    <select style="width:13rem;"
                                    class="bg-gray-200 border-collapse mr-2 space-y-1 hover:bg-white border-transparent rounded"
                                    name="libroOriginal" id="">
                                    <option value="{{$libros->libroOriginal}}">Si</option>
                                    <option value="{{$libros->libroOriginal}}">No</option>
                                </select>
                                </div>
                            </div>


                            <div class="flex items-center">
                                <div class="container font-bold mt-3">
                                    <label for="aniopublicacion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3  mt-3">Año publicación</label>
                                    <input value="{{ $libros->aniopublicacion }}" required type="Date" id="aniopublicacion" name="aniopublicacion" class="bg-gray-200 border-collapse ml-2 space-y-1 hhover:bg-white border-transparent rounded" tabindex="4">
                                </div>


                                <div class="mt-3">
                                    <label for="idioma" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">Idioma</label>
                                    <input value=" {{ $libros->idioma }}" required type="text" id="idioma" name="idioma" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" tabindex="4">
                                </div>

                            </div>

                            <div class=" flex items-center">

                            <div class="container font-bold mt-3">
                                <div class="">
                                    <label for="Areas" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 ml-3">Áreas</label>
                                </div>
                                <select name="area_id" class=" bg-gray-200 border-collapse ml-2 space-y-1 hover:bg-white border-transparent rounded">
                                    <option value="{{$libros->area_id}}">{{$libros->area}}</option>
                                    <option disabled class="bg-blue-300" value="">Seleccione un área</option>
                                    @foreach($areas as $ar)
                                            <option class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded" value="{{$ar->codigoArea}}">{{$ar->area}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-3">
                                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 -ml-3">cantidad de libro</label>
                                <input required value=" {{ $libros->cantidadlibro }}" type="text" id="cantidadlibro" name="cantidadlibro" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded " tabindex="2">
                            </div>

                            </div>


                    </div>

                    <div class="flex items-center ml-3 mt-6" style="width: 100%;">
                        <div class="mt-3">
                            <label for=""class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-3 ml-2">libro disponible</label>
                            <input required type="number" value="{{$libros->librodisponible }}" id="librodisponible" name="librodisponible" class="bg-gray-200 border-collapse -ml-2 space-y-1 hover:bg-white border-transparent rounded " tabindex="2">
                        </div>
                        <div class="ml-12 mt-10">
                        <a href="/libros" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                        <button type="submit" class="ml-3 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                        </div>
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

<script>
    function autores(){
        var id=document.getElementById('codigo').innerHTML
        var id1=document.getElementById('id')
        var codigo=document.getElementById('autoresCodigo')
       // nombre.value=id

        var nombres=document.getElementById('datos').innerHTML
        id1.value=id
        codigo.value=nombres
    }


    function editorial(){
        var id=document.getElementById('codigoEditorial').innerHTML
        var id1=document.getElementById('id1')
        var codigo=document.getElementById('editoriales_id')
       // nombre.value=id

        var nombres=document.getElementById('datos').innerHTML
        id1.value=id
        codigo.value=nombres
    }
</script>

<script src="{{asset('/js/export_autores.js')}}" type="module"></script>
<script src="{{asset('/js/autores.js')}}" type="module"></script>
<script src="{{asset('/js/export-editorial.js')}}" type="module"></script>
<script src="{{asset('/js/searcheditorial.js')}}" type="module"></script>

</x-app-layout>
