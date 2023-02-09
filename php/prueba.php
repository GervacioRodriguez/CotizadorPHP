<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Buscar: <input type="text" name="buscar" id="">

    <table border ="1px">
        <thead>
            <tr>
                <td>Descripcion</td>
                <td>Precio Compra</td>
                <td>Operaciones</td>
                <button>hol</button>
            </tr>
        </thead>
        <tbody id="productos">
            
        </tbody>
    </table>

    <script>
         const url = '../CotizadorPHP/php/verproducto.php';

         const tabla = document.querySelector('#productos');
         const opciones ={
            method :'GET'
         }
         fetch(url,opciones)//aqui va la ruta de donde llamas al back 
              .then(response => response.json())
              .then(response => {
                console.log(response);
                response.forEach(elemento =>{
                    tabla.innerHTML +=`
                    
                                    <tr>
                                        <td>${elemento.descripcion}</td>
                                        <td>${elemento.pc}</td>
                                        <td>
                                        <button>Editar</button>
                                        <button>Eliminar</button>
                                        </td>
                                    </tr>   
                    `
                });
              });
   </script>
    <!-- 
    <script src="/js/funciones.js"></script>-->
    <script>
        // fetch(ul)
        // .then(response => response.json())
        // .then(json => console.log(json))
        // .catch(error => console.log('Fallo concexion',error));
    </script> 
</body>
</html>