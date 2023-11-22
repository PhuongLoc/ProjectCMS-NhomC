<?php

/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.27.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

global $post;
$job_salary   = get_post_meta(get_the_ID(), '_job_salary', true);
$job_featured = get_post_meta(get_the_ID(), '_featured', true);
$company_name = get_post_meta(get_the_ID(), '_company_name', true);
$tagline_name = get_post_meta(get_the_ID(), '_company_tagline', true);

$post = get_post();
$date = $post->post_date;
$post_year = get_the_date('Y', $post->ID)
?>
<article <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr($post->geolocation_lat); ?>" data-latitude="<?php echo esc_attr($post->geolocation_long); ?>">
	<figure class="company-logo">
		<?php the_company_logo('thumbnail'); ?>
	</figure>


	<div class="job-title-wrap">
		<h3 class="entry-title">
			<a href="<?php the_job_permalink(); ?>"><?php wpjm_the_job_title(); ?></a>
		</h3>

		<?php if ($post_year) { ?>
			<div class="company-name">
				<?php the_date() ?>
			</div>
		<?php } ?>
		<div class="btn-TCL">
			<ul>
				<li>
					<p><?php wpjm_the_job_types(); ?></p>
				</li>
				<li>
					<p><?php the_company_name(); ?></p>
				</li>
				<li>
					<p class="clear-li"><?php the_job_location(true); ?></p>
				</li>
			</ul>
		</div>
	</div>
	<div class="company-title-short">
		<?php do_action('single_job_listing_meta_end'); ?>
		<?php if ($tagline_name) { ?>
			<li><?php the_company_tagline(); ?></li>
		<?php } ?>
	</div>

	<?php if ($job_featured) { ?>
		<div class="featured-label"><?php esc_html_e('Featured', 'jobscout'); ?></div>
	<?php } ?>

</article>