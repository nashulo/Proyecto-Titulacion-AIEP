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
    <head>
    <body>
        <header class="head">    
            <div class="contenedor">
                <div class="head__contenido">
                    <img src="./imagenes/logo buenas carnes.jpg" alt="..." class="head__contenido--image">
    
                    <nav class="head__nav">
                        <a href="./" class="head__nav--link">Inicio</a>
                        <a href="#Nosotros" class="head__nav--link">Nosotros</a>
                        <a href="#carne-angus" class="head__nav--link">Carnes Angus</a>
                        <a href="#carne-wagyu" class="head__nav--link">Carnes Wagyu</a>
                        <a href="login.html" class="head__nav--link">Ingresa</a>
                        <a href="carrito.php" class="head__nav--link"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Tu carrito</a>
                    </nav>
                </div>
            </div>
        </header>
            
        <main class="banner__contenedor">
            <div class="contenedor">
                <img src="./imagenes/banner principal.jpg" class="banner__logo"> 
            </div>
            
            <article class="nosotros" id="Nosotros">
                <div class="contenedor">
                    <section class="nosotros__header">
                        <h2 class="nosotros__header--titulo">Sobre nosotros</h2>
                    </section>
                    
                    <section class="nosotros__contenido">
                        <img class="vaca_feliz nosotros__contenido--image" src="./imagenes/Las-vacas-felices-dan-más-leche.jpg" alt="vaquita feliz">
                        
                        <div>
                            <h3 class="nosotros__contenido--subtitulo"> Animales felices.</h3>
                            <p class="nosotros__contenido--texto"> Nuestro objetivo siempre ha estado claro. 
                                Ser los mejores distribuidores de carnes. Para ello, nuestra visión se enfoca 
                                en que nuestros animales vivan durante toda su vida en campos abiertos, libres 
                                de contaminación y con poca intervención humana. De esa forma, estamos llevando 
                                un producto honesto y con pasión a todos nuestros clientes, quienes saben diferenciar 
                                de un buen corte.
                            </p>
                        </div>
                    </section>
                </div> 
            </article>

            
            <section class="productos_principales" id="productos">
                <div class="contenedor">
                    <h2>Carnes Vacuno Angus y Wagyu</h2>
                    
                    <div class="productos">
                        <?php include("temp_productos.php"); ?>
                    </div>
                </div>
            </section>
        </main>


        <footer > 
            <a href="mailto:buenascarnes@gmail.com" >Contactanos aquí</a>
        </footer>


        <script src="Cod.js"></script>
    </body>
</html>