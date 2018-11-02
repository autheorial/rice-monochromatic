<?php get_header(); ?>


<h6>Search Results</h6>

<p>These are your results, listed in most recent to least
recent! Hopefully you found what you
were looking for. The results include both <b>posts</b>
and <b>pages</b>, in case you wanted to know.</p>

<?php $posts=query_posts($query_string .
'&posts_per_page=10'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
<?php the_excerpt(); ?> <hr />

<?php endwhile; ?>


<p class="left"><?php next_posts_link('&laquo; Previous') ?></p>
<p class="right"><?php previous_posts_link('Next &raquo;') ?></p>

<?php else : ?>
<h1>Poop!</h1>
<p>Apparently your search results came up with nothing! D: Perhaps you made a spelling error? You can always try again :)</p>

<?php get_search_form(); ?>


<?php endif; ?>

<?php get_footer(); ?>