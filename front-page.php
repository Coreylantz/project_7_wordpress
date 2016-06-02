<?php get_header(); ?>

<div class="main">
  <div class="hero" style="background:url(<?php the_post_thumbnail_url('hero'); ?>); background-size: cover; background-position: center; ">
    <div class="heroPost">
      <h1 class="entry-title"><?php the_field('heroTitle'); ?></h1>
      <p class="note"><?php the_field('heroSubtitle'); ?></p>
      <a href="#content">Read More</a>
    </div>
    
  </div>

  <div class="container clearfix">
    <div class="content frontContent" id="content">
        
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

       <?php $frontPagePosts = new WP_Query( ['posts_per_page' => 4] ); ?>
               <?php if ( $frontPagePosts->have_posts() ) : ?>
                   <?php while ( $frontPagePosts->have_posts() ) : $frontPagePosts->the_post(); ?>
                      <div class="frontPost">
                        <figure>
                          <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
                        </figure>
                        <div class="frontPostText">
                          <p><?php the_category(' '); ?></p>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_time('F j, Y'); ?></p>
                          <?php the_excerpt(); ?>
                        </div>
                      </div>
                   <?php endwhile; ?>
                   <?php wp_reset_postdata(); ?>

           <?php else:  ?>
               [stuff that happens if there aren't any posts]
           <?php endif; ?>

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>