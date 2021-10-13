<?php get_header(); ?>
    <div class="content-block">   <!-- Content Block   -->
        <div class="content-block-content">
            <?php
                global $post;
                $args = array( 'numberposts' => 1, 'category_name' => 'Products', 'order' => 'DESC',);
                $myposts = get_posts( $args );
                foreach($myposts as $post){ setup_postdata($post); ?>
                    <h1><?php the_title() ?></h1>
                    <div class="content"><?php the_content() ?></div>
            <?php 
                }
                wp_reset_postdata();
            ?>  
        </div>
        <div class="content-block-img"></div>
    </div>    
    <div class="testimonials">     <!-- Testimonials  -->
        <h2>What My <span>Clients Say</span></h2>
        <div class="owl-carousel  owl-theme">
            <?php
                global $post;
                $args = array( 'numberposts' => -1, 'post_type' => 'slider');
                $myposts = get_posts( $args );
                foreach($myposts as $post){ setup_postdata($post); ?>
                    <div class="slider-wrapper item">
                        <div class="slider-img">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="slider-text">
                            <div class="slider-text-text"><?php the_content();?></div>
                            <div class="slider-text-name"><?php the_field('name');?></div>
                            <div class="speciality"><?php the_field('speciality');?></div>
                        </div>
                    </div>
            <?php 
                }
                wp_reset_postdata();
            ?>
        </div>
        <div class="slider-navigation">
            <div class="left">&#8592;</div>
            <div class="right">&#8594;</div>
        </div>
    </div>
    <div class="contact">        <!-- Contact  -->
        <div class="contact-block">
            <div class="contact-text">
                <?php 
                    $post_id = get_post( 55 );
                    ?>
                    <h2><?php echo $post_id->post_title; ?></h2>
                    <div class="contact-adress">
                        <p class="email"><?php the_field('email', 55) ?></p>
                        <p class="adress"><?php the_field('adress', 55) ?></p>
                    </div>
            </div>
            <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="51" title="Contact form 1"]'); ?>
            
                <!-- <form>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" placeholder="Write something" required></textarea>
                    <button class="contact-form-button" type="submit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Shape.png" alt="">Submit Message</button>
                </form> -->
            </div>
        </div>
    </div>
    <?php get_footer(); ?>