<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Levering Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                {{-- Foutmelding voor Scenario 2 (Product niet actief / wordt niet meer geproduceerd) --}}
                @if (session('error'))
                    <div class="mb-6 rounded-lg bg-red-100 p-4 text-sm text-red-700 border border-red-400" role="alert">
                        <strong>Fout:</strong> {{ session('error') }}
                        <p class="mt-1 text-xs text-red-600">U wordt over 4 seconden teruggestuurd naar het overzicht...</p>
                    </div>

                    {{-- JavaScript voor Scenario 2: Automatische redirect na 4 seconden --}}
                    @if(isset($leverancierId))
                        <script>
                            setTimeout(function () {
                                window.location.href = "{{ route('leverancier.geleverdeproducten', $leverancierId) }}";
                            }, 4000);
                        </script>
                    @endif
                @endif

                {{-- Succesmelding --}}
                @if (session('success'))
                    <div class="mb-6 rounded-lg bg-green-100 p-4 text-sm text-green-700 border border-green-400"
                        role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Gegevens van Product en Leverancier (Gebaseerd op de SQL aliassen) --}}
                <div class="mb-6 space-y-2 text-gray-700 bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p>
                        <strong>Product:</strong>
                        {{ $product->Naam ?? ($leverancier[0]->NaamProduct ?? 'Onbekend product') }}
                    </p>

                    <p>
                        <strong>Leverancier:</strong>
                        {{ $leverancier[0]->NaamLeverancier ?? '' }}
                    </p>

                    <p>
                        <strong>Contactpersoon:</strong>
                        {{ $leverancier[0]->ContactPersoon ?? '' }}
                    </p>

                    <p>
                        <strong>Mobiel:</strong>
                        {{ $leverancier[0]->Mobiel ?? '' }}
                    </p>
                </div>

                {{-- Formulier voor Nieuwe Levering (Actie wijst nu naar de POST route) --}}
                <form action="{{ route('leverancier.nieuweLevering') }}" method="POST" class="space-y-4">
                    @csrf

                    <input type="hidden" name="productId" value="{{ $product->Id ?? ($productId ?? '') }}">
                    <input type="hidden" name="leverancierId" value="{{ $leverancierId ?? '' }}">

                    {{-- Aantal producteenheden --}}
                    <div>
                        <label for="aantal" class="block text-sm font-medium text-gray-700">Aantal
                            producteenheden</label>
                        <input type="number" name="aantal" id="aantal" value="{{ old('aantal') }}" required min="1"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('aantal') border-red-500 @enderror">
                        @error('aantal')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Datum eerstvolgende levering --}}
                    <div>
                        <label for="datumEerstVolgendeLevering" class="block text-sm font-medium text-gray-700">Datum
                            eerstvolgende levering</label>
                        <input type="date" name="datumEerstVolgendeLevering" id="datumEerstVolgendeLevering"
                            value="{{ old('datumEerstVolgendeLevering') }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('datumEerstVolgendeLevering') border-red-500 @enderror">
                        @error('datumEerstVolgendeLevering')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Knoppen (Sla op, Terug, Home) --}}
                    <div class="flex items-center justify-between pt-4">
                        <button type="submit"
                            class="inline-flex items-center rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Sla op
                        </button>

                        <div class="flex items-center gap-4">
                            <a href="{{ isset($leverancierId) ? route('leverancier.geleverdeproducten', $leverancierId) : url()->previous() }}"
                                class="inline-flex items-center rounded-lg bg-gray-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2">
                                Terug
                            </a>

                            <a href="{{ route('dashboard') }}"
                                class="inline-flex items-center rounded-lg bg-gray-200 px-5 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2">
                                Home
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>