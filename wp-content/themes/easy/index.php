<?php get_header() ?>
<?php
$args = array(
	'date_query' => array(
        array(
            'after' => '1 week ago'
        )
    ));
$the_query = new WP_Query($args);
 ?>
<!-- main -->
<div id="main">


<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<!-- post -->
<?php the_title() ?>
<?php the_content() ?>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer() ?>
