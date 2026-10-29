<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overzicht Leveranciers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                {{-- Titel --}}
                <div class="p-6 text-gray-900 font-bold text-lg border-b border-gray-200">
                    {{ $title }}
                </div>

                {{-- Leverancier tabel --}}
                <div class="overflow-x-auto p-6">

                    {{-- Tabel met dikke zwarte buitenrand --}}
                    <table class="w-full text-left border-collapse border-2 border-black">

                        {{-- Tabel hoofd (alle koppen gecentreerd) --}}
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
                                    Aantal verschillende producten
                                </th>
                                <th class="px-4 py-3 font-semibold text-gray-900">
                                    Toon producten
                                </th>
                            </tr>
                        </thead>

                        {{-- Tabel inhoud --}}
                        <tbody>
                            @forelse ($leverancierPagina as $leverancier)

                                <tr class="border-b-2 border-black hover:bg-gray-50">
                                    
                                    {{-- Naam --}}
                                    <td class="px-4 py-3 border-r-2 border-black">
                                        {{ $leverancier->NaamLeverancier }}
                                    </td>

                                    {{-- Contactpersoon --}}
                                    <td class="px-4 py-3 border-r-2 border-black">
                                        {{ $leverancier->Contactpersoon }}
                                    </td>

                                    {{-- Leveranciernummer --}}
                                    <td class="px-4 py-3 border-r-2 border-black">
                                        {{ $leverancier->Leveranciernummer }}
                                    </td>

                                    {{-- Mobiel --}}
                                    <td class="px-4 py-3 border-r-2 border-black">
                                        {{ $leverancier->Mobiel }}
                                    </td>

                                    {{-- Aantal producten --}}
                                    <td class="px-4 py-3 text-center border-r-2 border-black">
                                        {{ $leverancier->AantalVerschillendeProducten }}
                                    </td>

                                    {{-- Toon producten --}}
                                    <td class="px-4 py-3 text-center">
                                        <a href="{{ route('leverancier.geleverdeproducten', $leverancier->LeverancierId) }}"
                                            class="inline-flex items-center justify-center text-3xl hover:scale-125 transition-transform duration-200 p-2"
                                            title="Toon producten">
                                            📦
                                        </a>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-6 text-center text-gray-500 border-b-2 border-black">
                                        Geen leveranciers gevonden.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>