<?php 
get_header();
while(have_posts()){
    the_post();?>
    <h1><?php the_title(); ?></h1>
    <h2><?php  the_content();  ?></h2>
    <hr>
<?php }
get_footer();
?>
