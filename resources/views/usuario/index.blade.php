<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('usuario') }}
        </h2>
    </x-slot>
    
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="flex bg-white overflow-hidden shadow-xl sm:rounded-lg py-3">
    @foreach($users as $users)
    <div class="max-w-sm rounded overflow-hidden shadow-lg mx-4">
   <img class="w-full" src="https://styde.net/wp-content/uploads/2020/09/news-laravel8.jpg" alt="Sunset in the mountains">
   <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">{{$users->name}}</div>
    <p class="text-gray-700 text-base">
      {{$users->email}}
    </p>

    </div>
   <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
   </div>
</div>
@endforeach
</div>
   </div>
        </div>
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> -->
</x-app-layout>