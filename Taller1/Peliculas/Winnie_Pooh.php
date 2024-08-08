<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Centro de entretenimiento de Cine">
    <meta name="author" content="GRUPO 1">
    <meta name="keywords" content="Cine">
    <link rel="icon" href="../Recursos/Cine/cine.png">
    <!-- Esto es para añadir un nuevo font en este caso Inter -->
    <link rel="stylesheet" href="../styles/style.css"/>
    <title>Cineplix</title> 
</head>
<body>
    <header>
        <?php include "./nav.php"; ?>

    </header>
    <!--Secciones-->
    <div>
        <section class="hero">
            <div class="hero__description">
                <div class="description-left">
                    <h1 class="white">Winnie Pooh 2</h1>
                    <img src="../Recursos/Winnie Pooh 2/WinniePooh2.jpg" 
                    alt="Winnie Pooh" class="image">
                </div>
                <div class="description__right">
                    <h2>Sipnosis</h2>
                    <h3>Descripcion</h3>
                    <p>
                        En lo más profundo del Bosque de los Cien Acres, crece una furia destructiva cuando 
                        <br>Winnie-the-Pooh, Piglet, Búho y Tigger ven peligrar su hogar y sus vidas después de 
                        <br>que Christopher Robin revelara su existencia.
                    </p>
                    <h3>Categoria de la pelicula</h3>
                    <p>Accion, Terror | +18</p>
                    <h3>Tiempo de la pelicula</h3>
                    <p>2h 20min</p>
                    <h3>Trailer de la pelicula</h3>
                    <iframe src="https://www.youtube.com/embed/RLNudmHNePA?si=CeQLzIqQJWzuLiLk" 
                    frameborder="0" class="iframe" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </div>
    <div class="footer-style">
        <iframe src="../pag/footer.html" scrolling="no" > </iframe>
    </div>
</body>
</html>