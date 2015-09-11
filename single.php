<?php  while ( have_posts() ) : the_post(); ?>
 <div class="wrapper">

  <div class="project-image animate">
   <?php the_post_thumbnail(); ?>
 </div>

 <div class="project-content animate">

   <h3 class="project-title"><?php the_title(); ?></h3>

   <div class="project-tags">

    <?php
    $posttags = get_the_tags();
    if ($posttags) {
      echo "<ul>";
      foreach($posttags as $tag) {
        echo '<li>' . $tag->name . '</li>'; 
      }
      echo "</ul>";
    }
    ?>



  </div>
  <div class="project-description">
    <?php the_content(); ?>
  </div>

  <a class="website-link" rel="nofollow" href="<?php the_field('website_url');?>" target="_blank"><span><?php echo __("Visit Website", "ReadyArtwork"); ?></span></a>

</div>



</div>
<?php endwhile; ?>