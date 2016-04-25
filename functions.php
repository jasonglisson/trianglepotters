<?php

// Enqueue CSS and scripts

function load_cornerstone_child_scripts() {
	wp_enqueue_style(
		'cornerstone_child_css',
		get_stylesheet_directory_uri() . '/style.css',
		array('foundation_css'),
		false,
		'all'
	);

}

function site_scripts() {
	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/js/site.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'site_scripts' );
add_action('wp_enqueue_scripts', 'load_cornerstone_child_scripts',50);


function homepage_pottery() {
	?><ul class="example-orbit" data-orbit data-options="animation:fade;navigation_arrows:true;bullets:false;timer:true;slide_number:false;pause_on_hover:true;">

<?php 
 
// args
$args = array(
    'numberposts' => -1, 'post_type' => 'member', 'orderby' => 'rand', 'meta_query' => array( array( 'key' => 'gallery_images', 'value' => 0, 'type' => 'NUMERIC','compare' => '>')));
 
// get results
$the_query = new WP_Query( $args );
 
// The Loop
?>
<?php if( $the_query->have_posts() ): ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<a class="link-img-wrap" href="<?php the_permalink() ?>">
					<?php $rows = get_field('gallery_images' ); // get all the rows
					$rand_row = $rows[ array_rand( $rows ) ]; // get the first row
					$rand_row_image = $rand_row['image' ]; // get the sub field value 
					
					if($rows = get_field('gallery_images' )) {
						echo '<div class="fwrap" style="background-image:url('.$rand_row_image .');">';
					} else {
						echo '<div class="fwrap" style="background-image:url(/wp-content/themes/cornerstone-child/images/default-img.png);">';
					}
					
					?>
					<div class="img-wrap">
						<span><?php the_title(); ?></span>
					</div>
				</div>
			</a>
    <?php endwhile; ?>
<?php endif; ?>
 
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>		
		
	</ul><?php
wp_reset_query();
}

function pottery_event() {
	query_posts(array('post_type' => 'event', 'orderby' => 'ASC', 'showposts' => 1));
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>


					<a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span></a>

		<?php endwhile;
	endif;
wp_reset_query();
}

function action_blocks() {

	$rows = get_field('action_blocks');
	if($rows)
	{
		echo '<ul>';
	 
		foreach($rows as $row)
		{
			echo '<li>sub_field_1 = ' . $row['block_title'] . '</li>';
		}
	 
		echo '</ul>';
	}

}

?>