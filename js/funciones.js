// agregamos las rutas de nuestroa archivos 
//archivos fetch 
// fetch('')
// .then(res => res.json())
// .then(res => console.log(res));
leer();

function leer(){
    fetch('.//verproducto.php')
    .then(res => res.json())
    .then(res => console.log(res))
    .catch(err => console.error(err));
}



