<?php
    include ('conexion.php');
    $marca="SELECT * FROM marca";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar marca</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        <br><br>
        <h1>La Guadalupana</h1>
        <br><br>
        
        <nav>
            <ul class="lista">
                <li><a href="#">Altas</a>
                    <ul>
                        <li><a href="altaMarca.html">Marca</a></li>
                        <li><a href="altaCategoria.html">Categoria</a></li>
                        <li><a href="altaProducto.html">Producto</a></li>
                    </ul>
                </li>
                <li><a href="#">Modificar y Eliminar</a>
                    <ul>
                        <li><a href="modificarMarca.php">Marca</a></li>
                        <li><a href="modificarCategoria.php">Categoria</a></li>
                        <li><a href="modificarProducto.php">Producto</a></li>
                    </ul>
                </li>
                <li><a href="#">Consultas</a>
                    <ul>
                        <li><a href="consultaMarca.php">Marca</a></li>
                        <li><a href="consultaCategoria.php">Categoria</a></li>
                        <li><a href="consultaProducto.php">Producto</a></li>
                    </ul>
                </li>
                <li><a href="index.html">Pagina Principal</a></li>
            </ul>
        </nav>
        
        <br><br>
        <h2>Modificar Marca</h2>
        <br>

        <table width="50%" border="1" aling="center">
            <tr>
                <td>idMarca:</td>
                <td>nombre:</td>
                <td>Operacion</td>
            </tr>

            <?php
                $resultado=mysqli_query($conexion,$marca);
                while ($row = mysqli_fetch_assoc($resultado)) {?>

            <tr>
                <td><?php echo $row['idMarca'];?></td>
                <td><?php echo $row['nombre'];?></td>

                <td>
                    <a href="actualizarMarca.php?id=<?php echo $row["idMarca"];?>" class="table_item_link">Editar</a>
                    <a href="eliminarMarca.php?id=<?php echo $row["idMarca"];?>" class="table_item_link">Eliminar</a>
                </td>
            </tr>

            <?php } mysqli_free_result($resultado); ?>
        </table>

        <script src="confirmacion.js"></script>
    </body>
</html>