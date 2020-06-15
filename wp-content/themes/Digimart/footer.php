
<footer class="main-end padding__general">
  <div class="main-end__content">
    <div class="main-logo__end">
      <div class="main-logo__img">
        <img class="img-logo-amarillo" src="<?php echo get_template_directory_uri();?>/assets/img/logo-digimart-amarillo.png" alt="">
      </div>
      <div class="description-footer" >
        <p>Somos tu partner tecnológico</p>
      </div>
    </div>
    <div class="main-end__categoria">
      <div class="main-categoria__end--title">
        <p class="title-end__categoria">
          Categoria
        </p>
      </div>
      <div class="main-end__categoria--list">
       <ul class="list-sitemap" >
        <li>
          <a class="opciones-sitemap" href="">Celulares</a>
        </li>
        <li>
          <a class="opciones-sitemap" href="">Tablets y relojes</a>
        </li>
        <li>
          <a class="opciones-sitemap" href="">Computación</a>
        </li>
        <li>
          <a class="opciones-sitemap" href="">Tvs Video</a>
        </li>
        <li>
          <a class="opciones-sitemap" href="">Audio</a>
        </li>
        <li>
          <a class="opciones-sitemap" href="">Videojuegos</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-end__contactos">
   <div class="information-f" >
    <div class="description-f"> 
      <h4 class="title-information-f">Visítanos</h4>
      <img class="emojis" src="<?php echo get_template_directory_uri();?>/assets/img/Artboard 5.svg" alt="" >
      <p class="caption-text-f">C.C. las Virtudes, Planta baja, Local H-15,
      Punto Fijo, Estado Falcón Venezuela.</p>

    </div>
    <div class="description-f">
      <h4 class="title-information-f">Escríbenos</h4>
      <img class="icon" src="<?php echo get_template_directory_uri();?>/assets/img/Artboard 3.svg" alt="" >
      <p class="caption-text-f">contacto@digimartvzla.com</p>
    </div>
    <div  class="description-f">
      <h4 class="title-information-f">Llámanos</h4>
      <img class="icon" src="<?php echo get_template_directory_uri();?>/assets/img/Artboard 6.svg" alt="">
      <p class="caption-text-f">+58 412-4274052</p>
      <p class="caption-text-f">0269-2485765</p>
    </div>
  </div>
</div>
</div>
<hr class="linea-footer">
<div class="redes-footer">
  <div class="social-f">
    <a href="https://www.facebook.com/digimartvzla/"><i class="fa fa-facebook icon-footer" aria-hidden="true"></i></a>
    <a href="https://twitter.com/DigimartVzla"><i class="fa fa-twitter icon-footer" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/digimartve/"><i class="fa fa-instagram icon-footer" aria-hidden="true"></i></a>
  </div>
</div>
<div class="logo-slice">
  <p class="text-powered">Powered By</p>
  <a href="" class="empresa">SliceGroup</a>
  <p class="fecha-f">2018</p>
</div>
</footer>

<section id="nav-mobile">
  <div class="nav-mobile">
    <div class="navbar-nuevo visible-xs">
      <ul class="nav nav-nuevo ">
        <li class="nav-item">
          <a class="nav-link-nuevo active" href="index.html"><i class="fa fa-home icon-mobile" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-nuevo" href="about.html"><i class="fa fa-users icon-mobile" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-nuevo" href="product.html"><i class="fa fa-tablet icon-mobile" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-nuevo" href="#contact"><i class="fa fa-envelope icon-mobile" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>  
  </div>
</section>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
<script >
  $("a").click(function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 50
      }, 1500, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $('#modal-digimart').modal('toggle')

</script>
<?php wp_footer(); ?>
</body>
</html>