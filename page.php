<?php 
while(have_posts()){
    the_post();?>
    <h1><?php the_title(); ?></a></h1>
    <h2><?php  the_content();  ?></h2>
    <hr>
<?php }
?>