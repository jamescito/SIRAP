<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prestamos') }}
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

                    <!--p></p-->

                    <form action="/prestamos" class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-3 -mt-16" method="post">
                        @csrf()
                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Código de prestamos</label>
                            </div>
                            <input required type="text" id="codigoPrestamo" name="codigoPrestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="estudiante_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">estudiante</label>
                            </div>
                            <input required type="text" id="estudiante_id" name="estudiante_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        
                        </div>
                        <ul id="nombre" class=" appearance-none block w-full bg-gray-290 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 " tabindex="1"></ul>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="libro_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">libro</label>
                            </div>
                            <input required type="text" id="libro_id" name="libro_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>


                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="fechaprestamo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fecha de prestamo</label>
                            </div>
                            <input required type="date" id="fechaprestamo" name="fechaprestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="fechadevolucion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fecha de volucion</label>
                            </div>
                            <input required type="date" id="fechadevolucion" name="fechadevolucion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>

                        <div class="flex items-center py-2">
                            <div class="w-full px-3">
                                <label for="fechaestadoprestamo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">fecha de estado de prestamo</label>
                            </div>
                            <input required type="date" id="fechaestadoprestamo" name="fechaestadoprestamo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
                        </div>

                        <a href="/prestamos" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
                </div>
                </form>
                
            </div>

                <!--p></p-->


                    <div class="py-12 bg-blue-100  overflow-hidden shadow-xl sm:rounded-lg">   
                    <a href="{{ route('prestamos-pdf') }}" class="bg-transparent mt-4 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 m-6  border border-blue-500 hover:border-transparent rounded">Generar PDF</a>
                        <table class="min-w-full divide-y divide-gray-200 mt-4">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            titulo del libro
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            estudiante
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Fecha Prestamo
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Fecha Devolucion
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                            Fecha fecha estado prestamo
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                <span class="sr-only">Acciones</span>
                            </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($prestamos as $presta)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->titulo }}
                            </td>
                    
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->nombre}}
                                {{ $presta->apellido }}
                            </td>
                            

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->fechaprestamo }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->fechadevolucion }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $presta->fechaestadoprestamo }}
                            </td>




                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('prestamos.destroy', $presta->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/prestamos/{{ $presta->id }}/edit" class="text-indigo-900 hover:text-indigo-900 mr-4">Editar</a>
                                <button type="submit" class="text-red-500 hover:text-indigo-900">Eliminar</a>
                            </form>
                            </td>
                            </tr>
                            @endforeach

                        </tbody>
                        </table>

                    </div>

            {{ $prestamos->links() }}   


            </div>
        </div>
    </div>




<script>
    function miAlerta() {
        alert("esto es real jijo");
    }
</script>


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

<script src="{{asset('/js/search.js')}}" type="module"></script>
<script src="{{asset('/js/searchlibro.js')}}" type="module"></script>


</x-app-layout>