<!DOCTYPE html>
<html>
<head>
    <title>Usuario {{ $usuario['id'] }}</title>
</head>
<body>
    <h1>Detalles del Usuario</h1>
    
    <ul>
        <li>ID: {{ $usuario['id'] }}</li>
        <li>Nombre: {{ $usuario['nombre'] }}</li>
        <li>Email: {{ $usuario['email'] }}</li>
    </ul>
    
    <a href="/buscar?q=usuario+{{ $usuario['id'] }}">Buscar contenido relacionado</a>
</body>
</html>