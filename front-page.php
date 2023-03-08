<?php get_header();?>

    <?php wp_head(); ?>
</head>
<body>

     
    <main>
        <a href="<?php echo site_url('/event')?>">
            <h2 class="section-heading">View All Events</h2>
        </a>

        <section>

        <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );

            $events = new WP_Query($args);

            while($events->have_posts()) {
                $events->the_post();         
            

        ?>


        <div class="card">
            <div class="card-img">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail()?>">
                </a>
            </div>
            <div class="card-description">
                <a href="<?php the_permalink();?>"> on <?php the_time('F j, Y')?>
                    <h3 class="card-desc-heading"><?php the_title();?></h3>
                </a>


               
                <h3>
                    View more EVENTS located in :
                    <a href="<?php the_permalink();?>">
                    <?php echo get_the_category_list();?>
                    </a>
                </h3>
                


                <p>
                   <?php echo wp_trim_words(get_the_excerpt(), 30);?>
                </p>
                <a href="<?php the_permalink()?>" class="read-more-btn">Read More</a>
            </div>
        </div>
 
        <?php } 
        wp_reset_query()?>    
   </main>
 </section>
   
 
    <main>
        <a href="<?php echo site_url('/ideas')?>">
            <h2 class="section-heading">View All Ideas</h2>
        </a>

    <section>
        <?php

            $args = array(
                'post_type' => 'ideas',
                'posts_per_page' => 2,
            );

            $ideas = new WP_Query($args);

            while($ideas->have_posts()) {
                $ideas->the_post();         
        ?>
            <div class="card">
            <div class="card-img">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail();?>">
                </a>
            </div>
            <div class="card-description">
                <a href="<?php the_permalink();?>"> on <?php the_time('F j, Y')?>
                    <h3 class="card-desc-heading">
                        <?php the_title();?>
                    
                    </h3>
                </a>
                <p>
                   <?php echo wp_trim_words(get_the_excerpt(), 30);?>
                </p>
                <a href="<?php the_permalink()?>" class="read-more-btn">Read More</a>
            </div>
        </div>

      

            <?php } 
        wp_reset_query()?> 
            </section>
        </main>
</body>
</html>

<?php get_footer();?>

