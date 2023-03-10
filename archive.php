<?php wp_head(); ?>
<body>
        <main>
         
                <h2 class="page-heading"><?php the_archive_title(); ?></h2>
      

    <section>

        <?php while(have_posts()) {
                the_post();         
        ?>

    

        <div class="card">
            <div class="card-img">
                <a href="<?php the_permalink() ?>">
                    <img src="<?php the_post_thumbnail() ?>">
                </a>
            </div>
            <div class="card-description">
                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>

                <h4>
                <div class="card-meta">
                    This was posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> 
                </div>
                </h4>
                
                <p>
                   <?php echo wp_trim_words(get_the_excerpt(), 30);?>
                </p>
                <a href="<?php the_permalink()?>" class="read-more-btn">Read More</a>
            </div>
        </div>

        <?php } 
        wp_reset_query() ?>    

            <div class="pagination"></div>
            <?php echo paginate_links();?>
            </div>
   
    </section>
<?php get_footer();?>

