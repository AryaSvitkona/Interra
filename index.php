<!--
Theme Name: Interra
Theme URI: http://none.ch
Author: Stefano Rutishauser
Author URI: http://portfolio.projectlearning.ch
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
   <div id="w-posts">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
               <?php the_excerpt(); ?>
            </div>
         <?php endwhile; ?>
         <p align="center"><?php next_post_link('homo'); ?> | <?php previous_post_link('nextink'); ?></p>
      <?php endif; ?>
   </div>
</div>
<?php get_footer(); ?>