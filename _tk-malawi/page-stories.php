<?php
/**
 *The home page, where posts are posted and such.
 *
 * @package _tk
 */

get_header(); ?>

<div class="container">

  <div class="row"><!--biggest row, serves as a second container-->


    <!-- ------------MAIN COLUMN ONE-------------->
    <div class="col-lg-4 col-md-4">

      <div class="categ-header"><h1>CATEGORY 1</h1></div>
      <?php

      /*row-0-0*/
      $args1 = array(
        'cat'=>'1'
      );

      //Query
      $query1 = new WP_Query($args1); ?>

      <div class="row">
        <?php
        //Loop with posts query
          while ( $query1->have_posts() ) {
            $query1->the_post();
              get_template_part( 'content', get_post_format() );
          }

          //Restore original post data
          wp_reset_postdata();

          ?>
        </div><!--end inner row-->

    </div><!--END MAIN COL 1-->

    <!-- ------------MAIN COLUMN TWO-------------->
     <div class="col-lg-4 col-md-4">
       <div class="categ-header"><h1>CATEGORY 2</h1></div>
       <?php

       /*row-0-0*/
       $args2 = array(
         'cat'=>'3'
       );

       //Query
       $query2 = new WP_Query($args2); ?>

      <div class="row">
        <?php
        //Loop with posts query
        while ( $query2->have_posts() ) {
          $query2->the_post();
            get_template_part( 'content', get_post_format() );
        }

        //Restore original post data
        wp_reset_postdata();

        ?>
        </div><!--end inner row-->

    </div><!--END MAIN COL 2-->

    <!-- ------------MAIN COLUMN THREE-------------->
     <div class="col-lg-4 col-md-4">
       <div class="categ-header"><h1>CATEGORY 3</h1></div>
       <?php

       /*row-0-0*/
       $args3 = array(
         'cat'=>'4'
       );

       //Query
       $query3 = new WP_Query($args3); ?>

        <div class="row">
          <?php
          //Loop with posts query
        while ( $query3->have_posts() ) {
          $query3->the_post();
            get_template_part( 'content', get_post_format() );
        }

        //Restore original post data
        wp_reset_postdata();

        ?>
        </div><!--end inner row-->

    </div><!--END MAIN COL 3-->

  </div><!--END BIG ROW-->



<?php get_footer(); ?>
