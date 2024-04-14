<?php
    if (!empty($_POST["submit"])){
        if (empty($_POST["mail"]) || empty($_POST["password"])){
            echo '<div>LOS CAMPOS ESTAN VACIOS</div>';
        }
        else {
            $conexion = new mysqli("localhost", "root", "", "login");
            $mail=$_POST["mail"];
            $password=$_POST["password"];
            $sql=$conexion->query("SELECT * FROM usuarios WHERE mail='$mail' AND password='$password'");
            if ($datos=$sql->fetch_object()){
                header("location: LogIn.php");
                exit(); // Es buena práctica salir después de redirigir
            }
            else{
                echo '<div>acceso denegado</div>';
            }
            $conexion->close(); // Cierra la conexión después de usarla
        }
    }
?>

