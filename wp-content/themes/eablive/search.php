<?php get_header(); ?>

<div id="main"><div id="main-1">

<?php if (have_posts()) : ?>

<h2 class="post-title">Search Results</h2>
		
<?php while (have_posts()) : the_post(); ?>

<div class="search-result">				
<h2  class="post-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="postmetadata"><?php the_time('l, F jS, Y') ?> | <?php the_category(', ') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
</div>

<?php endwhile; ?>

<?php else : ?>

<h3>No posts found. Try a different search?</h3>
<div id="search-main">
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>

<?php endif; ?>
		
</div></div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>