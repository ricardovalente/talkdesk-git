<?php /**
 * The Template for the integrations page.
 *
 * @subpackage Green Garden
 * @since Green Garden 1.2
 */
get_header();
?>
<div id="grngrdn-content" class="alignright no-border">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if( dynamic_sidebar('my_widget_area')) : else : endif; ?>
		<article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<!--<h2 class="post-title wrap"><?php the_title(); ?></h2>-->
			</header><!-- .entry-header -->
			<div class="entry">
				<?php if ( has_post_thumbnail() ) : /*check for thumbnail existing*/
					the_post_thumbnail( 'grngrdn_post' ); ?>
					<p class="thumbnail-caption grey"><?php echo get_post( get_post_thumbnail_id() )->post_excerpt; ?></p>
				<?php endif;
				the_content(); ?>
				<div class="clear"></div>
				<?php wp_link_pages(); ?>
			</div><!-- .entry -->
		</article> <!-- #post -->
		
		<?php comments_template();
	endwhile; ?>
</div><!-- #grngrdn-content -->
<?php get_footer(); ?>