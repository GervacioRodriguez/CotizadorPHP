<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Usuario</title>
</head>
<body>
    
<form id="frm" method="POST">
        Nombre(s): <input type="text" name="nombre" id=""><br>
        Apellido Paterno: <input type="text" name="ap" id=""><br>
        Apellido Materno: <input type="text" name="am" id=""><br>
        Telefono: <input type="tel" name="tel" id=""> <br>
        Email:<input type="text" name="email" id=""> <br>
        Fecha Nacimiento: <input type="date" name="fn" id=""><br>
        <input type="submit" value="Enviar" id="btn_guardar">
    </form>

    <script>
     const liga = '../CotizadorPHP/jspruebas.php';
     btn_guardar.addEventListener("click",() => {
        fetch(liga,{
            method:'POST',
            body: new FormData(frm)
        }).then(response =>response.json())
          .then(response => {
            console.log(response);
          });
     });

    </script>
    <script>
        // daremos de alta aun cliente por medio de fetch
        // escucharemos el evento click del boton enviar
        // alert('hola mundo');
        // const url = '../CotizadorPHP/jspruebas.php';
        // var frm = document.getElementById('frm');
        // frm.addEventListener('submit',function(e){
        //     e.preventDefault();
        //     console.log('me diste clik');
        //     //usamos una variable

        //     var datos = new FormData(frm);
        //     console.log(datos);
        //     fetch(url,{
        //         method:'POST',
        //         body:datos
        //     }).then(res => res.json())
        //       .then(data => {
        //         console.log(data)
        //       })
        // });
    </script>
</body>
</html>