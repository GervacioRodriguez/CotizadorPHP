<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subir imagenes con ajax</title>
</head>
<body>
    <?php 
    if(isset($_POST['Subir'])){
    include("../CotizadorPHP/conn/conn.php");
    $dir = "../CotizadorPHP/imgp/";
    $dir = $dir.basename($_FILES['img']['name']);
    if(move_uploaded_file($_FILES['img']['name'],$dir)){
        echo "se subio correctamente". basename($_FILES['img']['name'])." exito";
    }else{
        echo"error al subir";
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        Añadit imagen: <input type="file" name="img" id=""><br>
        <input type="submit" value="Subir"/>
    </form>
    <?php }?>
</body>
</html>