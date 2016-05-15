<?php get_header();?>


		  <div class="bannermedia">
	</div>
    <section id="laempresa">
        <div class="container">
            <div class="box first z-depth-3">
                <div class="row">
                <div class="col-md-12">
                 <?php
                 $class_active="active";

                 $args=array(
                      'post_type'=> 'media',
                      'post_status' => 'publish',
                      'posts_per_page' => 10,
					  'order' => 'ASC'
                     );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); 
					    $categories = get_the_category();
						if ( $categories[0]->name == 'contenido' ) { ?>
                         <h4 class="wow fadeIn"><?php the_title(); ?></h4>
                            <hr class="espaciador wow fadeIn">
                            <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12 wow fadeIn">
                            <p><?php the_content(); ?></p>
                    </div>
					<?php }
				  endwhile;
                }
                wp_reset_query();  // Restore global post data stomped by the_post().
                ?>
                </div>
                  </div><!--/.row-->
            </div><!--/.box-->
                
            <div class="boxgris first z-depth-3">
                            <div class="clearfix"></div>
               	    <div class="row">
                    <?php
						 $class_active="active";
						 $x=1;
						 $args=array(
							  'post_type'=> 'media',
							  'post_status' => 'publish',
							  'posts_per_page' => 10,
							  'order' => 'ASC'                 
							 );
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
						  while ($my_query->have_posts()) : $my_query->the_post(); 
								$categories = get_the_category();
								if ( $categories[0]->name == 'contenido central' ) {
									if($x=='1'){$animacion='fadeInLeft';} elseif($x=='2'){$animacion='fadeInUp';} elseif($x=='3'){ $animacion='fadeInRight';}
									 ?>
								 <div class="col-md-4 col-sm-12 wow <?php echo $animacion; ?>" data-wow-duration="0.5s">
								<ul class="plan <?php if($x=='2'){ echo 'bloquecentral'; } ?>">
									<li><h4><?php the_title(); ?></h4></li>
									<hr class="espaciador">
									<div class="clearfix"></div>
									<li><p><?php echo $x; the_content(); ?></p></li>
								</ul>
							</div><!--/.col-sm-4-->
							<?php if($x=='3'){$x=1;}else{$x++;} }
						  endwhile;
						}
						wp_reset_query();  // Restore global post data stomped by the_post().
						?>
                    </div><!--/.col-sm-4-->
                </div><!--/.box-->
                
              <div class="bannerfin"></div>
        </div><!--/.container-->
    </section><!--/#services-->
                
<?php get_footer(); ?>