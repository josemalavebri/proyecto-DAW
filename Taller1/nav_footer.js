const header = document.querySelector("header");
const footer = document.querySelector("footer");

header.innerHTML = `
<div class="nav-wrapper">
    <div class="container">
        <div class="nav">
            <div class="logo-cine">
                
                <a href="./index.html" class="logo">
                    Cinepl<span class="main-color">i</span>x
                </a>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="./index.html#estrenos">CARTELERA</a></li>
                <li><a href="./dulceria.html">DULCES</a></li>
                <li><a href="./nosotros.html">SOBRE NOSOTROS</a></li>
                <li><a href="./login.php">Iniciar Sesion</a></li>
                <li><a href="./registro.php"> Registro</a></li>
            </ul>
            </div>
        </div>
    </div>
</div>
`;

footer.innerHTML = `
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
                <a href="" class="menu-icon">Equipo</a>
            </li>
            <li class="menu-elem">
                <a href="" class="menu-icon">Contáctanos</a>
            </li>
            <li class="menu-elem">
                <a href="" class="menu-icon">Sobre nosotros</a>
            </li>
        </ul>
        <p class="text">@Año | Todos los derechos reservados</p>
    </footer>
`;