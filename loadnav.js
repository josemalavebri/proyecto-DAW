const header = document.querySelector("header");
const footer = document.querySelector("footer");

header.innerHTML = `
	<div class="nav-wrapper">
    <div class="container">
        <div class="nav">
            <div class="logo-cine">
                <img src="./Recursos/Cine/cine.ico" alt="Logo de Cineplix">
                <a href="/Taller1-main/Taller1/index.php" class="logo">
                    Cinepl<span class="main-color">i</span>x
                </a>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="Taller1-main/Taller1/index.php#estrenos">CARTELERA</a></li>
                <li><a href="dulceria.php">DULCES</a></li>
                <li><a href="/Taller1-main/Taller1/nosotros.html">SOBRE NOSOTROS</a></li>
                <li><a href="/Taller1-main/Taller1/Registro.html">PERFIL</a></li>
            </ul>
            </div>
        </div>
    </div>
</div>
`;

footer.innerHTML = `
  <p> hola </p>
`;