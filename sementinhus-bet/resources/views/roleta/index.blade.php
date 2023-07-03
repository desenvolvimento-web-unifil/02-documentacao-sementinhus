<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roleta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Faça sua aposta na roleta!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <div class="max-w-7xl mx-auto flex sm:px-6 lg:px-8">
            <div class="w-1/4">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                    <div class="p-6 space-y-4">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Faça sua aposta</h2>
                        <form action="{{ route('roleta.aposta') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Número:</label>
                                <input type="number" name="numero" id="numero" class="form-input rounded-md shadow-sm">
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Apostar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
