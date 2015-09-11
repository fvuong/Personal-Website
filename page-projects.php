<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$projectId = 15; 

?>

<?php 


$project = get_post($projectId);


?>




{
  "title":<?php echo get_the_title($projectId); ?>,
  "content":<?php echo $project->post_content; ?>,
  "img-url":<?php echo wp_get_attachment_url( get_post_thumbnail_id($projectId) ); ?>
}







<?php $tags = get_the_tags($projectId); 
foreach ($tags as $tag) {
  echo $tag->name; 
}

?>
