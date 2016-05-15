<?php get_header();?>


			<div  id="slider"  class="nivoSlider">
			 <?php
                 $class_active="active";

                 $args=array(
                      'post_type'=> 'inicio',
                      'post_status' => 'publish',
                      'posts_per_page' => 10              
                     );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post();
				  $categories = get_the_category();
						if ( $categories[0]->name == 'carousel' ) { ?>
                             
                                <a href="#"><?php the_post_thumbnail(); ?></a>
                  		<?php }
				  endwhile;
                }
                wp_reset_query();  // Restore global post data stomped by the_post().
                ?>

           	</div>
              
     <section id="services">
        <div class="container">
            <div class="box first z-depth-3">
                <div class="row">
    				<div class="col-md-12">
                   
                   
                    <?php
                 $class_active="active";

                 $args=array(
                      'post_type'=> 'inicio',
                      'post_status' => 'publish',
                      'posts_per_page' => 10,
					  'order' => 'ASC'
                     );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); 
					    $categories = get_the_category();
						if ( $categories[0]->name == 'contenido' ) { ?>
							<h3 class="titulo wow fadeIn"><?php the_title(); ?></h3>
                                 <hr class="espaciador wow fadeIn">
                            <div class="clearfix"></div>
                        <p class=" wow fadeInUp interlineado"> <?php echo get_the_content(); ?></p>
							
						<?php } 
					endwhile;
                }
                wp_reset_query();  // Restore global post data stomped by the_post().
                ?>
                   
					</div>
                </div><!--/.row-->
                <div class="clearfix"></div>
                <div class="row">
                            <h3 class="subtitulo wow fadeIn">Obras</h3>
                            <hr class="espaciador wow fadeInLeft">
                	<div class="mapa">
                        <div class="gmap">
                  			  <?php echo do_shortcode("[huge_it_maps id='1']"); ?>
                        </div>
                    </div>
                </div>
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->   

<?php get_footer(); ?>