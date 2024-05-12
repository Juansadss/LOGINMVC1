<?php
require_once('../model/UsuarioModel.php');

// Controlador para la lógica relacionada con el usuario
class UsuarioController {
    // Función para iniciar sesión
    public function login($email, $password) {
        $model = new UsuarioModel(); // Se instancia el modelo de usuario
        $usuario = $model->login($email, $password); // Se intenta iniciar sesión con el modelo de usuario
        if ($usuario) { // Si se encuentra un usuario
            session_start(); // Se inicia la sesión
            $_SESSION['usuario'] = $usuario; // Se guarda la información del usuario en la sesión
            header("Location: ../view/bienvenido.php"); // Se redirige al usuario a la página de bienvenida
            exit(); // Se finaliza el script
        } else {
            echo "Usuario no registrado o contraseña incorrecta"; // Se muestra un mensaje de error si el usuario no está registrado o la contraseña es incorrecta
            header("refresh:1;url=../view/login.php"); // Se redirige al usuario de vuelta a la página de inicio de sesión después de 1 segundo
        }
    }

    // Función para registrar un nuevo usuario
    public function registrar($email, $password, $confirm_password) {
        if ($password != $confirm_password) { // Si las contraseñas no coinciden
            echo "Las contraseñas no coinciden."; // Se muestra un mensaje de error
            header("refresh:1;url=../view/registro.php"); // Se redirige al usuario de vuelta a la página de registro después de 1 segundo
            exit(); // Se finaliza el script
        }

        $model = new UsuarioModel(); // Se instancia el modelo de usuario
        if ($model->registrar($email, $password)) { // Se intenta registrar al usuario con el modelo de usuario
            echo "Usuario registrado exitosamente."; // Se muestra un mensaje de éxito si el registro es exitoso
            header("refresh:1;url=../view/login.php"); // Se redirige al usuario a la página de inicio de sesión después de 1 segundo
        } else {
            echo "Error al registrar usuario."; // Se muestra un mensaje de error si hay un problema al registrar al usuario
        }
    }
}

session_start(); // Se inicia la sesión

if (isset($_POST['action'])) { // Si se ha enviado una acción mediante POST
    require_once('UsuarioController.php'); // Se incluye el archivo del controlador de usuario
    $controller = new UsuarioController(); // Se instancia el controlador de usuario

    if ($_POST['action'] === 'login') { // Si la acción es iniciar sesión
        $controller->login($_POST['email'], $_POST['password']); // Se llama a la función de inicio de sesión del controlador
    } elseif ($_POST['action'] === 'registrar') { // Si la acción es registrar
        $controller->registrar($_POST['email'], $_POST['password'], $_POST['confirm_password']); // Se llama a la función de registro del controlador
    }
}
?>
