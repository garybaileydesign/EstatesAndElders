<div class="fake-header"></div>

<div class="container-fluid" id="blog-post">
  <?php while (have_posts()) : the_post(); ?>
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
      <div class="row">
        <article <?php post_class(); ?>>
          <div id="thumbnail">
            <?php if ( has_post_thumbnail() ) {
               the_post_thumbnail();
            }?>
          </div>
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
          </footer>
        </article>
      </div>
      <div class="row">
        <?php comments_template('/templates/comments.php'); ?>
      </div>
    </div>
  <?php endwhile; ?>
</div>
