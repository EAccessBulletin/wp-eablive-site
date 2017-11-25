<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="main"><div id="main-1">

<div class="post">
<h2>Archives by Month:</h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>

<div class="post">
<h2>Archives by Subject:</h2>
<ul>
<?php wp_list_cats(); ?>
</ul>
</div>

</div></div>	

<?php get_sidebar(); ?>

<?php get_footer(); ?>