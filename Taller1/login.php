<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Centro de entretenimiento de Cine">
    <meta name="author" content="GRUPO 1">
    <meta name="keywords" content="Cine">
    <link rel="icon" href="../Recursos/Cine/cine.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Esto es para añadir un nuevo font en este caso Inter -->
    
    <link rel="stylesheet" href="./styles/style.css"/>
    <link rel="stylesheet" href="./styles/formularioStyle.css"/>

    <title>Cineplix</title> 
    <body>
        <header>
            
        </header>
    <section><!--Seccion de login-->
        <aside id="center">
            <div class="formulario">
                <form action="#">
                    <h2>Iniciar Sesion</h2>
                    <div class="input-center">
                        <i class="fa fa-envelope"></i>
                        <input type="email" required>
                        <label for="#">Email</label>
                    </div>
                    <div class="input-center">
                        <i class="fa fa-lock"></i>
                        <input type="password" required>
                        <label for="#">Contraseña</label>
                    </div>
                    <div class="olvidar">
                        <label for="#">
                            <input type="checkbox"> Recordar
                            <a href="#">Olvide la contrasena</a>
                        </label>
                    </div>
                </form>
                <div>
                    <button>Acceder</button>
                    <div class="registrar">
                        <p>No tengo cuenta 
                            <a href="registro.php">Crear una cuenta</a>
                        </p>
                    </div>
                </div>
            </div>
        </aside>
    </section>
    <footer>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="nav_footer.js"></script>
</body>
</html>