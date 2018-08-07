<?php
require '../conexion/conexion.php';
$consulta=$pdo->query("select usuario.id_usuario, usuario.usuario, usuario.contrasena, usuario.estado, ciudad.ciudad,
franquicias.localidad from franquicias".
" inner join ciudad on  franquicias.id_ciudad = ciudad.id_ciudad ".
 " inner join usuario on   franquicias.id_franquicia = usuario.id_franquicia");
?>
<div>
    <?php require '../menus/menu_lado.php'; ?>
</div>
<html>
<head>
    <link rel="stylesheet" href="cssUsers/userPrin.css">
</head>

<body>


<div>
    <table id="tablas" >
        <thead>
        <tr>
            <th>Nombre de Usuario</th>
            <th>Constraseña</th>
            <th>Estado</th>
            <th>Ciudad</th>
            <th>Localidad</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($consulta as $row): ?>
            <tr>
                <td><?php echo $row['usuario']?></td>
                <td><?php echo $row['contrasena']?></td>
                <td><?php echo $row['estado']?></td>
                <td><?php echo $row['ciudad']?></td>
                <td><?php echo $row['localidad']?></td>
                <td><a href="UpdateUsuario.php?cod=<?php echo $row['id_usuario'] ?>">
                        Modificar</a></td>
                <td><a href="deleteUsuario.php?cod=<?php echo $row['id_usuario']?>">
                        Eliminar</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
</body>
</html>