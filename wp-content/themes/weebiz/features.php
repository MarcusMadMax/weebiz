<!-- Features -->
<div class="container features">
    <div class="page-header-title">
        <h2 class="heading-title text-center">Features</h2>
    </div>
    <div class="features-wrap">
        <div class="row mtb-50">
            <?php
                $args = array('post_type' => 'home');

                $the_query = new WP_Query( $args );
                
                    // The Loop
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('partials/content','home');
                    }

                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>