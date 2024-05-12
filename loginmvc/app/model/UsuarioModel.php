<?php
require_once('../../core/conexion.php');

class UsuarioModel {
    /**
     * Realiza el inicio de sesión.
     * 
     * $email    Correo electrónico del usuario.
     * $password Contraseña del usuario.
     * Retorna los datos del usuario si la autenticación es exitosa, de lo contrario, retorna false.
     */
    public function login($email, $password) {
        global $conexion; // Se accede a la variable global de conexión
        $sql = "SELECT * FROM usuarios WHERE email=:email AND password=:password"; // Consulta SQL para buscar el usuario por correo electrónico y contraseña
        $stmt = $conexion->prepare($sql); // Preparar la consulta
        $stmt->bindParam(':email', $email); // Vincular el parámetro :email con el valor de $email
        $stmt->bindParam(':password', $password); // Vincular el parámetro :password con el valor de $password
        $stmt->execute(); // Ejecutar la consulta
        return $stmt->fetch(PDO::FETCH_ASSOC); // Devolver el resultado de la consulta
    }

    /**
     * Registra un nuevo usuario en la base de datos.
     * 
     * $email    Correo electrónico del usuario.
     * $password Contraseña del usuario.
     * Retorna true si el registro es exitoso, de lo contrario, retorna false.
     */
    public function registrar($email, $password) {
        global $conexion; // Se accede a la variable global de conexión
        $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)"; // Consulta SQL para insertar un nuevo usuario
        $stmt = $conexion->prepare($sql); // Preparar la consulta
        $stmt->bindParam(':email', $email); // Vincular el parámetro :email con el valor de $email
        $stmt->bindParam(':password', $password); // Vincular el parámetro :password con el valor de $password
        return $stmt->execute(); // Ejecutar la consulta y devolver true si tiene éxito, de lo contrario, false
    }
}
?>
