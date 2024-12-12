<?php 

require_once "registroUsuario.php";


if (isset($_POST['enviar'])) {
    if (
        strlen($_POST['user']) >= 1 &&
        strlen($_POST['clave']) >= 1
    ) {
        $usuario = trim($_POST['user']);
        $clave1 = trim($_POST['clave']);

        require_once "../conexion/conexion.php"; // Asegúrate que este archivo conecta correctamente con la base de datos

        // Consulta para verificar si el usuario existe
        $sql = $conex->prepare("SELECT * FROM registros WHERE user = ?");
        $sql->bind_param("s", $usuario); // Bind del usuario ingresado
        $sql->execute();
        $resultado = $sql->get_result();

        // Verificar si se encontró el usuario
        if ($resultado->num_rows > 0) {
            $usuario_encontrado = $resultado->fetch_assoc(); // Obtener los datos del usuario

            // Comparar la contraseña ingresada con la que está en la base de datos
            if ($clave1 === $usuario_encontrado['clave']) {
                // Puedes iniciar una sesión si lo necesitas
                session_start();
                $_SESSION['user'] = $usuario_encontrado['user']; // Guardar el usuario en la sesión

                // Redirigir a la página deseada 
                header("Location: ../vistas/productos.html");
                exit();
            } else {
                echo '<div style="font-size: 80px;>Contraseña incorrecta.</div>';
                header('location:../vistas/index.php');
            }
        } else {
            header("Location: ../vistas/registrar.php");
        }
    }
    
}

?>