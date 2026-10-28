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

                    <table class="w-full text-left border-collapse">

                        {{-- Tabel hoofd --}}
                        <thead>
                            <tr class="bg-gray-100 border-b-2 border-gray-200">

                                <th class="px-4 py-3 font-semibold text-gray-700">
                                    Naam
                                </th>

                                <th class="px-4 py-3 font-semibold text-gray-700">
                                    Contactpersoon
                                </th>

                                <th class="px-4 py-3 font-semibold text-gray-700">
                                    Leveranciernummer
                                </th>

                                <th class="px-4 py-3 font-semibold text-gray-700">
                                    Mobiel
                                </th>

                                <th class="px-4 py-3 font-semibold text-gray-700 text-center">
                                    Aantal verschillende producten
                                </th>

                                <th class="px-4 py-3 font-semibold text-gray-700 text-center">
                                    Toon producten
                                </th>

                            </tr>
                        </thead>

                        {{-- Tabel inhoud --}}
                        <tbody>

                            @forelse ($leverancierPagina as $leverancier)

                                <tr class="border-b border-gray-200 hover:bg-gray-50">

                                    {{-- Naam --}}
                                    <td class="px-4 py-3">
                                        {{ $leverancier->NaamLeverancier }}
                                    </td>

                                    {{-- Contactpersoon --}}
                                    <td class="px-4 py-3">
                                        {{ $leverancier->Contactpersoon }}
                                    </td>

                                    {{-- Leveranciernummer --}}
                                    <td class="px-4 py-3">
                                        {{ $leverancier->Leveranciernummer }}
                                    </td>

                                    {{-- Mobiel --}}
                                    <td class="px-4 py-3">
                                        {{ $leverancier->Mobiel }}
                                    </td>

                                    {{-- Aantal producten --}}
                                    <td class="px-4 py-3 text-center">
                                        {{ $leverancier->AantalVerschillendeProducten }}
                                    </td>


                                    {{-- Toon producten --}}
                                    <td class="px-4 py-3">
                                        <a href="{{ route('leverancier.geleverdeproducten', $leverancier->LeverancierId) }}"
                                            class="btn btn-outline-danger btn-sm">
                                            X
                                        </a>
                                    </td>
                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6" class="px-4 py-6 text-center text-gray-500">

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