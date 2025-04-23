<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th {
            background-color: #0D4D58;
            color: white;
            text-align: left;
            padding: 8px;
            width: 25%;
        }
        td {
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }
        .title {
            font-size: 20px;
            font-weight: bold;
            background-color: #ddd;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="title">FORMULARIO DE CLIENTE</div>

<table>
    <tr><th>NOMBRES:</th><td>{{ $Customer->names }}</td></tr>
    <tr><th>DNI:</th><td>{{ $Customer->dni }}</td></tr>
    <tr><th>CELULAR:</th><td>{{ $Customer->cellphone }}</td></tr>
    <tr><th>PROYECTO  </th><td>{{ $Customer->project->title }}</td></tr>
    <tr><th>FECHA:</th><td>{{ \Carbon\Carbon::now()->format('d - m - Y') }}</td></tr>
    <tr><th>MENSAJE:</th><td>{{ $Customer->message }}</td></tr>
</table>

</body>
</html>
