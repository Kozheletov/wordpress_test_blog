<?php
get_header();
the_post();
?>


    <div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading"><?php the_title(); ?></h1>
    </header>
    <article class="content px-3 py-5 p-md-5">
        <div class="container">
            <header class="content-header">
                <div class="meta mb-3"><span class="date"><?php echo get_the_date(); ?></span>
                    <span class="tag"><i class='fa fa-tag'></i>
                    <?php the_terms(get_the_ID(), 'category',
                        '<span class="tag"><i class="fa fa-tag"></i>',
                        '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>'); ?>
                    </span><span
                            class="comment"><a href="#comments"><i class='fa fa-comment'></i>
                        <?php comments_number(); ?>
                        </a></span></div>
            </header>

            <div class="content-body">
                <figure class="blog-banner">
                    <a href="#"><img class="img-fluid"
                                     src="<?php echo the_post_thumbnail_url(); ?>"
                                     alt="image">
                    </a>
                </figure>
                <?php the_content(); ?>
            </div>
            <?php
            comments_template();
            ?>


        </div>
        <!--//container-->
    </article>

<?php
get_footer();