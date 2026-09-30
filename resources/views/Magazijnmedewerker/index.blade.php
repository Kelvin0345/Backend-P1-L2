@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Magazijnmedewerker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900 font-bold text-lg border-b border-gray-200">
                    {{ $title }}
                </div>
                
                
                <div class="overflow-x-auto p-6">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100 border-b-2 border-gray-200">
                                <th class="px-4 py-3 font-semibold text-gray-700">Barcode</th>
                                <th class="px-4 py-3 font-semibold text-gray-700">Naam</th>
                                <th class="px-4 py-3 font-semibold text-gray-700">Verpakkingseenheid</th>
                                <th class="px-4 py-3 font-semibold text-gray-700">Aantal aanwezig</th>
                                <th class="px-4 py-3 font-semibold text-gray-700" >Allergeen Info</th>
                                <th class="px-4 py-3 font-semibold text-gray-700">Leverancier Info</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50 transition">
                                <td class="px-4 py-3 text-gray-600">s</td>
                                <td class="px-4 py-3 text-gray-600">s</td>
                                <td class="px-4 py-3 text-gray-600">s</td>
                                <td class="px-4 py-3 text-gray-600">s</td>
                                <td class="px-4 py-3 text-gray-600">
                                <a href="/Allergeen" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal" >Allergeen</a>                                </td>
                                <td class="px-4 py-3 text-gray-600">s</td>                      
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>