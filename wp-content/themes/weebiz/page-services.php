<?php get_header()?>
    <!-- Features -->
    <div class="container services">
        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content','index');
            } // end while
        ?>

        <div class="row mtb-50">
        <?php
        $args = array('post_type' => 'service');
        //Get data (services) from database
        // The Query
        $the_query = new WP_Query( $args );
        
        // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/content','service');
            }

        /* Restore original Post Data */
        wp_reset_postdata();

        //render each service using template

        ?>

        </div>

    </div>
<?php get_footer()?>

   