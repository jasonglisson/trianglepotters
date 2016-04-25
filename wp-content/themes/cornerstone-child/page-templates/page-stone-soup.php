<?php
/**
 * Template Name: Stone Soup
 *
 * Description: Cornerstone loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Cornerstone
 * @since Cornerstone 2.3.2
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="site-content medium-12 columns">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

				</article>


			<?php endwhile; ?>

		</div>
	</div>
</div>
<div class="form-wrap row">
	<div class="large-12">
		<?php echo do_shortcode( '[contact-form-7 id="1150" title="Annual Stone Soup Volunteer Signup"]' ); ?>
	</div>	
</div>	
<?php get_footer(); ?>