function manejarDomCargado() {
    const elemento = document.getElementById('animacion');

    const keyframes = [
        { transform: 'scale(1)' },
        { transform: 'scale(1.1)' },
        { transform: 'scale(1)' }
    ];

    const opciones = {
        duration: 2000,        
        iterations: Infinity,  
        direction: 'alternate',
        easing: 'ease-in-out'
    };

    elemento.animate(keyframes,2000)
}

document.addEventListener('DOMContentLoaded', manejarDomCargado);

function cambioDeColor() {
    const elemento = document.getElementById('textoAnimado');

    const keyframes = [
        {  color: 'green' },    
        {  color: 'red' },    
        {  color: 'yellow' }
    ];

    const opciones = {
        duration: 2000,        
        iterations: Infinity,  
        direction: 'alternate', 
        easing: 'ease-in-out'  
    };

    elemento.animate(keyframes, opciones);
}

document.addEventListener('DOMContentLoaded', cambioDeColor);


function textoOferta() {
    const container = document.getElementById('texto-container');

    function updateText() {
        const h3 = document.createElement('h3');
        h3.classList.add('zoom');
        h3.textContent = 'Oferta!!! Películas al 50% de descuento';

        container.innerHTML = ''; 
        container.appendChild(h3);

        setTimeout(() => {
            h3.classList.add('zoomed');
        }, 10); 
    }
    updateText(); 
    setInterval(updateText, 3000);
};
document.addEventListener('DOMContentLoaded', textoOferta);

function Opacidad(){
    const elemento = document.getElementById('bienvenido');

    const keyframes = [
        { opacity:1},
        {opacity:0.2},
        {opacity:1}
    ];

    const opcion = {
        duration: 2000,        
        iterations: Infinity, 
        opacity : 'ease in out'
    };

    elemento.animate(keyframes, opcion);
}
    

    document.addEventListener('DOMContentLoaded', Opacidad);
