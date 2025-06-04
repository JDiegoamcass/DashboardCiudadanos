<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Ciudadanos y Ciudades</title>
</head>
<body>
    <h1>Reporte de Ciudadanos y Ciudades</h1>

<h2>Ciudadanos Registrados:</h2>
<ul>
    @foreach($citizens as $citizen)
        <li>{{ $citizen->first_name }} {{ $citizen->last_name }} - {{ $citizen->city->name ?? 'Sin ciudad' }}</li>
    @endforeach
</ul>

<h2>Ciudades Registradas:</h2>
<ul>
    @foreach($cities as $city)
        <li>{{ $city->name }}</li>
    @endforeach
</ul>
</body>
</html>