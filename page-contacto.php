<?php get_header();?>


		  <div class="bannercontacto">
	</div>
    <section id="laempresa">
        <div class="container">
            <div class="box first z-depth-3">
                <div class="row">
                <div class="col-md-12">
                            <h4 class="wow fadeIn">Contacto</h4>
                            <hr class="espaciador wow fadeIn">
                            <div class="clearfix"></div>
                </div>
                <div class="col-md-6 col-xs-12">
                        <form role="form" class="col-xs-12 col-md-12 go-right" action="<?php echo get_bloginfo('template_directory');?>/phpmailer/mail.php" method="post">
                        	<div class="col-md-12 col-sm-12">
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Empresa *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <input id="empresa" name="empresa" type="text" class="form-control" required>
                                    </div>
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Nombre *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <input id="name" name="name" type="text" class="form-control" required>
                                    </div>
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Teléfono *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <input id="telefono" name="telefono" type="tel" class="form-control" required>
                                    </div>
                          </div>
                             <div class="col-md-12 col-sm-12">
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Fax</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <input id="fax" name="fax" type="tel" class="form-control">
                                    </div>
                                        <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="550ms">Correo *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="550ms">
                                        <input id="email" name="email" type="email" class="form-control" required>
                                    </div>
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Motivo *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <select id="motivo" name="motivo" class="form-control" required>
                                          <option value="compra">Compra</option>
                                          <option value="venta">Venta</option>
                                          <option value="gerencia">Gerencia</option>
                                          <option value="otro">Otro</option>
                                        </select>
                                    </div>
                             </div>
                             <div class="col-md-12">
                                        <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="750ms">Mensaje *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="750ms">
                                        <textarea id="message" name="message" class="form-control" required style="height:200px"></textarea>
                                    </div>
                             </div>
                             <div class="col-md-12">
                            <center><button class="btn btn-proincob wow fadeIn" type="submit" formtarget="_new" data-wow-duration="900ms" data-wow-delay="850ms" style="margin-top:50px; margin-bottom:50px;"><i class="fa fa-send-o"> </i> Enviar</button></center>
                            </div>
                        </form>
                    </div>
                
                
                 <div class="col-md-6 col-sm-12">
                            <div class="mapacontacto">
                        <div class="gmapcontacto">
                  			 <?php echo do_shortcode("[huge_it_maps id='2']"); ?>
                        </div>
                    </div>
                    </div>
                  </div><!--/.row-->
            </div><!--/.box-->
                
            <div class="boxgris first">
                            <div class="clearfix"></div>
               	    <div class="row">
                    <?php
						 $class_active="active";
						 $x=1;
						 $args=array(
							  'post_type'=> 'contacto',
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
                <div class="box first z-depth-3">
               		 <div class="row">
                        <div class="col-md-12">
                         <?php
                         $class_active="active";
        
                         $args=array(
                              'post_type'=> 'contacto',
                              'post_status' => 'publish',
                              'posts_per_page' => 10,
                              'order' => 'ASC'
                             );
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                          while ($my_query->have_posts()) : $my_query->the_post(); 
                                $categories = get_the_category();
                                if ( $categories[0]->name == 'contenido inferior' ) { ?>
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
                
              <div class="bannerfin"></div>
        </div><!--/.container-->
    </section><!--/#services-->
                
<?php get_footer(); ?>