<?php wp_head() ?>



<?php while(have_posts()) {
                the_post();         
        ?>

<main>
<h2 class="page-heading"><?php the_title() ?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-meta-blogpost">
            <h3>
            Posted by <?php the_author() ?> on <?php the_time('F j, Y') ?> 
         
            <?php

                if(get_post_type() == 'post') { ?>
                   in <a href="<?php echo get_the_category_list() ?>"></a> 

            <?php } ?>

            </h3>
          </div>
          <div class="card-img">
            <img src="<?php the_post_thumbnail() ?> " >
          </div>
          <div class="card-description">
            <?php the_excerpt() ?>
        </div>

        <?php } ?>

        <div id="comments-section">
          <?php comment_form() ?>

            <?php

                $comments = get_comments_number();
                    if($comment != 0) {

            ?>
       
                <div class="comments">
                    <h3>What people say</h3>
                    <ol class="all-comments">
                        <?php 
                            $comments = get_comments(
                                array(
                                    'post_id' => $post->ID,
                                    'status' => 'approve',
                                ));
                                
                                wp_list_comments(array(
                                    'per_page' => -1,
                                ), $comments
                            );
                        ?>
                    </ol>
                </div>



    <?php } ?>

        
        </div>
    </section>
    
      <aside id="sidebar">
                            <?php require 'searchform.php' ?>
                                <?php dynamic_sidebar('main_sidebar')?>

      </aside>

    </div>
    
    
    
    <?php get_footer() ?>