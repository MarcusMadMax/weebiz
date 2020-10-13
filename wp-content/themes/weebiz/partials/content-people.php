    <div class="col-sm-6 col-md-3">
    <!-- Team Item Starts -->
        <div class="team-item">
            <figure class="team-profile">
                <img src="<?php the_field('image')?>" alt="">
                <figcaption class="our-team">
                    <div class="details">
                        <p class="content-white"><?php the_content()?></p>
                        <hr class="small-divider border-white">
                        <div class="social">
                            <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="google-plus" href="#"><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
                </figcaption>
            </figure>
            <div class="info">
                <h2>
                    <?php the_field('name')?>
                </h2>
                <p>
                    <?php the_field('title')?>
                </p>
            </div>
        </div>
    <!-- Team Item Ends -->
    </div>
