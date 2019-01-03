<!-- Blog Page! -->
<?php
/*
Template Name: Blog
*/
?>

<section class="bg-primary" id="blog">
  <h2>Words of wisdom and resources</h2>
</section>


<?php
function TrimStringIfToLong($s) {
    $maxLength = 60;

    if (strlen($s) > $maxLength) {
        echo substr($s, 0, $maxLength - 5) . ' ...';
    } else {
        echo $s;
    }
}

?>

<section class="container-fluid" id="blog">
  <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
    <?php
    $query = array( 'posts_per_page' => -1, 'order' => 'ASC' );
    $wp_query = new WP_Query($query);

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row post">
        <div class="">
          <a href="<?php the_permalink() ?>" title="Link to <?php the_title_attribute() ?>">
            <div class="img-crop">
            <?php if ( has_post_thumbnail() ) {
    	         the_post_thumbnail();
            }?>
            </div>
          </a>
        </div>
        <div class="time">
          <?php echo get_the_date(); ?>
        </div>
        <div class="title">
          <a href="<?php the_permalink() ?>" title="Link to <?php the_title_attribute() ?>">
            <?php TrimStringIfToLong(get_the_title()); ?>
          </a>
        </div>
        <div class="description">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink() ?>" title="Link to <?php the_title_attribute() ?>" class="btn">
            Read More
          </a>
        </div>
      </div>
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts published so far.'); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_template_part('templates/contact-me-now', 'contact-me-now'); ?>
