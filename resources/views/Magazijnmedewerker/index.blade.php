@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ $title }}
                </div>
            </div>
        </div>
        
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                </div>
            <thead>
                <tr>
                    
                    <th>Barcode</th>
                    <th>naam</th>
                    <th>verpakkingeenheid</th>
                    <th>Aantalaanwezig</th>
                    <th>Allergeen Info</th>
                    <th>LeverancierInfo</th>
                    

                </tr>
            </thead>
            <tbody>
                
                <tr>
                     
                    
                        
                </tr>
                
                    

               
            </tbody>
    
              
        </div>
        
    </div>

   



</x-app-layout>