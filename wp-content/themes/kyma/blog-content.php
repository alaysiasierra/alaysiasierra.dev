<div <?php post_class('blog_grid_block clearfix'); ?>>
    <div class="feature_inner">
        <div class="feature_inner_corners">
            <?php
            $thumb = 0;
            $icon = "";
            global $imageSize;
            if (get_post_gallery()) {
                $icon = "ico-gallery";
                $gallery = get_post_gallery(get_the_ID(), false);?>
                <div class="feature_inner_btns">
                    <a href="#" class="expand_image"><i class="ico-maximize"></i></a>
                    <a href="<?php echo esc_url(get_the_permalink()); ?>" class="icon_link"><i
                            class="fa fa-link"></i></a>
                </div>
                <div class="porto_galla"><?php
                foreach ($gallery['src'] as $src) {
                    ?>
                <a title="<?php the_title_attribute(); ?>" href="<?php echo esc_url($src); ?>"
                   class="feature_inner_ling">
                    <img src="<?php echo esc_url($src); ?>" alt="<?php the_title_attribute(); ?>">
                    </a><?php
                }
                if (has_post_thumbnail()) {
                    $thumb = 1;
                    $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>
                <a href="<?php echo esc_url($url); ?>" title="<?php the_title_attribute(); ?>"
                   class="feature_inner_ling">
                    <?php the_post_thumbnail($imageSize); ?>
                    </a><?php
                } ?>
                </div><?php
            } elseif (has_post_thumbnail() && $thumb != 1) {
                $icon = "ico-image";
                $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                <div class="feature_inner_btns">
                    <a href="#" class="expand_image"><i class="ico-maximize"></i></a>
                    <a href="<?php echo esc_url(get_the_permalink()); ?>" class="icon_link"><i
                            class="fa fa-link"></i></a>
                </div>
            <a href="<?php echo esc_url($url); ?>" title="<?php the_title_attribute(); ?>" class="feature_inner_ling"
               data-rel="magnific-popup">
                <?php the_post_thumbnail($imageSize); ?>
                </a><?php
            }
            ?>
        </div>
    </div>
    <div class="blog_grid_con">
        <h6 class="title"><a href="<?php the_permalink(); ?>"
                             title="<?php esc_attr(the_title_attribute()); ?>"><?php the_title(); ?></a></h6>
		<span class="meta"><?php
            if (isset($icon) && $icon == 'ico-image' || $icon == 'ico-gallery') {
                ?>
                <span class="meta_part">
                <a href="#">
                    <i class="<?php echo esc_attr($icon); ?>"></i>
                    <span><?php $ico = explode('-', $icon);
                        echo esc_attr(ucfirst($ico[1])); ?></span>
                </a>
                </span><?php
            } ?>
            <span class="meta_part">
				<a href="#">
                    <i class="fa fa-clock-o"></i>
                    <span><?php echo get_the_date(get_option('date_format'), true); ?></span>
                </a>
			</span><?php
            if (get_the_category_list() != '') {
                ?>
                <span class="meta_part">
                <i class="fa fa-folder-open-o"></i>
					<span><?php echo get_the_category_list(','); ?></span>
                </span><?php
            } ?>
            <span class="meta_part">
					<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <i class="fa fa-user"></i>
                        <span><?php esc_attr(the_author()); ?></span>
                    </a>
			</span>
		</span>
        <?php the_excerpt(); ?>
    </div>
</div>