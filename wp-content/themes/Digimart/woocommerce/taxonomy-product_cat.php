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
                        <div>
                          <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                            <h2 class="title-marcas">Marcas</h2>
                            <label class="check ">Todos
                              <input id="todos" name="filter" type="checkbox" class="checked" value=".caption-products">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Samsung
                              <input id="pln" name="filter" type="checkbox"  class="check-brand" value=".samsung" class="active">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Blue
                              <input id="htl" name="filter" type="checkbox" class="check-brand" value=".blu">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Motorola
                              <input id="atc" name="filter" type="checkbox" class="check-brand" value=".motorola">
                              <span class="checkmark"></span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title ">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1-2">
                        Telefonos Basicos</a>
                      </h4>
                    </div>
                    <div id="collapse1-2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div>
                          <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                            <h2 class="title-marcas">Marcas</h2>
                            <label class="check ">Todos
                              <input id="todos" name="filter" type="checkbox" class="checked" value=".caption-products">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Samsung
                              <input id="pln" name="filter" type="checkbox"  class="check-brand" value=".samsung" class="active">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Blue
                              <input id="htl" name="filter" type="checkbox" class="check-brand" value=".blu">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Motorola
                              <input id="atc" name="filter" type="checkbox" class="check-brand" value=".motorola">
                              <span class="checkmark"></span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1-3">
                        Accesorios</a>
                      </h4>
                    </div>
                    <div id="collapse1-3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div>
                          <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                            <h2 class="title-marcas">Marcas</h2>
                            <label class="check ">Todos
                              <input id="todos" name="filter" type="checkbox" class="checked" value=".caption-products">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Samsung
                              <input id="pln" name="filter" type="checkbox"  class="check-brand" value=".samsung" class="active">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Blue
                              <input id="htl" name="filter" type="checkbox" class="check-brand" value=".blu">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Motorola
                              <input id="atc" name="filter" type="checkbox" class="check-brand" value=".motorola">
                              <span class="checkmark"></span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                Tablets y Relojes</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body panel-body2">
                <div class="panel-group" id="accordion2">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2-1">
                        Tablets</a>
                      </h4>
                    </div>
                    <div id="collapse2-1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <div>
                          <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                            <h2 class="title-marcas">Marcas</h2>
                            <label class="check ">Todos
                              <input id="todos" name="filter" type="checkbox" class="checked" value=".caption-products">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Samsung
                              <input id="pln" name="filter" type="checkbox"  class="check-brand" value=".samsung" class="active">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Blue
                              <input id="htl" name="filter" type="checkbox" class="check-brand" value=".blu">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Motorola
                              <input id="atc" name="filter" type="checkbox" class="check-brand" value=".motorola">
                              <span class="checkmark"></span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2-2">
                        Relojes Inteligente</a>
                      </h4>
                    </div>
                    <div id="collapse2-2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div>
                          <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                            <h2 class="title-marcas">Marcas</h2>
                            <label class="check ">Todos
                              <input id="todos" name="filter" type="checkbox" class="checked" value=".caption-products">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Samsung
                              <input id="pln" name="filter" type="checkbox"  class="check-brand" value=".samsung" class="active">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Blue
                              <input id="htl" name="filter" type="checkbox" class="check-brand" value=".blu">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Motorola
                              <input id="atc" name="filter" type="checkbox" class="check-brand" value=".motorola">
                              <span class="checkmark"></span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2-3">
                        Accesorios</a>
                      </h4>
                    </div>
                    <div id="collapse2-3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div>
                          <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                            <h2 class="title-marcas">Marcas</h2>
                            <label class="check ">Todos
                              <input id="todos" name="filter" type="checkbox" class="checked" value=".caption-products">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Samsung
                              <input id="pln" name="filter" type="checkbox"  class="check-brand" value=".samsung" class="active">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Blue
                              <input id="htl" name="filter" type="checkbox" class="check-brand" value=".blu">
                              <span class="checkmark"></span>
                            </label>
                            <label class="check ">Motorola
                              <input id="atc" name="filter" type="checkbox" class="check-brand" value=".motorola">
                              <span class="checkmark"></span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                Computacion</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav-column" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a aria-controls="group3-option1" aria-selected="true" data-toggle="tab" href="#group3-option1" role="tab">Computadoras</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group3-option2" aria-selected="false" data-toggle="tab" href="#group3-option2" role="tab">Complementos</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group3-option3" aria-selected="false" data-toggle="tab" href="#group3-option3" role="tab">Almacenamiento</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group3-option4" aria-selected="false" data-toggle="tab" href="#group3-option4" role="tab">Accesorios</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                Tv y Video</a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav-column"  id="myTab" role="tablist">
                  <li class="nav-item">
                    <a aria-controls="group4-option1" aria-selected="true" data-toggle="tab" href="#group4-option1" role="tab">TVs</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group4-option2" aria-selected="false" data-toggle="tab" href="#group4-option2" role="tab">Audio y video tvs</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group4-option3" aria-selected="false" data-toggle="tab" href="#group4-option3" role="tab">Accesorios</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                Audio</a>
              </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav-column" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a aria-controls="group5-option1" aria-selected="true" data-toggle="tab" href="#group5-option1" role="tab">Audifonos</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group5-option2" aria-selected="false" data-toggle="tab" href="#group5-option2" role="tab">Sonidos y parlantes</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group5-option3" aria-selected="false" data-toggle="tab" href="#group5-option3" role="tab">Audio vehículos</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group5-option4" aria-selected="false" data-toggle="tab" href="#group5-option4" role="tab">Accesorios</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                Videojuegos</a>
              </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav-column"  id="myTab" role="tablist">
                  <li class="nav-item">
                    <a aria-controls="group6-option1" aria-selected="true" data-toggle="tab" href="#group6-option1" role="tab">Consolas</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group6-option2" aria-selected="false" data-toggle="tab" href="#group6-option2" role="tab">Juegos8</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group6-option3" aria-selected="false" data-toggle="tab" href="#group6-option3" role="tab">Accesorios</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                Càmara</a>
              </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav-column" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a aria-controls="group7-option1" aria-selected="true" data-toggle="tab" href="#group7-option1" role="tab">Cámaras digitales</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group7-option2" aria-selected="false" data-toggle="tab" href="#group7-option2" role="tab">Videocámaras</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group7-option3" aria-selected="false" data-toggle="tab" href="#group7-option3" role="tab">Cámaras de seguridad</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group7-option4" aria-selected="false" data-toggle="tab" href="#group7-option4" role="tab">Accesorios</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading hvr-shadow">
              <h4 class="panel-title panel-general">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                Drones y radiocontrol</a>
              </h4>
            </div>
            <div id="collapse8" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav-column" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a aria-controls="group8-option1" aria-selected="true" data-toggle="tab" href="#group8-option1" role="tab">Drones y radiocontrol</a>
                  </li>
                  <li class="nav-item">
                    <a aria-controls="group8-option2" aria-selected="false" data-toggle="tab" href="#group8-option2" role="tab">Juguetes</a>
                  </li>
                </ul>
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