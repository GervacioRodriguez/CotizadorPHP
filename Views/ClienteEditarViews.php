<h1>Editar Cliente</h1>
<form action="index.php?c=clientes&a=actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
    <input type="text" name="nombre" value="<?= $cliente['nombre'] ?>" required>
    <input type="email" name="email" value="<?= $cliente['email'] ?>" required>
    <input type="text" name="telefono" value="<?= $cliente['telefono'] ?>" required>
    <button type="submit">Actualizar</button>
</form>
