<div id="sidebar">

<div class="side-sec pages">
<h3>Pages</h3>
<ul>
<?php wp_list_pages('title_li='); ?> 
</ul>
</div>

<div class="side-sec archives">
<h3>Archives</h3>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>

<div class="side-sec categories">
<h3>Categories</h3>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
</div>

<div class="side-sec links">
<h3>Links</h3>
<ul>
<?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', TRUE, TRUE, -1, TRUE); ?>
</ul>
</div>

<div class="side_sec_subscribe">
<h3>Subscribe</h3>
<ul>
<li><a href="feed:<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/i/rss.png" alt="Entries RSS feed" /> Entries (RSS)</a></li>
<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/i/rss.png" alt="Comments RSS feed" /> Comments (RSS)</a></li>
</ul>
</div>

</div>