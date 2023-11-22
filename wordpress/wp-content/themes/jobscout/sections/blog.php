<?php
/**
 * Blog Section
 *
 * @package JobScout
 */

$blog_heading = get_theme_mod("blog_section_title", __("NEWEST BLOG ENTRIES", "jobscout")
);
$sub_title = get_theme_mod("blog_section_subtitle", __("", "jobscout"));
$blog = get_option("page_for_posts");
$label = get_theme_mod("blog_view_all", __("See More Posts", "jobscout"));
$hide_author = get_theme_mod("ed_post_author", false);
$hide_date = get_theme_mod("ed_post_date", false);
$ed_blog = get_theme_mod("ed_blog", true);

$args = [
    "post_type" => "post",
    "post_status" => "publish",
    "posts_per_page" => 8,
    "ignore_sticky_posts" => true,
];

$qry = new WP_Query($args);

if ($ed_blog && ($blog_heading || $sub_title || $qry->have_posts())) { ?>
<section id="blog-section" class="top-job-section">
	<div class="container">
        <?php
        if ($blog_heading) {
            echo '<h2 class="section-title" style="margin-bottom: 2rem">' .
                esc_html($blog_heading) .
                "</h2>";
        }
        if ($sub_title) {
            echo '<div class="section-desc">' .
                wpautop(wp_kses_post($sub_title)) .
                "</div>";
        }
        ?>
        
        <?php if ($qry->have_posts()) { ?>
            <div class="container overflow-hidden text-center">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="row gy-5">
                            <?php
                            while ($qry->have_posts()) {
                            $qry->the_post(); ?>
                            <div class="col-6">
                                <article class="post_image">
                                    <figure class="post-thumbnail">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="p-3">
                                                    <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                                        <?php if (
                                                            has_post_thumbnail()
                                                        ) { ?>
                                                <div class="image_postimage"><?php the_post_thumbnail(
                                                                            "jobscout-blog",
                                                                            [
                                                                                "itemprop" =>
                                                                                    "image",
                                                                            ]
                                                                        ); ?>
                                                </div>
                                                                        <?php } else { ?>
                                                                        <div class="image_postimage"><?php jobscout_fallback_svg_image(
                                                                            "jobscout-blog"
                                                                        ); ?></div>
                                                                        <?php

                                                                    } ?>                        
                                                            </a>
                                                </div>  
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="p-3">
                                                                <a href="<?php the_permalink(); ?>" class="titleimage">
                                                                <div class="titleimage"><?php the_title(); ?></div>
                                                                </a>
                                                                <div class="des-titleimage" itemprop="text"><?php
                                                                // the_content();
                                                                $content = get_the_content();
                                                                $trimmed_content = substr(
                                                                    strip_tags($content),0,117);
                                                                echo $trimmed_content;
                                                                ?>
                                                                </div>
                                                                <a href="<?php the_permalink(); ?>" class="rm-image">
                                                                    <div class="rm-image">
                                                                        Read More
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            
                                                <!-- <header class="entry-header">
                                                    <div class="entry-meta">
                                                        <?php
                                                        if (!$hide_author) {
                                                            jobscout_posted_by();
                                                        }
                                                        if (!$hide_date) {
                                                            jobscout_posted_on();
                                                        }
                                                        ?> 
                                                    </div>
                                                    <h3 class="entry-title">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h3>
                                                </header> -->
                                            </article>
                                        </div>	
                            <?php
                        }
                        wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            <?php if ($blog && $label) { ?>
                <br>
                <br>
                <div class="btn-wrap">
        			<a href="<?php the_permalink(
               $blog
           ); ?>" class="btn"><?php echo esc_html($label); ?></a>
        		</div>
            <?php } ?>
        
        <?php } ?>
	</div>
</section>
<?php }
