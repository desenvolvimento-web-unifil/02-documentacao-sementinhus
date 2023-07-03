<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roleta') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto mt-8">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8">
            <form method="POST" action="{{ route('roulette.store') }}">
                @csrf

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="mb-6">
                    <label for="cor" class="text-lg font-medium text-gray-800 dark:text-gray-200">Cor:</label>
                    <select name="cor" id="cor" class="mt-2 p-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="vermelho">Vermelho</option>
                        <option value="preto">Preto</option>
                        <option value="branco">Branco</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="valor" class="text-lg font-medium text-gray-800 dark:text-gray-200">Valor:</label>
                    <input type="number" name="valor" id="valor" step="0.01" min="0" class="mt-2 p-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                </div>

                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Apostar</button>
            </form>
        </div>
    </div>
</x-app-layout>
