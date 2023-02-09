<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async src="https://get.geojs.io/v1/ip/geo.js"></script>

    <title>geo localizacion</title>
</head>
<body>
    <div id="ubicacion">
        Aquí aparecen las cordenadas
    </div>
    <script>
        window.onload = miubicacion();
        function miubicacion(){
            if(navigator.geolocation){//si los servicios estan activos esto funcionara
            navigator.geolocation.getCurrentPosition(verposicion);
        }else
        {
            alert("no podemos mostrar la ubiucacion");
        }
    }
    function verposicion(){
        var latitud = posicion.coords.latitude;
        var longitud = posicion.coords.longitude;
        var output = document.getElementById("ubicacion");
		output.innerHTML = "Latitud: "+latitud+"  Longitud: "+longitud;
    }
    </script>
</body>
</html>