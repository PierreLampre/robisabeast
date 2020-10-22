<?php 

get_header(); ?>

<h1 class="blog-heading">BLOG</h1>

<div class="container">

<?php 

if(have_posts()) {
while(have_posts()) {
    the_post();?>
    <div class="post-item">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="metabox">
            <p>Posted By: <?php the_author(); ?> on <?php the_time("m.j.Y"); ?></p>
        </div>
        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php } 
    } else { ?>
        <div class="no-posts">
            <h2>No posts to show</h2>
            <h2>Come back for updates!</h2>
        </div>
   <?php } ?>

   <span class="pagination"><?php echo paginate_links(); ?></span>

</div>

<?php

get_footer();

?>
