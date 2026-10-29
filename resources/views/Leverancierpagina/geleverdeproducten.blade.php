<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Geleverde Producten') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                {{-- Gegevens van de leverancier --}}
                @if (count($geleverdeProducten) > 0)
                    <div class="p-6 border-b border-gray-200">
                        <div class="text-gray-700 space-y-1">
                            <p>
                                <strong>Naam leverancier:</strong>
                                {{ $geleverdeProducten[0]->NaamLeverancier }}
                            </p>

                            <p>
                                <strong>Contactpersoon:</strong>
                                {{ $geleverdeProducten[0]->ContactPersoon }}
                            </p>

                            <p>
                                <strong>Leveranciernummer:</strong>
                                {{ $geleverdeProducten[0]->LeverancierNummer }}
                            </p>

                            <p>
                                <strong>Mobiel:</strong>
                                {{ $geleverdeProducten[0]->Mobiel }}
                            </p>
                        </div>
                    </div>

                    {{-- Producten tabel --}}
                    <div class="overflow-x-auto p-6">
                        <table class="table w-full">
                            <thead>
                                <tr class="border-b text-left">
                                    <th class="py-2">Naam product</th>
                                    <th class="py-2">Aantal in Magazijn</th>
                                    <th class="py-2">Verpakkingseenheid</th>
                                    <th class="py-2">Laatste levering</th>
                                    <th class="py-2">Nieuwe levering</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($geleverdeProducten as $product)
                                    <tr class="border-b">
                                        <td class="py-2">
                                            {{ $product->NaamProduct}}
                                        </td>

                                        <td class="py-2">
                                            {{ $product->AantalAanwezig }}
                                        </td>

                                        <td class="py-2">
                                            {{ $product->VerpakkingsEenheid   }}

                                        </td>

                                        <td class="py-2">
                                            {{ $product->DatumLaatsteLevering }}
                                        </td>
                                        <td class="py-2 text-center">
                                            <a href="{{ route('leverancier.nieuweLeveringFormulier', ['productId' => $product->ProductId, 'leverancierId' => $product->LeverancierId]) }}"
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition duration-200 shadow-sm"
                                                title="Nieuwe levering toevoegen">
                                                +
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="p-6 text-gray-700">
                        Er zijn geen geleverde producten gevonden voor deze leverancier.
                    </div>
                @endif

                {{-- Terugknop --}}
                <div class="p-6 pt-0 flex justify-start">
                    <a href="{{ route('Leverancierpagina.index') }}" class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-5 py-3
                              text-sm font-semibold text-white shadow-sm
                              transition duration-200 hover:bg-indigo-700 hover:shadow-md
                              focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10h18M3 10l9-7 9 7M5 10v10h14V10" />
                        </svg>

                        Terug naar magazijn
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>