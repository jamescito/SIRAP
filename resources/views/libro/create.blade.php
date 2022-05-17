<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Registros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

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

                    <form action="/libros" class="w-full max-w-lg" method="post">

                        @csrf()
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="tipolibro" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Seleccione el tipo</label>
                            </div>
                            <select required type="text" id="titulo" name="titulo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                                <option value="">---Seleccione--</option>
                                <option value="">Libros</option>
                                <option value="">Revista</option>
                                <option value="">Monografía</option>
                            </select>
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 x">Código</label>
                            </div>
                            <input required type="text" id="codigo" name="codigo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="titulo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Título</label>
                            </div>
                            <input required type="text" id="titulo" name="titulo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="Autores" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Autores</label>
                            </div>
                            <input required  type="text" id="autores" name="autores" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-220 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="3">
                            <button >Buscar</button>
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="cantidadpaginas" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Cantidad páginas</label>
                            </div>
                            <input required type="text" id="cantidadpaginas" name="cantidadpaginas" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="3">
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="libroOriginal" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Libro Original</label>
                            </div>
                            <input required type="text" id="libroOriginal" name="libroOriginal" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="aniopublicacion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Año publicación</label>
                            </div>
                            <input required type="Date" id="aniopublicacion" name="aniopublicacion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="idioma" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Idioma</label>
                            </div>
                            <input required type="text" id="idioma" name="idioma" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="area_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">área id</label>
                            </div>
                            <input required type="text" id="area_id" name="area_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="editoriales_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">editoriales id</label>
                            </div>
                            <input required type="text" id="editoriales_id" name="editoriales_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
                        </div>


                            <a href="/libros" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
