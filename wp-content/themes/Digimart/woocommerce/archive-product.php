      <div class="padding-ri grid">
        <div class="selec-product">
<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
          <a href="<?php the_permalink(); ?>" class=" caption-products samsung" >
            <div class="card hvr-shadow-p">
              <div class="card-img">
                <div class="img-products" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
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
</div>