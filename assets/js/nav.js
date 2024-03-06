// Obtener todos los enlaces del menú
var navLinks = document.querySelectorAll('.nav li a');

// Iterar sobre los enlaces y agregar o quitar la clase "active" según corresponda
navLinks.forEach(function(link) {
    link.addEventListener('click', function() {
        // Quitar la clase "active" de todos los enlaces
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Agregar la clase "active" solo al enlace que se ha clicado
        this.classList.add('active');
    });
});
