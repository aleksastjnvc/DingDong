<?php wp_head(); ?>



<body>

      <main>
    
        
            <h2 class="section-heading"> Search Results For : <?php echo get_search_query() ?> </h2>
       

        <?php if(have_posts()) { ?>

        <section>

        <?php

            while(have_posts()) {
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
                        
                            <p>View all EVENTS in</p>
                            <?php echo get_the_category_list(); ?> </a>
                </div>
                </h4>
                
                <p>
                            <?php echo wp_trim_words(get_the_excerpt(), 30);?>
                </p>
                <a href="<?php the_permalink()?>" class="read-more-btn">Read More</a>
            </div>
        </div>

        <?php } wp_reset_query() ?>    

            </section>   

        <?php } else { ?>

            <div class="no-results">

            <h3> :( </h3>

            <h3>We could not find anything that matches your search.</h3>
            <h3>Did you misstype something?</h3>

            </div>

        <?php } ?>

<?php get_footer();?>

