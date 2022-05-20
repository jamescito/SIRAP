<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar prestamos') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">
            <div class="py-12 bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">

                <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ">

            <form action="/prestamos\ {{ $prestamos->id}}"  class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-3 -mt-16" method="post">
            @method('PUT')
            @csrf()
            <input  type="text" id="id" value=" {{ $prestamos->estudiante_id }}" style="display: none"  name="estudiante_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
            <input  type="text" id="id1"  value=" {{ $prestamos->libro_id }}" name="libro_id" style="display: none" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">código préstamo</label>
                </div>
                <input value=" {{ $prestamos->codigoPrestamo }}"  readonly type="text" id="codigoPrestamo" name="codigoPrestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">estudiante</label>
                </div>
                <input value=" {{ $prestamos->nombre }}" type="text" id="estudiante_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <ul id="nombre" class=" appearance-none block w-full bg-gray-290 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 " tabindex="1"></ul>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">libro</label>
                </div>
                <input value=" {{ $prestamos->titulo }}"  type="text" id="libro_id"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fecha préstamo</label>
                </div>
                <input value="{{ $prestamos->fechaprestamo }}" required type="Date" id="fechaprestamo" name="fechaprestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fecha de volución</label>
                </div>
                <input value="{{ $prestamos->fechadevolucion }}" required type="Date" id="fechadevolucion" name="fechadevolucion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descripcion de préstamo</label>
                </div>
                <input value="{{ $prestamos->fechaestadoprestamo }}" type="text" id="fechaestadoprestamo" name="fechaestadoprestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>
            <div class="flex items-center py-2">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">disponible</label>
                </div>
                <input value="{{ $prestamos->disponible }}" type="text" id="disponible" name="disponible" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
            </div>

                <a href="/prestamos" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
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

<script>
    function miAlerta() {
        var id=document.getElementById('secreativo').innerHTML
        var id1=document.getElementById('id')
        var nombre=document.getElementById('estudiante_id')
       // nombre.value=id

        var nombres=document.getElementById('datos').innerHTML
        var apellidos=document.getElementById('apellido').innerHTML
        id1.value=id
        nombre.value=nombres+apellidos

    }

    function libro(){
        var id=document.getElementById('codigolibro').innerHTML
        var id1=document.getElementById('id1')
        var codigolibros=document.getElementById('libro_id')
       // nombre.value=id

        var nombres=document.getElementById('titulo').innerHTML
        id1.value=id
        codigolibros.value=nombres

    }
</script>


<script src="{{asset('/js/search.js')}}" type="module"></script>
<script src="{{asset('/js/searchlibro.js')}}" type="module"></script>
</x-app-layout>
