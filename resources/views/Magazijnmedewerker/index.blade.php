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
                                <th class="px-4 py-3 font-semibold text-gray-700 text-center">Allergeen Info</th>
                                <th class="px-4 py-3 font-semibold text-gray-700 text-center">Leverancier Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($magazijnen as $magazijn)

                                <tr>
                                    <td>
                                        {{ $magazijn->Barcode }}
                                    </td>

                                    <td class="fw-semibold">
                                        {{ $magazijn->Naam }}
                                    </td>

                                    <td>
                                        {{ $magazijn->VerpakkingsEenheidInKilogram }}
                                    </td>

                                    <td>
                                        {{ $magazijn->AantalAanwezig }}
                                    </td>

                                    {{-- <td>
                                        <a href="{{ route('magazijnmedewerker.allergenen', $magazijn->ProductId) }}"
                                            class="btn btn-outline-primary btn-sm">
                                            ?
                                        </a>
                                    </td>

                                    <td>
                                        <a href="{{ route('magazijn.leverantie', $magazijn->ProductId) }}"
                                            class="btn btn-outline-primary btn-sm">
                                            ?
                                        </a>
                                    </td> --}}
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">
                                        Geen magazijngegevens gevonden.
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