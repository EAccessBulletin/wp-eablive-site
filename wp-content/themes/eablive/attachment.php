<?php get_header(); ?>

<div id="main"><div id="main-1">
				
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<p class="prev-next">&nbsp; &nbsp;</p>

<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

<div class="post" id="post-<?php the_ID(); ?>">
<h2 class="post-title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="post-body">
<p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>

<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	
<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

<p class="postmetadata">
Posted by <?php the_author() ?> on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> | <?php the_category(', ') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
</div>
</div>
		
<?php comments_template(); ?>
	
<?php endwhile; else: ?>
	
<p>Sorry, no attachments matched your criteria.</p>
	
<?php endif; ?>
	
</div></div>

<?php get_footer(); ?>