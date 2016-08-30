<?php
/**
 * Video content
 *
 * @package Granule
 * @subpackage TemplatePart
 * @author Ben Gillbanks <ben@prothemedesign.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

	$content = apply_filters( 'the_content', get_the_content() );
	$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );

	if ( ! $video ) {

		get_template_part( 'parts/content' );
		return;

	}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php echo granule_video_wrapper( $video[0] ); ?>

	<section class="entry entry-archive">

<?php
	if ( get_the_title() ) {
?>

		<h2 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h2>

<?php
	}

	get_template_part( 'parts/post-meta' );
?>

	</section>

</article>