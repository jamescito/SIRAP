<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Registros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col">

            
            <form action="/estudiantes\ {{ $estudiantes->id}}"  class="w-full max-w-lg" method="post">
            @method('PUT')
            @csrf()
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Código</label>
                </div>
                <input value=" {{ $estudiantes->codigoCarnet }}" readonly type="text" id="codigoCarnet" name="codigoCarnet" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>


            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="nombre" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre</label>
                </div>
                <input value=" {{ $estudiantes->nombre }}" type="text" id="nombre" name="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
            </div>
        
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="apellido" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Apellido</label>
                </div>
                <input value=" {{ $estudiantes->apellido }}" type="text" id="apellido" name="apellido" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="carrera_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Carrera</label>
                </div>
                <input value=" {{ $estudiantes->carrera_id }}" type="text" id="carrera_id" name="carrera_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="correo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Correo</label>
                </div>
                <input value=" {{ $estudiantes->correo }}" type="text" id="correo" name="correo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
            </div>


                <a href="/estudiantes" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                </div>
            </form>
            
            </div>
        </div>
    </div>
</x-app-layout>