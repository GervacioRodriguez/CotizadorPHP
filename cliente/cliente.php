<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../conn/header.php"?>
    <title>Document</title>
</head>
<body>

<?php 
if(isset($_POST))
?>

    <form action="">
            Nombre(s): <input type="text" name="" id=""> <br>
            Apellido Paterno: <input type="text" name="" id=""> <br>
            Apellido Materno: <input type="text" name="" id=""><br>
            Telefono: <input type="text" name="" id=""> <br>
            Email: <input type="text" name="" id=""> <br>
            <input type="submit" name="Guardar" value="Guardar Cliente">
    </form>
</body>
</html>