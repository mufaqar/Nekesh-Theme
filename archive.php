<?php get_header(); ?>

<?php if (have_posts()): ?>

	<?php $post = $posts[0]; // Set global post so that the_date() works ?>

	<div class="wrapper">
		<!-- Archive Title -->
		<?php if (is_category()) { ?>
			<h2><?php _e('Archive for the', 'text_domain'); ?> &#8216;<?php single_cat_title(); ?>&#8217;
				<?php _e('Category', 'text_domain'); ?>
			</h2>
		<?php } elseif (is_tag()) { ?>
			<h2><?php _e('Posts Tagged', 'text_domain'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		<?php } elseif (is_day()) { ?>
			<h2><?php _e('Archive for', 'text_domain'); ?> 		<?php the_time('F jS, Y'); ?></h2>
		<?php } elseif (is_month()) { ?>
			<h2><?php _e('Archive for', 'text_domain'); ?> 		<?php the_time('F, Y'); ?></h2>
		<?php } elseif (is_year()) { ?>
			<h2><?php _e('Archive for', 'text_domain'); ?> 		<?php the_time('Y'); ?></h2>
		<?php } elseif (is_author()) { ?>
			<h2><?php _e('Author Archive', 'text_domain'); ?></h2>
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2><?php _e('Blog Archives', 'text_domain'); ?></h2>
		<?php } ?>
	</div>

	<!-- Loop Posts -->
	<?php while (have_posts()):
		the_post(); ?>
		<div class="wrapper" <?php post_class(); ?>>
			<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<?php include(TEMPLATEPATH . '/inc/meta.php'); ?>

			<div class="entry">
				<?php if (has_post_thumbnail()): ?>
					<div class="thumb">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>

				<?php
				global $more;
				$more = 0;
				the_content(__('Continue Reading', 'text_domain'));
				?>

				<div class="clear"></div>

				<div class="tags">
					<?php the_tags(__('Tags:', 'text_domain'), ', ', '.'); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>

	<!-- Pagination Fix -->
	<?php
	if (function_exists("pagination")) {
		global $wp_query;
		pagination($wp_query->max_num_pages);
	}
	?>

<?php else: ?>
	<h2><?php _e('Nothing Found', 'text_domain'); ?></h2>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>