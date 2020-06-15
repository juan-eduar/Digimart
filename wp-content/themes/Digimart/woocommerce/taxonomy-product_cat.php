<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php get_header(); ?>


  <section class="main-category padding__general">
    <div class="main-category__content">

      <div class="main-category--sidebar">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                Celular</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="panel-body panel-body2">
                <div class="panel-group" id="accordion2">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title panel-sub">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1-1">
                        Telefonos Inteligente</a>
                      </h4>
                    </div>
                    <div id="collapse1-1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <div class="content-categories__general">
                          <h2 class="title-marcas">Marcas</h2>
                          <a class="title-subproducto">Todos
                          </a>
                          <a class="title-subproducto">Samsung
                          </a>
                          <a class="title-subproducto">Blue
                          </a>
                          <a class="title-subproducto">Motorola
                          </a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
wc_get_template( 'archive-product.php' ); ?>
</div>

</section>



<?php get_footer(); ?>