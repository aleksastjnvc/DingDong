<?php get_header() ?>



<?php while(have_posts()) {
                the_post();         
        ?>

<h2 class="page-heading"><?php the_title(); ?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
            <?php if(has_post_thumbnail()) { ?>
          <div class="card-image">
            <img style="height:250px; width:250px; border-radius:50%;" src="<?php echo get_the_post_thumbnail_url(get_the_ID());?> " alt="Card Image">
          </div>
            <?php } ?>
          <div class="card-description">
            <?php the_content(); ?>
          </div>
        </div>
                   
      </section>

    <?php } ?>

      <aside id="sidebar">
        <h3>The Introduction</h3>
        <p>What Is Our Purpose?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti corrupti tempora vitae voluptates quod explicabo soluta nulla vel animi? Optio, hic? Cum laborum adipisci nihil ea, ducimus eveniet quaerat! Dolorem laboriosam alias doloremque eos quam nisi et nam illo maiores.</p>
      </aside>
    </div>

    <br>

    <?php get_footer() ?>