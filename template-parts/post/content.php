<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<div id="post-<?php the_ID(); ?>" class="article-li">
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<a href="<?php the_permalink(); ?>">
	    <dl>
                        <?php
                        if ( 'post' === get_post_type() ) {
                            echo '<div class="entry-meta">';
                                if ( is_single() ) {

                                } else {

                                };
                            echo '</div><!-- .entry-meta -->';
                        };
                        if ( is_single() ) {
                            the_title( '<dt>', '</dt>' );
                        } elseif ( is_front_page() && is_home() ) {
                            the_title( '<dt>', '</dt>' );
                        } else {
                            the_title( '<dt class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></dt>' );
                        }
                        ?>
                        <dd>
                                		<?php
                                		/* translators: %s: Name of current post */
                                            the_content();

                                		wp_link_pages( array(
                                			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                                			'after'       => '</div>',
                                			'link_before' => '<span class="page-number">',
                                			'link_after'  => '</span>',
                                		) );
                                		?>
                                	</dd>
                                	<dd class='icon-arrowright'></dd>
                                	<dd class='font'>

                                	    <span>
                                	        <?php the_time('d'); ?>
                                	    </span>
                                	    <?php the_time('y-m'); ?>
                                	</dd>
            		</dl>

	</a>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>


	<?php
	if ( is_single() ) {
	}
	?>

</div><!-- #post-## -->
