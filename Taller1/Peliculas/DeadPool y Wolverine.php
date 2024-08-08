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
        <?php include "../nav.php"; ?>

    </header>
    <div>
        <section class="hero">
            <div class="hero__description">
                <div class="description-left">
                    <h1 class="white">Deadpool y Wolverine</h1>
                    <img src="../Recursos/Deadpool y Wolverine/DeadpoolyWolverine.jpg" 
                    alt="Deadpool y Wolverine" class="image" width="400" height="550">
                </div>
                <div class="description__right">
                    <h2>Sipnosis</h2>
                    <h3>Descripcion</h3>
                    <p>
                        Tercera entrega de la saga "Deadpool", 
                        ahora integrada en el Universo Cinematográfico de Marvel (MCU)
                    </p>
                    <h3>Categoria de la pelicula</h3>
                    <p>Accion | +15</p>
                    <h3>Tiempo de la pelicula</h3>
                    <p>2h 20min</p>
                    <h3>Trailer de la pelicula</h3>
                    <iframe src="https://www.youtube.com/embed/UzFZR2dRsSY?si=nSdZ2Vn47ibvngw9" 
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