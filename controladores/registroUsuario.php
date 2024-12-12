<?php 

require_once "../conexion\conexion.php";

if (isset($_POST['register'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['user']) >= 1 &&
        strlen($_POST['clave1']) >= 1
        ) {
        $name = trim($_POST['nombre']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $user = trim($_POST['user']);
        $clave = trim($_POST['clave1']);
    }

    try {
        $sql = $conex->prepare("
        INSERT INTO registros(name, direccion, telefono, user, clave)
        VALUES (?,?,?,?,?)
        ");

        $sql->bind_param('sssss', $name, $direccion, $telefono, $user, $clave);

        $sql->execute();

        if ($sql) {
            header("location:../vistas/index.php");
        }

    } catch (\PDOException $e) {
        $conex->rollback();
        echo '<div>Error al crear el Usuario</div>'. $e->getMessage();
    }
    
}

?>