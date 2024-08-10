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
    
    <link rel="stylesheet" href="./styles/styleFormulario.css"/>
    <title>Cineplix</title> 

</head>
<body>
    <header class="nav-position">
    </header>
    <main>
        <div class="contenedor-registro">
            <h1>Registro de usuario</h1>
            <div class="contenedor-formulario">
                <h2>Datos personales</h2>
                <form action="validaciones.php" class="formulario" id="formulario" method="post">
                    <div class="formulario_input_registro">
                        <!--Grupo de nombre-->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <div class="formulario__label">
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $_GET['nombre'] ?? ''; ?>">
                            </div>
                            <?php if (!empty($_GET['error_nombre'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_nombre']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!--Grupo de apellidos-->
                        <div class="formulario__grupo" id="grupo__apellidos">
                            <div class="formulario__label">
                                <label for="apellidos">Apellidos</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?php echo $_GET['apellidos'] ?? ''; ?>">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_apellidos'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_apellidos']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!--Grupo de Contraseña-->
                        <div class="formulario__grupo" id="grupo__password">
                            <div class="formulario__label">
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="password" class="formulario__input" name="password" id="password" value="<?php echo $_GET['password'] ?? ''; ?>">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_password'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_password']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!--Grupo de Contraseña2-->
                        <div class="formulario__grupo" id="grupo__password2">
                            <div class="formulario__label">
                                <label for="password2">Repetir Contraseña</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="password" class="formulario__input" name="password2" id="password2" value="<?php echo $_GET['password2'] ?? ''; ?>">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_password2'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_password2']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!--Grupo de cedula-->
                        <div class="formulario__grupo" id="grupo__cedula">
                            <div class="formulario__label">
                                <label for="cedula">Cedula</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="cedula" id="cedula" placeholder="Cedula" value="<?php echo $_GET['cedula'] ?? ''; ?>">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_cedula'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_cedula']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!--Grupo de Correo electronico-->
                        <div class="formulario__grupo" id="grupo__correo">
                            <div class="formulario__label">
                                <label for="correo">E-mail</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com" value="<?php echo $_GET['correo'] ?? ''; ?>">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_correo'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_correo']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!--Grupo de Telefono-->
                        <div class="formulario__grupo" id="grupo__telefono">
                            <div class="formulario__label">
                                <label for="telefono">Telefono</label>
                            </div>    
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="0999999999" value="<?php echo $_GET['telefono'] ?? ''; ?>">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_telefono'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_telefono']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!--Grupo de Ciudad-->
                        <div class="formulario__grupo" id="grupo__ciudad">
                            <div class="formulario__label">
                                <label for="ciudad">Ciudad</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <select name="ciudad" id="ciudad">
                                    <option value="">Seleccione la ciudad</option>
                                    <option value="Guayaquil" <?php echo (isset($_GET['ciudad']) && $_GET['ciudad'] == 'Guayaquil') ? 'selected' : ''; ?>>Guayaquil</option>
                                    <option value="Cuenca" <?php echo (isset($_GET['ciudad']) && $_GET['ciudad'] == 'Cuenca') ? 'selected' : ''; ?>>Cuenca</option>
                                    <option value="Quito" <?php echo (isset($_GET['ciudad']) && $_GET['ciudad'] == 'Quito') ? 'selected' : ''; ?>>Quito</option>
                                </select>
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_ciudad'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_ciudad']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!--Grupo de Direccion-->
                        <div class="formulario__grupo" id="grupo__direccion">
                            <div class="formulario__label">
                                <label for="direccion">Direccion</label>
                            </div>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="direccion" id="direccion" value="<?php echo $_GET['direccion'] ?? ''; ?>">
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_direccion'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_direccion']; ?></p>
                            <?php endif; ?>
                        </div>

                        <!--Grupo de Genero-->
                        <div class="formulario-genero" id="grupo__genero">
                            <div class="formulario__label">
                                <label>Genero:</label>
                            </div>
                            <div class="formulario_grupo-genero">
                                <div class="formulario-genero-individual">
                                    <label for="masculino">Masculino</label><br>
                                    <input type="radio" class="formulario__input_genero" name="genero" id="masculino" value="Masculino" <?php echo (isset($_GET['genero']) && $_GET['genero'] == 'Masculino') ? 'checked' : ''; ?>>
                                </div>
                                <div class="formulario-genero-individual">
                                    <label for="femenino">Femenino</label><br>
                                    <input type="radio" class="formulario__input_genero" name="genero" id="femenino" value="Femenino" <?php echo (isset($_GET['genero']) && $_GET['genero'] == 'Femenino') ? 'checked' : ''; ?>>
                                </div>
                                <i class="formulario__validacion-estado fa-solid fa-circle-xmark"></i>
                            </div>
                            <?php if (!empty($_GET['error_genero'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_genero']; ?></p>
                            <?php endif; ?>
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
                                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos" <?php echo isset($_GET['terminos']) ? 'checked' : ''; ?>>
                                <p class="directrices">He leído y acepto las condiciones generales, Términos y Condiciones y Política de privacidad.</p>
                            </label>
                            <?php if (!empty($_GET['error_terminos'])): ?>
                                <p class="formulario__input-error"><?php echo $_GET['error_terminos']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="fa-solid fa-triangle-exclamation"></i><b>Error:</b> Por favor rellene el formulario correctamente.</p>
                    </div>

                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn">Enviar</button>
                        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
 <footer>
</footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="nav_footer.js"></script></body>
</html>
