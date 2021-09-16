<?php if(have_posts()): while(have_posts()): the_post();?>

    <div class="col-6">
        <a id="client-project" href="<?php the_permalink();?>">
            <?php the_post_thumbnail();?>
        </a>
    </div>

<?php endwhile; else: endif;?>