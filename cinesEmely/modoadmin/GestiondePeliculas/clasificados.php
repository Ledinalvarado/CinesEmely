<?php
require '../conexion/conexion.php';
$resultado = $pdo->query("Select nombre_clasificado, edad_minima from clasificados");
?>
<div>
    <?php require '../menus/menu_lado.php'; ?>
</div>

<html>

<head>
    <link rel="stylesheet" href="cssMovie/Clasificados.css">
</head>
<body>
<div id="formularios">
    <div class="encabezado">
        <h4>
            Registro de un Nuevo Clasificado
        </h4>
    </div>
    <div class="cuerpo">
        <form class="formulario" action="save_clasificados.php" method="post" >
            <div>
                <label>Nombre del Clasificado</label>
                <br>
                <input type="text" required placeholder="Nombre del clasificado" name="nombre_clasificado">
            </div>
            <div>
                <label>Edad Minima del Clasificado</label>
                <br>
                <input type="text" required placeholder="Edad Minima" name="edad_minima">
            </div>
            <div class="botones">
                <button type="submit" class="btn btn-success" name="boton_guardar_clasificado">Agregar Clasificado</button>
            </div>
        </form>
    </div>
</div>
<div>
    <table class="tablas" >
        <thead>
        <tr>
            <th>Nombre del Clasificado</th>
            <th>Edad Minia</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultado as $clasificado): ?>
            <tr>
                <td><?php echo $clasificado['nombre_clasificado']?></td>
                <td><?php echo $clasificado['edad_minima']?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
</body>
</html>