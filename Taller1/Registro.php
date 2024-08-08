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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/style.css"/>
    <title>Cineplix</title> 
</head>
<body>
    <header class="nav-position">
        <?php include "./nav.php"; ?>
    </header>
    <main>
        <div class="contenedor-registro">
            <h1>Registro de usuario</h1>
            <div class="contenedor-formulario">
                <h2>Datos personales</h2>
                <form action="" class="formulario" id="formulario">
                    <div class="formulario_input_registro">
                        <!--Grupo de nombre-->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <div class="formulario__label">
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 digitos y solo puede contener numeros, letras y guion bajo</p>
                        </div>
                        <!--Grupo de apellidos-->
                        <div class="formulario__grupo" id="grupo__apellidos">
                            <div class="formulario__label">
                                <label for="apellidos">Apellidos</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Apellidos">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 digitos y solo puede contener numeros, letras y guion bajo</p>
                        </div>
                        <!--Grupo de Contraseña-->
                        <div class="formulario__grupo" id="grupo__password">
                            <div class="formulario__label">
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="password" class="formulario__input" name="password" id="password">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">La contraseña debe ser de 4 a 12 digitos</p>
                        </div>
                        <!--Grupo de Contraseña2-->
                        <div class="formulario__grupo" id="grupo__password2">
                            <div class="formulario__label">
                                <label for="password2">Repetir Contraseña</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="password" class="formulario__input" name="password2" id="password2">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Las contrAseñas de ben ser iguales</p>
                        </div>
                        <!--Grupo de cedula-->
                        <div class="formulario__grupo" id="grupo__cedula">
                            <div class="formulario__label">
                                <label for="cedula">Cedula</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="cedula" id="cedula" placeholder="Cedula">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 digitos y solo puede contener numeros, letras y guion bajo</p>
                        </div>
                        <!--Grupo de Correo electronico-->
                        <div class="formulario__grupo" id="grupo__correo">
                            <div class="formulario__label">
                                <label for="correo">E-mail</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo</p>
                        </div>
                        <!--Grupo de Telefono-->
                        <div class="formulario__grupo" id="grupo__telefono">
                            <div class="formulario__label">
                                <label for="telefono">Telefono</label>
                            </div>    
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="0999999999">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">El telefono solo puede contener numeros.</p>
                        </div>
                        <!--Grupo de Ciudad-->
                        <div class="formulario__grupo" id="grupo__ciudad">
                            <div class="formulario__label">
                                <label for="ciudad">Ciudad</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <select name="formulario__seleccionar" id="ciudad">
                                    <option value="Ciudad">Seleccione la ciudad</option>
                                </select>
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Seleccione la ciudad c a que pertenece</p>
                        </div>
                        <!--Grupo de Direccion-->
                        <div class="formulario__grupo" id="grupo__direccion">
                            <div class="formulario__label">
                                <label for="direccion">Direccion</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="direccion" id="direccion">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <p class="formulario__input-error">Escriba su direccion.</p>
                        </div>
                    </div>
                    <!--TERMINOS Y CONDICIONES-->
                    <div class="formulario_terminos_y_condiciones">
                        <div class="formulario__grupo" id="grupo_terminos">
                            <p class="directrices">
                                En Cineplix, tratamos tus datos con el fin de gestionar nuestra relación como cliente. 
                                Tienes derecho a acceder, rectificar y actualizar tus datos, así como a solicitar su supresión, limitación o eliminación. 
                                También tienes derecho a la portabilidad de tus datos cuando proceda y a consultar nuestro Registro Nacional de Protección de Datos Personales. 
                                Si quieres ejercer estos derechos, envía un correo a privacidad@cineplix.com
                            </p>
                        </div>
                        <div class="formulario__grupo" id="grupo_terminos">
                            <label class="label__formulario">
                                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                                He leído y acepto las condiciones generales, Términos y Condiciones y Política de privacidad.
                            </label>
                        </div>
                    </div>
                    <!--Mnesaje de completar todos los campos-->
                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="fa-solid fa-triangle-exclamation"></i><b>Error:</b> Por favor rellene el formulario correctamente.</p>
                    </div>
                    <!--Boton de registro-->
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn">Enviar</button>
                        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
    <footer class="footer">
        <ul class="social-icon">
            <li class="icon-elem">
                <a href="" class="icon"><ion-icon name="logo-youtube"></ion-icon></a>
            </li>
            <li class="icon-elem">
                <a href="" class="icon"><ion-icon name="logo-instagram"></ion-icon></a>
            </li>
            <li class="icon-elem">
                <a href="" class="icon"><ion-icon name="logo-facebook"></ion-icon></a>
            </li>
        </ul>
        <ul class="menu">
            <li class="menu-elem">
                <a href="" class="menu-icon">Cinepl<span class="main-color">i</span>x</a>
            </li>
            <li class="menu-elem">
                <a href="" class="menu-icon">Equipo</a>
            </li>
            <li class="menu-elem">
                <a href="" class="menu-icon">Contactanos</a>
            </li>
            <li class="menu-elem">
                <a href="" class="menu-icon">Sobre nosotros</a>
            </li>
        </ul>
        <p class="text">@Año | Todos los derechos reservados</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>