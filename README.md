# Proyecto de Registro y Login de Usuarios

## Descripción
Este proyecto proporciona un sistema básico de registro y autenticación de usuarios utilizando PHP y MySQL. Permite a los usuarios registrarse en el sistema, iniciar sesión y acceder a áreas protegidas
usando XAMPP, PHP Y MYSQL.

## Instalación
1. Clona este repositorio en tu máquina local.
2. Configura la base de datos MySQL con los siguientes detalles:

- servidor = "localhost"; // Dirección del servidor de la base de datos
- db = "login_web"; // Nombre de la base de datos
- username = "root"; // Nombre de usuario de la base de datos
- password = "hola"; // Contraseña de la base de datos

3. Copia el script SQL proporcionado en el archivo `Script.txt`  para crear la tabla de usuarios y la Base de Datos en phpmyadmin en una de las opciones del Menú de arriba que normalmente se llama "SQL" .
4. Asegúrate de que tu servidor web y tu MYSQL (como Apache y phpmyadmin) esté configurado correctamente y que PHP esté instalado.
5. Navega hasta la carpeta raíz del proyecto en tu servidor local.

## Configuración
1. Asegúrate de que las variables de conexión a la base de datos en el archivo `conexion.php` sean correctas.
2. Puedes personalizar el diseño y la apariencia del proyecto modificando los archivos CSS en la carpeta `styles`.

## Ejemplos de Uso
- **Registro de Usuarios:** Accede a `registro.php` para registrar un nuevo usuario proporcionando un correo electrónico y una contraseña.
- **Inicio de Sesión:** Accede a `login.php` para iniciar sesión con un correo electrónico y una contraseña previamente registrados.
- Después del inicio de sesión exitoso, serás redirigido a `bienvenido.php`, donde se muestra un mensaje de bienvenida.

## Contribución
Si deseas contribuir a este proyecto, sigue los pasos descritos en la sección de Contribución del archivo `README.md`
- **Atte: Mauricio G. Coca A.**
                                                   


