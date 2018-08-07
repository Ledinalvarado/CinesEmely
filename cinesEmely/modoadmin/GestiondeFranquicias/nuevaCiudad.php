 <?php
 require '../conexion/conexion.php';
 $mensaje = [];
if (!empty($_POST)){
    $ciudad = $_POST['nombre_ciudad'];
    $insertar = $pdo->exec("insert into ciudad(ciudad) values ('{$ciudad}')");
     if ($insertar >= 1){
         $mensaje[] = 'La ciudad fue creada';
     }
}
$resultado = $pdo->query("Select ciudad from ciudad")
 ?>
 <div>
     <?php
     require '../principal/principaladmin.php';
     ?>
 </div>

 <html>
 <head>
     <title>Nueva Ciudad</title>
     <link rel="stylesheet" href="CSS/nuevaCiudad.css">
 </head>

 <body>
 <div id="formularios">
        <h4>
            Registro de una Nueva Pelicula
        </h4>

    <div class="cuerpo">
        <form class="formulario" action="" method="post" >
            <div class="msj">
<!--                <label>Nombre de la Ciudad</label>-->
<!--                <br>-->
                <input type="text" required placeholder="Nombre de la Ciudad" name="nombre_ciudad">
            </div>
            <div class="botones">
                <button type="submit" class="btn btn-success" name="boton_guardar_ciuedad" > Agregar Ciudad</button>


                <?php
                if (!empty($mensaje)):
                    echo '<ul>';
                    foreach ($mensaje as $mensajes){

                        echo $mensajes;

                    }
                    echo '</ul>';
                endif;
                ?>


            </div>
        </form>
        <div>
        <table class="tablas" >
            <thead>
            <tr>
                <th>Ciudades</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $ciudad): ?>
                <tr>
                    <td><?php echo $ciudad['ciudad']?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
</div>
 </body>
 </html>