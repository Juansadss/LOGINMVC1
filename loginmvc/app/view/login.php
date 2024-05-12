<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Se incluye una hoja de estilos externa -->
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2> <!-- Título del formulario -->
        <form action="../controller/UsuarioController.php" method="post"> <!-- Formulario que envía los datos al controlador de usuarios mediante el método POST -->
            <input type="hidden" name="action" value="login"> <!-- Campo oculto que indica la acción que se realizará en el controlador -->
            <input type="email" name="email" placeholder="Email" required><br><br> <!-- Campo para ingresar el email del usuario -->
            <input type="password" name="password" placeholder="Contraseña" required><br><br> <!-- Campo para ingresar la contraseña del usuario -->
            <button type="submit">Iniciar Sesión</button><br><br> <!-- Botón para enviar el formulario -->
            <a href="registro.php">¿No tienes una cuenta? Regístrate aquí</a> <!-- Enlace para redirigir al usuario a la página de registro -->
        </form>
    </div>
</body>
</html>
