<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carreras') }}
        </h2>
    </x-slot>

        <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">
        
            <a href="areas/create" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 m-6  border border-blue-500 hover:border-transparent rounded">CREAR</a>
                 <!--TABLA CON TAILWIND-->
                <div class="my-4 overflow-x-auto sm:mx-6 lg:mx-8 w-full">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                           
                            <th scope="col"  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                areas
                            </th>
                          
                            </tr>
                        </thead>

            </div>
        </div>
    </div>
   

    </x-app-layout>