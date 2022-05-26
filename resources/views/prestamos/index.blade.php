<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Préstamos') }}
        </h2>

    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">


                <div class="py-12  bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">
                    <img src="image/logo-inatec-2016.png" alt="" class=" w-60">


                        <!--p></p-->

                        <form onload="fecha()" action="/prestamos"
                            class="p-5 w-full max-w-lg bg-gray-300  mx-auto  overflow-hidden shadow-xl sm:rounded-lg py-3 -mt-16"
                            method="post">
                            @csrf()

                            <input type="text" id="id" style="display: none" name="estudiante_id"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                tabindex="2">

                            <input type="text" id="id1" name="libro_id" style="display: none"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                tabindex="2">

                                <input type="text" id="id2" style="display: none" name="librodisponible" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">


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
                                    <label for="estudiante_id"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Estudiante
                                        u otro</label>
                                </div>
                                <input required type="text" id="estudiante_id"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    tabindex="2">

                            </div>
                            <ul id="nombre"
                                class=" appearance-none block w-full bg-gray-290 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
                                tabindex="1"></ul>

                            <div class="flex items-center py-2">
                                <div class="w-full px-3">
                                    <label for="libro_id"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Libro</label>
                                </div>
                                <input required type="text" id="libro_id"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    tabindex="2">
                            </div>



                            <label id="fechaSS" style="color:red;"></label>

                            <div class="flex items-center py-2">
                                <div class="w-full px-3">
                                    <label for="fechadevolucion"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Fecha
                                        de devolución</label>
                                </div>
                                <input onchange="validarFecha()" required type="date" id="fechadevolucion"
                                    name="fechadevolucion"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    tabindex="2">
                            </div>

                            <div class="flex items-center py-2">
                                <div class="w-full px-3">
                                    <label for="fechaestadoprestamo"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descripción
                                        del préstamo</label>
                                </div>
                                <input value="Activo" readonly required type="text" id="fechaestadoprestamo" name="fechaestadoprestamo"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    tabindex="2">
                            </div>

                            <div style="display: none" class="flex items-center py-2">
                                <div class="w-full px-3">
                                    <label for="disponible"
                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Disponibilidad</label>
                                </div>
                                <input required  type="text" value="Disponible"  id="disponible" name="disponible"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    tabindex="2">

                            </div>

                            <a href="/prestamos"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                                tabindex="5">Cancelar</a>
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                                tabindex="4">Guardar</button>
                    </div>
                    </form>

                </div>

                <!--p></p-->


                <div class="py-12 bg-blue-100  overflow-hidden shadow-xl sm:rounded-lg">

                    <div style="border-bottom: solid 1px black; width:95%; margin-left:auto; margin-right:auto;">
                        <label style="" for="">Obtener reportes filtrados</label>
                    </div>
                    <div class="mt-4 ml-8">
                        <a href="{{ route('prestamos-pdf') }}"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4  border border-blue-500 hover:border-transparent rounded">Todos
                            los préstamos</a>
                        <a href="{{ route('prestamos-Estudiantes-pdf') }}"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4  border border-blue-500 hover:border-transparent rounded">Préstamos
                            a estudiantes</a>
                        <a href="{{ route('prestamos-Publico-pdf') }}"
                            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4  border border-blue-500 hover:border-transparent rounded">Préstamos
                            a público general</a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200 mt-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                    título del libro
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                    estudiante
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                    Fecha Préstamo
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                    Fecha Devolución
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                    Estado préstamo
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-blue-700 uppercase tracking-wider bg-gray-300">
                                    Acciones
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
                                        {{ $presta->nombre }}
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
                                            <a href="/prestamos/{{ $presta->id }}/edit"
                                                class="text-indigo-900 hover:text-indigo-900 mr-4">Editar</a>
                                            <button type="submit"
                                                class="text-red-500 hover:text-indigo-900">Eliminar</a>
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
    </div>




    <script>
        function miAlerta() {
            var id = document.getElementById('secreativo').innerHTML
            var id1 = document.getElementById('id')
            var nombre = document.getElementById('estudiante_id')
            // nombre.value=id

            var nombres = document.getElementById('datos').innerHTML
            var apellidos = document.getElementById('apellido').innerHTML
            id1.value = id
            nombre.value = nombres + apellidos

        }

        function libro() {
            var id = document.getElementById('codigolibro').innerHTML
            var id1 = document.getElementById('id1')
            var id2 = document.getElementById('id2')
            var codigolibros = document.getElementById('libro_id')
            // nombre.value=id

            var nombres = document.getElementById('titulo').innerHTML
            var cant=document.getElementById('librodisponible').innerHTML
            id1.value = id
            id2.value=cant-1
            codigolibros.value = nombres

        }

        function Obtenercantidadlibro(){
            var cant=document.getElementById('librodisponible').innerHTML
            alert(cant)
        }

        function fecha() {

            var fecha_de_prestamo = document.getElementById('fechaprestamo');
            let fecha = new Date();
            var fecha_actual = fecha.toISOString().split('T')[0];
            // var anio_actual = fecha_actual.substring(0,4);
            // var mes_actual =  fecha_actual.substring(5,7);
            // var dia_actual =  (fecha_actual.substring(8,10))-1;
            fecha_de_prestamo.value = fecha_actual
        }

        function validarFecha() {
            var fe = document.getElementById('fechaSS')

            var anio = fecha_de_prestamo.substring(0, 4);
            var mes = fecha_de_prestamo.substring(5, 7);
            var dia = fecha_de_prestamo.substring(8, 10);




            if (anio < anio_actual || anio > anio_actual) {
                fe.innerHTML = 'locomans'
            } else if (mes < mes_actual || mes > mes_actual) {
                fe.innerHTML = 'locomans'
            } else if (dia < dia_actual || dia > dia_actual) {

                fe.innerHTML = 'locomans'
            }


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

    <script src="{{ asset('/js/search.js') }}" type="module"></script>
    <script src="{{ asset('/js/searchlibro.js') }}" type="module"></script>


</x-app-layout>
