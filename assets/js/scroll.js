window.addEventListener('scroll', function() {
    var logo = document.getElementById('logo');
    var scrollPosition = window.scrollY;
  
    // Aquí defines la posición en la que quieres cambiar el logo
    var scrollThreshold = 200; // Por ejemplo, cambiará el logo cuando el usuario haya hecho scroll de 200 píxeles
  
    // Verifica si la posición de desplazamiento alcanza el umbral
    if (scrollPosition > scrollThreshold) {
      // Cambia la imagen del logo
      logo.innerHTML = '<img src="assets/images/Logo-gg-tipo-negro.png" alt="">';
    } else {
      // Vuelve a la imagen del logo original
      logo.innerHTML = '<img src="assets/images/Logo-gg-tipo-blanco.png" alt="">';
    }
  });

  window.addEventListener('scroll', function() {
    var logo = document.getElementById('logo');
    var navLinks = document.querySelectorAll('#main-menu li a');
    var scrollPosition = window.scrollY;
    var scrollThreshold = 200;

    if (scrollPosition > scrollThreshold) {
        // Cambia el color de los enlaces a negro
        navLinks.forEach(function(link) {
            link.style.color = 'black';
        });
    } else {
        // Vuelve al color original de los enlaces
        navLinks.forEach(function(link) {
            link.style.color = '#ffffff';
        });
    }
});

  