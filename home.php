<?php
get_header();
?>

    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading"><?php single_post_title(); ?></h1>
        </header>


        <section class="content px-3 py-5 p-md-5">
            <div class="container">

                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="post mb-5">
                            <div class="media">
                                <img class="mr-3 img-fluid post-thumb d-none d-md-flex"
                                     src="<?php the_post_thumbnail_url(); ?>" alt="image">
                                <div class="media-body">
                                    <h3 class="title mb-1">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <div class="meta mb-1"><span
                                                class="date">
                                        <?php echo get_the_date(); ?>
                                    </span>
                                        <span class="comment">
                                            <a href="
                                            <?php the_permalink(); ?>#comments">
	<?php comments_number('нет комментариев', '1 комментарий', '% комментариев'); ?>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="intro">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a class="more-link" href="<?php the_permalink(); ?>">Read more
                                        &rarr;</a>
                                </div><!--//media-body-->
                            </div><!--//media-->
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php
                $args = [
                    'show_all' => false,
                    'end_size' => 0,
                    'mid_size' => 0,
                    'prev_next' => true,
                    'prev_text' => __('Previous'),
                    'next_text' => __('Next'),
                    'add_fragment' => '',
                    'screen_reader_text' => '',
                    'aria_label' => __('Posts'),
                    'class' => 'custom-pagination',
                ];
                the_posts_pagination($args);
                ?>

            </div>
        </section>
    </div>
<?php get_footer();