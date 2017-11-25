<?php get_header(); ?>

<div id="main"><div id="main-1">

<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php /* If this is a category archive */ if (is_category()) { ?>			
<h2 class="post-title">Archive for the '<?php echo single_cat_title(); ?>' Category</h2>

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="post-title">Archive for <?php the_time('F jS, Y'); ?></h2>
		
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="post-title">Archive for <?php the_time('F, Y'); ?></h2>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="post-title">Archive for <?php the_time('Y'); ?></h2>
		
<?php /* If this is a search */ } elseif (is_search()) { ?>
<h2 class="post-title">Search Results</h2>
		
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="post-title">Author Archive</h2>

<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

<h2 class="post-title">Blog Archives</h2>

<?php } ?>

<p class="prev-next">
<?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?></p>

<?php while (have_posts()) : the_post(); ?>
<div class="post">
<h3 class="post-date"><?php the_time('F jS, Y') ?></h3>
<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="post-body">
<?php the_content() ?>
</div>
<p class="postmetadata"><?php the_author() ?> | <?php the_category(', ') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> | <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">#</a></p>
</div>
	
<?php endwhile; ?>

<p class="prev-next"><?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?></p>	

<?php else : ?>

<h2 class="post-title">Not Found</h2>

<div id="search-main">
<h3>Search</h3>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>?>

<?php endif; ?>
		
</div></div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>