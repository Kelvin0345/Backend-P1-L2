<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overzicht Leverancier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Product Informatie -->
                <div class="p-6 border-b border-gray-200">
                    
                    <div class="text-gray-700 space-y-1">
                        <p><strong>NaamLeverancier:</strong> {{ $leverancier[0]['NaamLeverancier'] }}</p>
                        <p><strong>ContactPersoon:</strong> {{ $leverancier[0]['Contactpersoon'] }}</p>
                        <p><strong>LeverancierNummer:</strong> {{ $leverancier[0]['LeverancierNummer'] }}</p>
                        <p><strong>Mobiel:</strong> {{ $leverancier[0]['Mobiel'] }}</p>
                        <p><strong>Datum eerstvolgende levering:</strong> {{ $leverancier[0]['DatumEerstVolgendeLevering'] }}</p>
                    </div>
                </div>

                <!-- Allergenen Tabel -->
                <div class="overflow-x-auto p-6">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>NaamProduct</th>
                                <th>DatumLaatsteLevering</th>
                                <th>Aantal</th>
                                <th>DatumEerstVolgendeLevering</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($leverancier as $leveranciers)
                                @if ($leverancier->DatumEerstVolgendeLevering != NULL)
                                    <tr>
                                        <td>{{ $leveranciers->NaamProduct }}</td>
                                        <td>{{ $leveranciers->DatumLaatsteLevering }}</td>
                                        <td>{{ $leveranciers->Aantal }}</td>
                                        <td>{{ $leveranciers->DatumEerstVolgendeLevering }}</td>

                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="2" class="text-center py-4 text-gray-500">
                                            Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: 30-04-2023
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center py-4 text-gray-500">
                                        Geen allergenen gevonden
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>


                    <div class="mt-6 flex justify-start">
                        <a href="{{ route('magazijnmedewerker.index') }}" class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-5 py-3
                                text-sm font-semibold text-white shadow-sm
                                transition duration-200
                                hover:bg-indigo-700 hover:shadow-md
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
    </div>
</x-app-layout>