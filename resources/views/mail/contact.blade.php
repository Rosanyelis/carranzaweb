<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <p>Hola! Se ha contactado un posible cliente.</p>
    <p>Estos son los datos del cliente:</p>
    <ul>
        <li>Nombre: {{ $name }}</li>
        <li>Telefono: {{ $phone }}</li>
        <li>Compañia: {{ $company }}</li>
        <li>Asunto: {{ $subject }}</li>
        <li>Email: {{ $email }}</li>
        <li>Mensaje: {{ $msj }}</li>
    </ul>
</body>
</html>
