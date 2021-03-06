<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="sideContent">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  
        
        <div class="singlePage" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
          <figure>
            <img src="<?php the_post_thumbnail_url('largeSquare'); ?>" alt="">
          </figure>
          <div class="singleTitle">
            
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-meta">
              <?php hackeryou_posted_on(); ?>
            </div><!-- .entry-meta -->
          </div>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>