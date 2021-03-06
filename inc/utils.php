<?php 

// generic reusable function to find posts of a given type belonging to the given service id
function posts_belonging_to_service($post_type, $id){
  $query = new WP_Query(array(
      "post_type" => $post_type,
      "meta_query" => array(
        array(
          "key" => "service",
          "value" => $id
        )
      )
  ));
  return $query->get_posts();
}