<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Venta Buenas carnes</title>
        <link rel="stylesheet" href="Estilos.css">
        <link rel="stylesheet" href="iconoslink/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@200&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <header class="head">    
            <div class="contenedor">
                <div class="head__contenido">
                    <img src="./imagenes/logo buenas carnes.jpg" alt="..." class="head__contenido--image">

                    <nav class="head__nav">
                        <a href="./" class="head__nav--link">Inicio</a>
                        <a href="./carrito.php" class="head__nav--link"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Tu carrito</a>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <section class="boleta">
                <div class="contenedor">
                    <?php
                        $producto = $_POST['nombreProducto'];
                        $precio = $_POST['precioProducto'];
                        $cantidad = $_POST['cantidadProducto'];
        
                        $total = intVal($precio) * intVal($cantidad);
                    ?>
        
                    <table cellpadding="5">
                        <tbody>
                            <tr>
                                <th>Nombre del Producto:</th>
                                <td><?php echo $producto; ?></td>
                            </tr>
                            <tr>
                                <th>Precio:</th>
                                <td><?php echo $precio; ?></td>
                            </tr>
                            <tr>
                                <th>Cantidad:</th>
                                <td><?php echo $cantidad; ?></td>
                            </tr>
                            <tr><th></th><td></td></tr> <!-- Esta linea no BORRAR -->
                            <tr>
                                <th>Total:</th>
                                <td><?php echo $total; ?></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <button type="button" onclick="alert('Sin habilitar')">Pagar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>    
            </section>
        </main>
    </body>
</html>