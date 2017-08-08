<?php if ( ! have_rows( 'slideshow' ) ) {
	return;
}
use BEA\Model_Factory\Models\File;

while ( have_rows( 'slideshow' ) ) : the_row();
	$gallery = get_sub_field( 'images' );
	if ( empty( $gallery ) ) {
		return;
	} ?>

	}

	/**
	 * @var $first_slide_m \BEA\Model_Factory\Models\File
	 * As the first media is out of a loop, take if off from array for display
	 */
	$first_slide_o = get_post( reset( $gallery ) );
	$first_slide_m = ! empty( $first_slide_o ) ? new File( $first_slide_o ) : false;
	?>
	<?php if ( ! empty( $gallery ) ) : ?>
		<div id="pdf-slideshow" class="field field__slideshow field__slideshow--pdf">
			<?php foreach ( $gallery as $slide_id ) :
				/** @var $slide_m \BEA\Model_Factory\Models\File */
				$slide_m = new File( get_post( $slide_id ) ); ?>
				<div class="field__slide">
					<img src="<?php $slide_m->the_download_url(); ?>" alt="">
					<div class="magazine__post-legend">
						<div class="magazine__post-caption"><?php echo esc_attr( $slide_m->get_the_title() ); ?></div>
						<div class="magazine__post-copyright"><?php echo esc_attr( $slide_m->get_the_copyright() ); ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

<?php endwhile;
