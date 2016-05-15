<?php get_header();?>


                	<div class="mapa2">
                        <div class="gmap2">
		  <?php echo do_shortcode("[huge_it_maps id='1']"); ?>
          </div>
                        </div>
                        
    <section id="laempresa">
        <div class="container">
            <div class="box first z-depth-3">
                <div class="row">
                 <?php
                 $class_active="active";

                 $args=array(
                      'post_type'=> 'obras',
                      'post_status' => 'publish',
                      'posts_per_page' => 1000,
					  'order' => 'ASC'
                     );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); 
					    $categories = get_the_category();
						if ( $categories[0]->name == 'contenido' ) { ?>
         		     <div class="col-md-12 col-sm-12 wow fadeIn">
                         <h4 class="wow fadeIn"><?php the_title(); ?></h4>
                            <hr class="espaciador wow fadeIn">
                            <div class="clearfix"></div>
                            <p class="interlineado"><?php echo get_the_content(); ?></p>
                	 </div>
					<?php }
				  endwhile;
                }
                wp_reset_query();  // Restore global post data stomped by the_post().
                ?>
                  </div><!--/.row-->
            </div><!--/.box-->
<div class="bannermedio"></div>

<div class="boxgris first z-depth-3">
                            <div class="clearfix"></div>
               	    <div class="row">
                    
                    <?php
						 $class_active="active";
						 $x=1;
						 $args=array(
							  'post_type'=> 'obras',
							  'post_status' => 'publish',
							  'posts_per_page' => 1000,
							  'order' => 'ASC'                 
							 );
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
						  while ($my_query->have_posts()) : $my_query->the_post(); 
								$categories = get_the_category();
								if ( $categories[0]->name == 'contenido central' ) {
									if($x=='1'){$animacion='fadeInLeft'; echo '<div class="row">';} elseif($x=='2'){$animacion='fadeInUp';} elseif($x=='3'){ $animacion='fadeInRight';}
									 ?>
								 <div class="col-md-4 col-sm-12 wow <?php echo $animacion; ?>" data-wow-duration="0.5s">
								<ul class="plan <?php if($x=='2'){ echo 'bloquecentral'; } ?>">
									<li><h4><?php the_title(); ?></h4></li>
									<hr class="espaciador">
									<div class="clearfix"></div>
									<li><p><?php the_content(); ?></p></li>
								</ul>
							</div><!--/.col-sm-4-->
							<?php if($x=='3'){$x=1; echo '</div>';}else{$x++;} }
						  endwhile;
						  if($x!=1){echo '</div>';}
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>
                        
                    </div><!--/.col-sm-4-->
                </div><!--/.box-->
                
              <div class="bannerfin"></div>
        </div><!--/.container-->
    </section><!--/#services-->
                
<?php get_footer(); ?>