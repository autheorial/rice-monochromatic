<div id="sidebar">

<ul id="navigation">
<?php wp_list_pages('title_li=&depth=1'); ?>


</ul>
<?php
if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar() ) : ?>

<?php endif; ?>
</div>