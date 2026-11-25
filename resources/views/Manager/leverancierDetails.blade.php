<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ $title }}
                    <div class="overflow-x-auto p-6">
                        <table class="w-full text-left border-collapse border-2 border-black">
                            <tbody>
                                <tr class="border-b-2 border-black">
                                    <th class="w-1/3 bg-gray-100 px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Naam
                                    </th>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ $allLeverancierUpdateId->NaamLeverancier ?? '' }}
                                    </td>
                                </tr>

                                <tr class="border-b-2 border-black">
                                    <th class="bg-gray-100 px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Contactpersoon
                                    </th>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ $allLeverancierUpdateId->Contactpersoon ?? '-' }}
                                    </td>
                                </tr>

                                <tr class="border-b-2 border-black">
                                    <th class="bg-gray-100 px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Leveranciernummer
                                    </th>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ $allLeverancierUpdateId->Leveranciernummer ?? '-' }}
                                    </td>
                                </tr>

                                <tr class="border-b-2 border-black">
                                    <th class="bg-gray-100 px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Mobiel
                                    </th>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ $allLeverancierUpdateId->Mobiel ?? '-' }}
                                    </td>
                                </tr>

                                <tr class="border-b-2 border-black">
                                    <th class="bg-gray-100 px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Straatnaam
                                    </th>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ $allLeverancierUpdateId->Straat ?? '-' }}
                                    </td>
                                </tr>

                                <tr class="border-b-2 border-black">
                                    <th class="bg-gray-100 px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Huisnummer
                                    </th>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ $allLeverancierUpdateId->Huisnummer ?? '-' }}
                                    </td>
                                </tr>

                                <tr class="border-b-2 border-black">
                                    <th class="bg-gray-100 px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Postcode
                                    </th>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ $allLeverancierUpdateId->Postcode ?? '-' }}
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bg-gray-100 px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Stad
                                    </th>
                                    <td class="px-4 py-3 text-gray-900">
                                        {{ $allLeverancierUpdateId->Stad ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>