<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Geleverde Producten') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @php
                    // Controleer of er daadwerkelijk producten zijn
                    $heeftProducten = count($geleverdeProducten) > 0 && !empty($geleverdeProducten[0]->NaamProduct);
                @endphp

                @if (session('success'))
                    <div id="success-alert"
                        class="mb-6 rounded-lg bg-green-100 p-4 text-sm text-green-700 border border-green-400 transition-opacity duration-500"
                        role="alert">
                        {{ session('success') }}
                    </div>

                    <script>
                        setTimeout(function () {
                            const alert = document.getElementById('success-alert');
                            if (alert) {
                                
                                alert.style.opacity = '0';
                                
                                setTimeout(function () {
                                    alert.remove();
                                }, 500);
                            }
                        }, 2000); 
                    </script>
                @endif

                {{-- Gegevens van de leverancier --}}
                @if(count($geleverdeProducten) > 0)
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
                @endif

                {{-- Producten tabel --}}
                <div class="overflow-x-auto p-6">
                    <table class="w-full border-collapse border-2 border-black">
                        <thead>
                            <tr class="bg-gray-100 border-b-2 border-black text-center">
                                <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                    Naam product
                                </th>
                                <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                    Aantal in Magazijn
                                </th>
                                <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                    Verpakkingseenheid
                                </th>
                                <th class="px-4 py-3 font-semibold text-gray-900 border-r-2 border-black">
                                    Laatste levering
                                </th>
                                <th class="px-4 py-3 font-semibold text-gray-900">
                                    Nieuwe levering
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($heeftProducten)
                                @foreach ($geleverdeProducten as $product)
                                    <tr class="border-b-2 border-black hover:bg-gray-50 text-center">
                                        <td class="px-4 py-3 border-r-2 border-black">
                                            {{ $product->NaamProduct }}
                                        </td>

                                        <td class="px-4 py-3 border-r-2 border-black">
                                            {{ $product->AantalAanwezig }}
                                        </td>

                                        <td class="px-4 py-3 border-r-2 border-black">
                                            {{ $product->VerpakkingsEenheid }} KG
                                        </td>

                                        <td class="px-4 py-3 border-r-2 border-black">
                                            {{ $product->DatumLaatsteLevering }}
                                        </td>

                                        <td class="px-4 py-3">
                                            <a href="{{ route('leverancier.nieuweLeveringFormulier', ['productId' => $product->ProductId, 'leverancierId' => $product->LeverancierId]) }}"
                                                class="inline-flex items-center justify-center text-3xl font-bold text-black hover:scale-125 transition-transform duration-200 p-2"
                                                title="Nieuwe levering toevoegen">
                                                +
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="px-4 py-6 text-center text-gray-700 border-b-2 border-black">
                                        <p class="text-base font-medium">Dit bedrijf heeft tot nu toe geen producten
                                            geleverd aan Jamin</p>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                @if (!$heeftProducten)
                    <script>
                        setTimeout(function () {
                            window.location.href = "{{ route('Leverancierpagina.index') }}";
                        }, 3000);
                    </script>
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

                        Terug naar Leverancier pagina
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>