<?php
/**
 * The template for displaying Projects on index view
 *
 * @package wds-portfolio
 */
 
// get Jetpack Portfolio taxonomy terms for portfolio filtering
$terms = get_the_terms( $post->ID, 'jetpack-portfolio-type' );
                        
if ( $terms && ! is_wp_error( $terms ) ) : 
 
    $filtering_links = array();
 
    foreach ( $terms as $term ) {
        $filtering_links[] = $term->slug;
    }
                        
    $filtering = join( ", ", $filtering_links );
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class( $filtering ); ?>>
    <a href="<?php the_permalink(); ?>" rel="bookmark" class="image-link" tabindex="-1">
        <?php  if ( '' != get_the_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'wds-portfolio-img' ); ?>
        <?php endif; ?>
    </a>
</article><!-- #post-## -->
 
<?php
endif;