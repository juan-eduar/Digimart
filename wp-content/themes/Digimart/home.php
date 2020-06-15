<?php get_header(); ?>
  
  <section class="padding__general" id=" ">
    <div class="home-slide">
      <div id="box-slide" class="hvr-grow-shadow">
        <div class="single-item">
          <div class="box-slide-item">
            <div class="banner-carousel" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/camera_2.jpeg');">
              <div class="box-slide-mask">
                <div class="caption-carousel">
                  <h2 class="open-sans">Digimart</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="box-slide-item">
            <div class="banner-carousel" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/Android_1.jpeg');">
            <div class="box-slide-mask">
              <div class="caption-carousel">
                <h2 class="open-sans">Digimart 1</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="box-slide-item">
          <div  class="banner-carousel" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/desktop_2.jpeg');">
            <div class="box-slide-mask">
              <div class="caption-carousel">
                <h2 class="open-sans">Digimart 2</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="box-slide-item">
        <div  class="banner-carousel" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/drone_1.jpg');">
          <div class="box-slide-mask">
            <div class="caption-carousel">
              <h2 class="open-sans">Digimart 3</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="box-slide-item">
      <div  class="banner-carousel" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/desktop_2.jpeg');">
        <div class="box-slide-mask">
          <div class="caption-carousel">
            <h2 class="open-sans">Digimart 2</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="box-slide-item">
    <div class="banner-carousel" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/drone_1.jpg');">
      <div class="box-slide-mask">
        <div class="caption-carousel">
          <h2 class="open-sans">Digimart 3</h2>
        </div>
      </div>
    </div>
  </div>

</section>  



<section class="padding__general ">
  <div class="title-container">
    <h2 class="open-sans ">Productos</h2>
  </div>
  <div class="main-products__grid--content">

 <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 8);?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
    <a href="<?php the_permalink(); ?>" class="contenedor-a">
      <div class="card hvr-shadow-p">
        <div class="card-img">
          <div class="img-products__home" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
        </div>
        <div class="card-content">
          <div class="caption-title">
            <h5 class="open-sans title-product"><?php the_title(); ?></h5>
          </div>
        </div>
      </div>
    </a>

<?php endwhile; ?>


  </div>

</section>

<section class="category-products padding__general ">
  <div class="container-fluid padd-no">
    <div class="title-container-category">
      <h2 class="open-sans">Categorías</h2>
    </div>
    <div class="main-content__categories">
        <?php $args = array(

        'orderby' => 'slug',
        'order' => 'ASC'
      );
      $product_categories = get_terms('product_cat', $args);
      $count = count($product_categories);


      if ($count > 0) {
        foreach ($product_categories as $product_category) {
          ?>
          <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

          $images = wp_get_attachment_image_src($thumbnail_id, 'large');

          ?>

            <div class=" caption-category ">
        <a href="<?php echo $url_category = get_term_link( $product_category ) ?>">
          <div class="contenedor-category hvr-grow-shadow">
            <div class="img-categories" style="background-image: url('<?php echo $images[0]; ?>');">
            </div>
            <p class=" parrafo-hidden"><?php echo $product_category->description; ?></p>
            <div class="caption-text-category hvr-border-fade ">
              <h3 class="text-category"><?php echo $product_category->name; ?></h3>
            </div>
          </div>
        </a>
      </div>

          <?php

        }
      }
      ?>
    </div>        
  </div>
</section>

<section class="main-contact padding__general">
  <div class="main-contact__content">
    <div class="main-contact__ubicacion">
     <div class="caption-maps hvr-shadow">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3907.484068996557!2d-70.2065467!3d11.6600665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e85edc7e5cc46b3%3A0xa51c44560e6fee39!2sCentro+Comercial+y+Recreacional+Las+Virtudes!5e0!3m2!1ses-419!2sve!4v1519936127158"  height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  <div class="main-contact__form">
    <div class="caption-form hvr-shadow">
      <div class="container-form">
        <div class="title-contacts">
          <h3 class="open-sans title-contact">Subscríbete al newsletter</h3>
        </div>
        <div class="campos">
          <input class="input-form" placeholder="Nombre y Apellido" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre y Apellido'" />
        </div>
        <div class="campos">
          <input class="input-form" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" />
        </div>
        <div class="campos">
          <input class="input-form" placeholder="Teléfono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Teléfono'" />
        </div>
        <div class="campos">
         <textarea class="form-mensaje input-form" placeholder="Mensaje" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'"></textarea>
       </div>
       <div class="campos">
        <button class="button-form hvr-button" type="submit">Enviar</button>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<?php get_footer(); ?>