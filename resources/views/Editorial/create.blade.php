<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Registros Editoriales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col">
            <form action="/Editoriales" class="w-full max-w-lg" method="post">
            @csrf()
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="codigo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Código</label>
                </div>
                <input type="text" id="codigo" name="codigo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="editorial" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Editorial</label>
                </div>
                <input type="text" id="editorial" name="editorial" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
            </div>
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="pais" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">País</label>
                </div>
                <input type="text" id="pais" name="pais" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="3">
            </div>
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label for="correo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">correo</label>
                </div>
                <input type="text" id="correo" name="correo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
            </div>
            <form >
                <a href="/Editoriales" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>