<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-black-800 leading-tight">
                {{ __('Registrar otro usuario') }}
            </h2>
        </x-slot>

        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
                <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">

        <div class="py-12 bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">

            <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ">

            <form action="/pueblo" class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-3 -mt-16" method="post">
                            @csrf()
                            <div class="flex items-center py-2">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">N. Cédula</label>
                                </div>
                                <input required type="text" id="codigoCarnet" name="codigoCarnet" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
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
                                    <label for="nombre" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombres</label>
                                </div>
                                <input required type="text" id="nombre" name="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                            </div>

                            <div class="flex items-center py-2">
                                <div class="w-full px-3">
                                    <label for="apellido" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Apellidos</label>
                                </div>
                                <input required type="text" id="apellido" name="apellido" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                            </div>

                            <div class="flex items-center py-2">
                                <div class="w-full px-3">
                                    <label for="correo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Correo</label>
                                </div>
                                <input required type="text" id="correo" name="correo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                                <input value="00" name="carrera_id" style="display: none" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                            </div>

                            <div class="flex items-center py-2">
                                <input type="text" value="NON-CD" style="display: none" name="carrera_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                            </div>
                            <div class="flex items-center py-2">
                                <input type="text" value="otro" style="display: none" name="clasificacion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                            </div>

                            <a href="/estudiantes" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                    <!--/div-->
                    </form>

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

