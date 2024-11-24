<h1>Crear Cliente</h1>
<form action="index.php?c=clientes&a=guardar" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <button type="submit">Guardar</button>
</form>
