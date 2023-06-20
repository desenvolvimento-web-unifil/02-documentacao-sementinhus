<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Você está logado!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12">
    <div class="max-w-7xl mx-auto flex sm:px-6 lg:px-8">
        <div class="w-1/4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                <div class="p-6 space-y-4">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Tipos de Jogos</h2>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-500">Apostas Esportivas</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-500">Caça-Níqueis</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-500">Poker</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-500">Roleta</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-red-500">Bingo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


</x-app-layout>
