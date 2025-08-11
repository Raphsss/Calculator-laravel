@extends('layouts.master')

@section('title', 'Calculadora')

@section('content')
    <section class="max-w-sm mx-auto bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('calculate') }}" method="post" class="space-y-4">
            @csrf

            <div>
                <label for="num01" class="block text-sm font-medium text-gray-700">Insira o primeiro valor:</label>
                <input type="number" name="num01" id="num01" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="num02" class="block text-sm font-medium text-gray-700">Insira o segundo valor:</label>
                <input type="number" name="num02" id="num02" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="operations" class="block text-sm font-medium text-gray-700">Selecione a operação:</label>
                <select name="operations" id="operations"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="+">Somar</option>
                    <option value="-">Subtrair</option>
                    <option value="*">Multiplicar</option>
                    <option value="/">Dividir</option>
                </select>
            </div>

            <button type="submit"
                class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Calcular
            </button>

            @if (isset($result))
                <div class="result bg-indigo-100 text-indigo-700 p-3 rounded-md text-center font-bold">
                    Resultado: {{ $result }}
                </div>
            @endif
        </form>
    </section>
@endsection