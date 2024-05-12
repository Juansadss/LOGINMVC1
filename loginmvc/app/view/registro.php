<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Se incluye una hoja de estilos externa -->
</head>
<body>
    <div class="container">
        <h2>Registro de Usuarios</h2> <!-- Título del formulario -->
        <form action="../controller/UsuarioController.php" method="post"> <!-- Formulario que envía los datos al controlador de usuarios mediante el método POST -->
            <input type="hidden" name="action" value="registrar"> <!-- Campo oculto que indica la acción que se realizará en el controlador -->
            <input type="email" name="email" placeholder="Email" required><br><br> <!-- Campo para ingresar el email del usuario -->
            <input type="password" name="password" placeholder="Contraseña" required><br><br> <!-- Campo para ingresar la contraseña del usuario -->
            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required><br><br> <!-- Campo para confirmar la contraseña -->
            <button type="submit">Registrarse</button><br><br> <!-- Botón para enviar el formulario -->
            <a href="login.php">¿Ya tienes una cuenta? Inicia sesión aquí</a> <!-- Enlace para redirigir al usuario a la página de inicio de sesión -->
        </form>
    </div>
</body>
</html>
