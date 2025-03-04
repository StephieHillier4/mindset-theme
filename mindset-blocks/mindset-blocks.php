<?php

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function mindset_blocks_copyright_date_block_init() {
	register_block_type( __DIR__ . '/build/copyright-date' );
	register_block_type( __DIR__ . '/build/company-address' );
	register_block_type( __DIR__ . '/build/company-email' );
	
	register_block_type( __DIR__ . '/src/service-posts', array(
        'render_callback' => 'fwd_render_service_posts', 
    ) );

}
add_action( 'init', 'mindset_blocks_copyright_date_block_init' );


/**
* Registers the custom fields for some blocks.
*
* @see https://developer.wordpress.org/reference/functions/register_post_meta/
*/
function mindset_register_custom_fields() {
	register_post_meta(
		'page',
		'company_email',
		array(
			'type'         => 'string',
			'show_in_rest' => true,
			'single'       => true
		)
	);
	register_post_meta(
		'page',
		'company_address',
		array(
			'type'         => 'string',
			'show_in_rest' => true,
			'single'       => true
		)
	);
}

function fwd_render_service_posts( $attributes ) {
    ob_start();
    ?>
    <div <?php echo get_block_wrapper_attributes(); ?>>

        <?php
        // 🔹 First WP_Query - Outputs only post titles with in-page navigation
        $args_nav = array(
            'post_type'      => 'service',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'title',
            'order'          => 'ASC',
        );

        $query_nav = new WP_Query( $args_nav );

        if ( $query_nav->have_posts() ) :
            echo '<nav class="service-nav"><ul>';
            while ( $query_nav->have_posts() ) : $query_nav->the_post();
                ?>
                <li><a href="#post-<?php the_ID(); ?>"><?php the_title(); ?></a></li>
                <?php
            endwhile;
            echo '</ul></nav>';
            wp_reset_postdata();
        endif;
        ?>

        <?php
        // 🔹 Second WP_Query - Outputs full posts (title + content)
        $args = array(
            'post_type'      => 'service',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'title',
            'order'          => 'ASC',
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
                ?>
                <div id="post-<?php the_ID(); ?>" class="service-post">
                    <h2><?php the_title(); ?></h2>
                    <div class="service-content"><?php the_content(); ?></div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>' . __( 'No service posts found.', 'service-posts' ) . '</p>';
        endif;
        ?>

    </div>
    <?php
    return ob_get_clean();
}

add_action( 'init', 'mindset_register_custom_fields' );

