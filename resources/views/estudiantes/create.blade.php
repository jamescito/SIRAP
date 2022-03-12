<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Registros') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-200 ">
        <!--div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-red-200" -->
        <div class=" bg-black mx-auto">

                
<table class="min-w-full divide-y divide-gray-200 mx-auto">
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
            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Correo
            </th>
            </tr>
        </thead>
</div>
///////////////////////////////////////
            <div class="bg-green-300 overflow-hidden shadow-xl sm:rounded-lg">
                <!--div class="flex flex-col bg-blue-300"-->

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <h1>El codigo ya exite ingrese otro !!</h1>
                            <style>
                            h1{
                                color: red;
                                text-align: center;
                            }
                            </style>
                            @endforeach
                            
                        </ul>
                    </div>
                    @endif

                    <form action="/estudiantes" class="w-full max-w-lg bg-red-300 " method="post">
                        @csrf()
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Código de carnet</label>
                            </div>
                            <input required type="text" id="codigoCarnet" name="codigoCarnet" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
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

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="carrera_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">carrera</label>
                            </div>
                            <input required type="text" id="carrera_id" name="carrera_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="correo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">correo</label>
                            </div>
                            <input required type="text" id="correo" name="correo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>

                        <a href="/estudiantes" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                <!--/div-->
                </form>




                        </tbody>
                        </table>
            </div>
        <!--/div-->
    </div>
</x-app-layout>