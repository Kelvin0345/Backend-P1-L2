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

                    {{-- Leverancier tabel --}}
                    <div class="overflow-x-auto p-6">

                        <table class="w-full text-left border-collapse border-2 border-black">

                            <thead>
                                <tr class="bg-gray-100 border-b-2 border-black text-center">

                                    <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Naam
                                    </th>

                                    <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Contactpersoon
                                    </th>

                                    <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Leveranciernummer
                                    </th>

                                    <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Mobiel
                                    </th>

                                    <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                        Leverancier Details
                                    </th>

                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($allLeverancierUpdate as $allLeverancierUpdates)

                                    <tr class="text-center border-b-2 border-black">

                                        {{-- Naam --}}
                                        <td class="px-4 py-3 border-r-2 border-black">
                                            {{ $allLeverancierUpdates->NaamLeverancier }}
                                        </td>

                                        {{-- Contactpersoon --}}
                                        <td class="px-4 py-3 border-r-2 border-black">
                                            {{ $allLeverancierUpdates->Contactpersoon }}
                                        </td>

                                        {{-- Leveranciernummer --}}
                                        <td class="px-4 py-3 border-r-2 border-black">
                                            {{ $allLeverancierUpdates->Leveranciernummer }}
                                        </td>

                                        {{-- Mobiel --}}
                                        <td class="px-4 py-3 border-r-2 border-black">
                                            {{ $allLeverancierUpdates->Mobiel }}
                                        </td>

                                        <a href="{{ route('Manager.leverancierDetails', ['id' => $allLeverancierUpdates->Id]) }}"
                                            class="inline-flex items-center justify-center text-3xl font-bold text-black hover:scale-125 transition-transform duration-200 p-2"
                                            title="Leverancier details">
                                            ✏️
                                        </a>




                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                                            Geen leveranciers gevonden.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    {{-- Home knop --}}
                    <div class="p-6 pt-0 flex justify-end">

                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center rounded-lg bg-gray-200 px-5 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2">

                            Home

                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>