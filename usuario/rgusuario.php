<?php
include('../db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recopilar los datos del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $fecha = $_POST['fecha'];
    $correo = $_POST['email'];
    $password = $_POST['password1'];

    

    // Verificar si el correo ya existe en la base de datos
    $querycorreo = "SELECT correo FROM tbl_usuarios WHERE correo = '$correo'";
    $resultcorreo = mysqli_query($mysqli, $querycorreo);

    // Verificar si la cédula ya existe en la base de datos
    $querycedula = "SELECT cedula FROM tbl_usuarios WHERE cedula = '$cedula'";
    $resultcedula = mysqli_query($mysqli, $querycedula);

    if (mysqli_num_rows($resultcorreo) > 0) {
        // El correo ya existe en la base de datos, mostrar una alerta
        echo '<script>alert("El correo ya está registrado."); window.location.href = "../index.php";</script>';
    } elseif (mysqli_num_rows($resultcedula) > 0) {
        // La cédula ya existe en la base de datos, mostrar una alerta
        echo '<script>alert("La cédula ya está registrada."); window.location.href = "../index.php";</script>';
    } else {
        // Ni el correo ni la cédula existen, realizar la inserción
        $query = "INSERT INTO tbl_usuarios (nombre, apellido, cedula, fecha, correo, clave) VALUES ('$nombres', '$apellidos', '$cedula', '$fecha', '$correo', '$password')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            // La inserción fue exitosa, puedes redirigir a una página de éxito o mostrar un mensaje de éxito
            echo '<script>alert("Registro Exitoso."); window.location.href = "../interfaz/interfaz.php";</script>';
        } else {
            // Hubo un error en la consulta, puedes redirigir a una página de error o mostrar un mensaje de error
            echo '<script>alert("Error Al Registrar."); window.location.href = "../index.php";</script>';
        }
    }
}
?>
