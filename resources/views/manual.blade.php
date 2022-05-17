<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-black-800 leading-tight">
                {{ __('Manual de usuario') }}
            </h2>
        </x-slot>

        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
                <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">

        <div class="py-12 bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg">

            <img src="https://www.tecnacional.edu.ni/media/uploads/2016/11/18/logo-inatec-2016.png" alt=""  class=" w-60 ml-4">
            <div style="display: grid;place-items:center;">
                <label class="text-4xl m-4" for="">Manual de usuario</label>
                <a href="pdf/Manual De Usuario.pdf" download="Manual De Usuario.pdf" type="button" style="width: 90%; background:rgb(6, 178, 190); padding:5px; border-radius:50px; font-size:20px; color:white; font-weight:bold; text-align:center;" class="m-4">Descargar manual ↓</a>
            </div>
            <div class="">
                <embed src="pdf/Manual De Usuario.pdf#toolbar=0&navpanes=0&scrollbar=0;&zoom=100" type="application/pdf"
                    width="100%" height="600px" />
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

