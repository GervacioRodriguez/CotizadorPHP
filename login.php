<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../conn/header.php"?>
    <title>Iniciar Sesion</title>
</head>
<body>

<?php
include "../conn/conn.php";
if(isset($_POST['Entrar']))
{
    $nombre = $_POST['nombre'];
    $contra = $_POST['contra'];
    include '../conn/conn.php';
    $existe = "SELECT nombre FROM accesocliente WHERE nombre LIKE '$nombre' AND pass LIKE '$contra'";
    $consulta = mysqli_query($conn,$existe);
    $dato = mysqli_fetch_array($consulta);
    $cambia = $dato["nombre"];
    echo "<hr size == 10 color =fffff width =100% aling = left>";
        if($dato == ""){
        echo "los datos estan equivocados";
        }else{
        echo "los datos son correctos";
        }
    mysqli_close($conn);
}else{
?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <i class="bi bi-person"></i>
            <br>
            Nombre:<br>
            <input type="text" name="nombre"><br>
            <i class="bi bi-key"></i><br>
            Contraseña:<br>
            <input type="text" name="contra">
            <br>
            <input type="submit" value="Entrar">
    </form>
<?php }?>
</body>
</html>


