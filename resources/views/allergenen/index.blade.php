<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overzicht Allergenen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Product Informatie -->
                <div class="p-6 border-b border-gray-200">
                    @foreach ($allergenen as $allergeen)
                        <div class="text-gray-700 space-y-1">
                            <p><strong>Naam:</strong> {{ $allergeen->Naam }}</p>
                            <p><strong>Barcode:</strong> {{ $allergeen->Barcode }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Allergenen Tabel -->
                <div class="overflow-x-auto p-6">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Omschrijving</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($allergenen as $allergeen)
                                <tr>
                                    <td>{{ $allergeen->Naam }}</td>
                                    <td>{{ $allergeen->Omschrijving }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center py-4 text-gray-500">Geen allergenen gevonden</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>