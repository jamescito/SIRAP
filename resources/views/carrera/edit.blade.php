<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Carreras') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">
            <div class="py-12 bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">

                <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ">    

            <form action="/Carreras\ {{ $carrer->id}}"  class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-3 -mt-16" method="post">
            @method('PUT')
            @csrf()
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Código</label>
                </div>
                <input value=" {{ $carrer->codigoCarrera }}" readonly type="text" id="codigoCarrera" name="codigoCarrera" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="nombre" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre</label>
                </div>
                <input value=" {{ $carrer->carrera }}" type="text" id="carrera" name="carrera" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
            </div>
        
            
                <a href="/Carreras" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                </div>
            </form>
            
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