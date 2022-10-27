<!DOCTYPE html>
<html>
<head>
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de: {{ $msg['name'] }}</p><br>
    <p>El correo de la persona que se quiere poner en contacto contigo es: {{ $msg['email'] }}</p><br><br>
    <strong>Asunto: </strong> {{ $msg['subject'] }}<br>
    <strong>Contenido: </strong> {{ $msg['content'] }}
</body>
</html>