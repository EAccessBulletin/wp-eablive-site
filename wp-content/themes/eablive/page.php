<?php get_header(); ?>

<div id="main"><div id="main-1">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2 class="post-title"><?php the_title(); ?></h2>
<div class="post-body">
<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
</div>
</div>
<?php endwhile; endif; ?>

</div></div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>