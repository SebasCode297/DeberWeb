<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda: "{{ $termino }}"</title>
</head>
<body>
    <h1>Resultados de búsqueda</h1>
    
    <form action="/buscar" method="GET">
        <input type="text" name="q" value="{{ $termino }}" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
    
    @if($termino)
        <h2>Resultados para "{{ $termino }}"</h2>
        <ul>
            @foreach($resultados as $resultado)
                <li>{{ $resultado }}</li>
            @endforeach
        </ul>
    @else
        <p>Ingrese un término de búsqueda</p>
    @endif
</body>
</html>