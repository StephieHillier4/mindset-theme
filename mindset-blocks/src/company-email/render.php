<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<email <?php echo get_block_wrapper_attributes(); ?>>
	<?php if ( $attributes[ 'svgIcon' ] ) : ?>
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-label="Email Icon">
			<path d="M2 4c-.55 0-1 .45-1 1v14c0 .55.45 1 1 1h20c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1H2zm18 2v.01L12 11 4 6.01V6h16zm0 2.99V18H4V8.99l8 5 8-5z"/>
		</svg>

	<?php endif; ?>
	<p><?php echo wp_kses_post( get_post_meta( 14, 'company_email', true ) ); ?></p>
	</email>					
