<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #000; }
        .title { font-size: 20px; font-weight: bold; background: #ddd; padding: 10px; color: #004D5A; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { text-align: left; padding: 8px; vertical-align: top; }
        th { background: #0D4D58; color: white; width: 250px; }
        .section-title { font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>

<div class="title">LIBRO DE RECLAMACIONES</div>

<p>
    Estimado Cliente,<br>
    Gracias por contactarnos, sus comentarios son muy importantes para nosotros.<br>
    Confirmamos la recepción de su solicitud N.º <strong>{{ $book->ticket }}</strong><br>
    Dentro del plazo de 15 días calendario daremos respuesta a su requerimiento.
</p>

<table>
    <tr>
        <th>Número de Reclamación:</th>
        <td>{{ $book->ticket }}</td>
        <th>Fecha Reclamación:</th>
        <td>{{ \Carbon\Carbon::parse($book->created_at)->format('d-m-Y') }}</td>
    </tr>
</table>

<h3 class="section-title">Empresa</h3>
<table>
    <tr><th>Razon Social:</th><td>Aybar Corp & S.A.C.</td></tr>
    <tr><th>Dirección Legal:</th><td>Av. Circunvalación Del Golf Los Incas 134 Patio Panorama, Santiago de Surco</td></tr>
    <tr><th>RUC:</th><td>20080385813</td></tr>
</table>

<h3 class="section-title">1. Identificación del Consumidor Reclamante</h3>
<table>
    <tr><th>Nombre Reclamante:</th><td>{{ $book->firstname }} {{ $book->lastname }}</td></tr>
    <tr><th>Tipo de Documento:</th><td>{{ $book->document_type }}</td></tr>
    <tr><th>Número de Documento:</th><td>{{ $book->document_number }}</td></tr>
    <tr><th>Domicilio:</th><td>{{ $book->address }}</td></tr>
    <tr><th>Correo electrónico:</th><td><a href="mailto:{{ $book->email }}">{{ $book->email }}</a></td></tr>
    <tr><th>Número de Teléfono:</th><td>{{ $book->phone }}</td></tr>
</table>

<h3 class="section-title">2. Identificación del bien contratado</h3>
<table>
    <tr><th>Monto Reclamado:</th><td>{{ $book->claimed_amount }}</td></tr>
    <tr><th>Tipo de Moneda:</th><td>{{ $book->currency_type }}</td></tr>
    <tr><th>Nombre de Oficina:</th><td>{{ $book->office_address }}</td></tr>
    <tr><th>Descripción Servicio:</th><td>{{ $book->product_or_service_description }}</td></tr>
</table>

<h3 class="section-title">3. Detalle de la reclamación</h3>
<table>
    <tr><th>Tipo:</th><td>{{ $book->complaint_type }}</td></tr>
    <tr><th>Detalle:</th><td>{{ $book->complaint_details }}</td></tr>
    <tr><th>Pedido:</th><td>{{ $book->complaint_request }}</td></tr>
</table>

</body>
</html>
