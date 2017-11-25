<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div>
<input type="text" size="14" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input src="i/button_search.png" value="search" type="image" id="searchsubmit">
</div>
</form>
