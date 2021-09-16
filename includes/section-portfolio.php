<?php

$args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 4
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<div class="col-6">';
        echo ' <a id="client-project" href="' . get_the_permalink() . '">';
        echo get_the_post_thumbnail();
        echo '</a>';
        echo '</div>';
    }
}
/* Restore original Post Data */
wp_reset_postdata();

?>