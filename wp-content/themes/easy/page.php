<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="article">
i am page.php
	<div class="article-title"><?php the_title() ?></div>
	<div class="article-body"><?php the_content() ?></div>
</div>
<?php endwhile; ?>

<?php else: ?>
<?php echo "no articles yet" ?>
<?php endif; ?>
 ?>

<?php get_footer() ?>
