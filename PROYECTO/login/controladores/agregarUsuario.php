<?php
    //Creasion de la session
    SESSION_START();

    include("../../conexion/conexion.php");
    $conn=conectar();

    $username=$_POST['username'];
    $nombreUsuario=$_POST['nombre_usuario'];
    $apellidoUsuario=$_POST['apellido_usuario'];
    $claveUsuario=$_POST['contrasenia_usuaio'];
    $cedulaUsuario=$_POST['cedula_usuario'];
    $telefonoUsuario=$_POST['telefono_usuario'];
    $correoUsuario=$_POST['correo_usuario'];

    //Agregar imagen por defecto
    $image = "../../assets/imagenes/usuario.jpg";
    $fotoUsuario = addslashes(file_get_contents($image));

    //Agregar tipo de usuario Estudiante
    $tipoUsuario=1;
    //Agregar estado de usuario Activo
    $estadoUsuario=1;

    $consulta="INSERT INTO usuarios(username,nombreUsuario,apellidoUsuario, claveUsuario, cedulaUsuario, telefonoUsuario, correoUsuario, fotoUsuario, idTipo, idEstado)
    VALUES('$username', '$nombreUsuario', '$apellidoUsuario', '$claveUsuario', '$cedulaUsuario', '$telefonoUsuario', '$correoUsuario', '$fotoUsuario', '$tipoUsuario', '$estadoUsuario')";
    $resultado=mysqli_query($conn, $consulta);

    if($resultado){
        header("Location: ../index.html");
    }
?>