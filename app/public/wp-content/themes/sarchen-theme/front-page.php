<?php 
get_header();
/*
Template Name: Front Page
*/ 
?>

<style>
    <?php include 'style.css'; ?>
</style>

<div class="container">
  <div class="avatar-flip">
    <img src="http://sarchenstarke2.local/wp-content/uploads/2019/06/round-photo-close-up-1.png" height="150" width="150">
    <img src="http://i1112.photobucket.com/albums/k497/animalsbeingdicks/abd-3-12-2015.gif~original" height="150" width="150">
  </div>
  <h2>Sarchen Starke</h2>
  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
  <p><b>Bachelor of Computer Science, Fourth Year<br>University of British Columbia</b></p><hr>
  <p>Seeking Summer 2020 Internship</p>
  <p>Work experience with:<br> Java, JavaScript, Ruby, Android Studio</p><hr>
  <i class="fa fa-github"></i>
  <p>https://github.com/sarchst</p>
  <p>Check out my <a href="<?php echo get_post_type_archive_link('resume'); ?>">resume</a> for more about me</p>
</div>

<?php get_footer(); ?>





