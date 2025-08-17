<h1>Lista de Clientes</h1>
<a href="index.php?c=clientes&a=crear">Agregar Cliente</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['id'] ?></td>
                <td><?= $cliente['nombre'] ?></td>
                <td><?= $cliente['email'] ?></td>
                <td><?= $cliente['telefono'] ?></td>
                <td>
                    <a href="index.php?c=clientes&a=editar&id=<?= $cliente['id'] ?>">Editar</a>
                    <a href="index.php?c=clientes&a=eliminar&id=<?= $cliente['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
