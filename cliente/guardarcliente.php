<?php
include('../db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recopilar los datos del formulario
    $identificacion = $_POST['identificacion'];
    $nombrecompleto = $_POST['nombrecompleto'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Verificar si la identificación (cedula) ya existe en la base de datos
    $queryidentificacion = "SELECT cedula FROM tbl_clientes WHERE cedula = '$identificacion'";
    $resultidentificacion = mysqli_query($mysqli, $queryidentificacion);

    if (mysqli_num_rows($resultidentificacion) > 0) {
        // La identificación (cedula) ya existe en la base de datos, mostrar una alerta
        echo '<script>alert("La Cedula de este Cliente ya está registrada."); window.location.href = "clienteNuevo.php";</script>';
    } else {
        // La identificación (cedula) no existe, realizar la inserción
        $query = "INSERT INTO tbl_clientes (cedula, nombre, direccion, celular, correo) VALUES ('$identificacion', '$nombrecompleto', '$direccion', '$telefono', '$email')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            // La inserción fue exitosa, puedes redirigir a una página de éxito o mostrar un mensaje de éxito
            echo '<script>alert("Registro Exitoso."); window.location.href = "clienteBuscar.php";</script>';
        } else {
            // Hubo un error en la consulta, puedes redirigir a una página de error o mostrar un mensaje de error
            echo '<script>alert("Error Al Registrar."); window.location.href = "clienteNuevo.php";</script>';
        }
    }
}
?>
