<!--
Theme Name: Interra
Theme URI: http://none.ch
Author: Stefano Rutishauser
Author URI: http://portfolio.projectlearning.ch
Description: The following WP theme was made as test for the SBW Haus des Lernens. It's only a test template for noncommercial use.
Version: 1.0
Tags: intranet, sbw, layout, light, white,
Text Domain: interra
-->

<?php get_header(); ?>
      <?php $args = array(
   'show_option_all'    => '',
   'orderby'            => 'name',
   'order'              => 'ASC',
   'style'              => 'list',
   'show_count'         => 0,
   'hide_empty'         => 0,
   'use_desc_for_title' => 1,
   'child_of'           => 0,
   'feed'               => '',
   'feed_type'          => '',
   'feed_image'         => '',
   'exclude'            => '',
   'exclude_tree'       => '',
   'include'            => '',
   'hierarchical'       => 1,
   'title_li'           => __( 'Categories' ),
   'show_option_none'   => __('No categories'),
   'number'             => null,
   'echo'               => 1,
   'depth'              => 0,
   'current_category'   => 0,
   'pad_counts'         => 0,
   'taxonomy'           => 'category',
   'walker'             => null
); ?>

<div id="wrapper">
   <div id="content">
      <?php
         $categories=get_categories($args);
         foreach($categories as $category) { 
         ?>
         <div class="box">
            <li>
               <?php
                  echo '<h1><a href="#">' . $category->name.'</a> </h1> ';
                  echo '<div class="description"><h4> Description:</h4><p>'. $category->description . '</p></div>';
               ?>
            </li>
         </div>
         <?php
         } 
      ?> 
    </div>
</div>
<?php get_footer(); ?>

<!--      <?php
         $categories=get_categories($args);
         foreach($categories as $category) { 
         ?>
         <div class="box">
            <li>
               <?php
                  echo '<h1><a href="#">' . $category->name.'</a> </h1> ';
                  echo '<h4> Description:</h4><p>'. $category->description . '</p>';
               ?>
            </li>
         </div>
         <?php
         } 
      ?> 
        ?>-->