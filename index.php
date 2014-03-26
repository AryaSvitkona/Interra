<!--
Theme Name: Interra
Theme URI: http://none.ch
Author: Stefano Rutishauser
Author URL: http://portfolio.projectlearning.ch
Description: The following WP theme was made as a test for the SBW Haus des Lernens. It's only a test template for noncommercial use.
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
   <div id="categories">
      <?php
         $categories=get_categories($args);
         foreach($categories as $category) { 
         ?>
         <div class="box">
            <li>
               <h1><a href="<?php echo get_category_link( $category->term_id ); ?>"> <?php  echo $category->name;?></a> </h1>
               <div class="description"><h4> Description:</h4><p><?php echo $category->description; ?></p></div>
            </li>
         </div>
         <?php
         } 
      ?> 
   </div>
   <div style="clear:both;"></div>
   <?php 
   // now get it in any place you want, even inside another function
function do_something_cool()
{
   $other_var = youruniquekey_get_var();
   echo $other_var; // show the global variable
}
do_something_cool();

echo $other_var;

   ?>
   <div id="w-posts">
      <?php
         $dir    = '../';
         $files1 = scandir($dir);
            foreach($files1 as $filename) {
            if ($filename != "." && $filename != "..") {
            ?>
            <div class="file-box">
               <li>
                  <?php
                     echo '<h1><a href="#">' . $filename.'</a></h1> in <span class="file-categorie"><a href='.get_category_link( $category->term_id ).'>'.$category->name.'</a></span> ';
                  ?>
               </li>
            </div>
            <?php
               }
           }
      ?>
   <div style="clear:both;"></div>
   </div>
</div>
<?php get_footer(); ?>