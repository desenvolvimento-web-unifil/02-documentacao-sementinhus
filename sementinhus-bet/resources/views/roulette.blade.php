<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roleta') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('roulette.store') }}">
        @csrf

        <div>
            <label for="cor">Cor:</label>
            <select name="cor" id="cor">
                <option value="vermelho">Vermelho</option>
                <option value="preto">Preto</option>
                <option value="branco">Branco</option>
            </select>
        </div>

        <div>
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor" step="0.01" min="0">
        </div>

        <button type="submit">Apostar</button>
    </form>
    
</x-app-layout>