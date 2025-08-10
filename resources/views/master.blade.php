<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <section>
        <form action="{{ route('calculate') }}" method="post">
            @csrf
            <label for="num01">Insira o primeiro valor:</label>
            <input type="number" name="num01" id="num01" required>
            <br>

            <label for="num02">Insira o segundo valor:</label>
            <input type="number" name="num02" id="num02" required>
            <br>

            <label for="operations">Selecione a operação:</label>
            <select name="operations" id="operations">
                <option value="+">Somar</option>
                <option value="-">Subtrair</option>
                <option value="*">Multiplicar</option>
                <option value="/">Dividir</option>
            </select>
            <br>

            <button type="submit">Calcular</button>

            @if (isset($result))
                <div class="result">Resultado: {{ $result }}</div>
            @endif

        </form>
    </section>
</body>
</html>