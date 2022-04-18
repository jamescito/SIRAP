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


            <form action="/prestamos\ {{ $prestamos->id}}"  class="w-full max-w-lg" method="post">
            @method('PUT')
            @csrf()
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">codigo prestamo</label>
                </div>
                <input value=" {{ $prestamos->codigoPrestamo }}"  readonly type="text" id="codigoPrestamo" name="codigoPrestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">estudiante</label>
                </div>
                <input value=" {{ $prestamos->estudiante_id }}" placeholder="{{ $prestamos->nombre }}"  type="text" id="estudiante_id" name="estudiante_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">libro</label>
                </div>
                <input value=" {{ $prestamos->libro_id }}"  type="text" id="libro_id" name="libro_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fecha prestamo</label>
                </div>
                <input value=" {{ $prestamos->fechaprestamo }}"  type="date" id="fechaprestamo" name="fechaprestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fecha de volucion</label>
                </div>
                <input value=" {{ $prestamos->fechadevolucion }}" type="date" id="fechadevolucion" name="fechadevolucion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>
    
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fecha estado prestamo</label>
                </div>
                <input value=" {{ $prestamos->fechaestadoprestamo }}" type="date" id="fechaestadoprestamo" name="fechaestadoprestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>
            
                <a href="/prestamos" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                </div>
            </form>
            
            </div>
        </div>
    </div>
</x-app-layout>