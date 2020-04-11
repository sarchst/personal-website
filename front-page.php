<?php 
get_header();
/*
Template Name: Front Page
*/ 
?>

<?php 
// TODO
// change profile photo to new one (must retake)
// change photos to use custom fields
?>

<style>
    <?php include 'style.css'; ?>
</style>

<div class="container">
  <div class="avatar-flip">
    <img src="http://sarchen.local/wp-content/uploads/2020/04/vsaranphotodotcom-WEB-43-e1586636570588.jpg" height="150" width="150">
    <img src="http://sarchen.local/wp-content/uploads/2020/04/IMG_0182.jpg" height="150" width="150">
  </div>
  <h2><?php echo get_post_meta(get_the_ID(), 'name', TRUE); ?></h2>
  <p><b><?php echo get_post_meta(get_the_ID(), 'job_title', TRUE); ?></b></p>
  <p><?php echo get_post_meta(get_the_ID(), 'education', TRUE); ?></p><hr>
  <p><?php echo get_post_meta(get_the_ID(), 'seeking', TRUE); ?></p>
  <p><?php echo get_post_meta(get_the_ID(), 'my_experience_summary', TRUE); ?></p>
  <p><?php echo get_post_meta(get_the_ID(), 'languages_used', TRUE); ?></p><hr>
  <p><a href="<?php echo get_post_meta(get_the_ID(), 'github', TRUE); ?>">Github</a></p>
  <p><a href="<?php echo get_post_meta(get_the_ID(), 'linked_in', TRUE); ?>">LinkedIn</a></p>
  <p>Check out my <a href="<?php echo get_page_link(14,false,false ); ?>">resume</a> for more about me</p>
</div>

<?php get_footer(); ?>





