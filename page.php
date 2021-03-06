<?php
get_header();
?>

    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading"><?php the_title(); ?></h1>
        </header>

        <article class="content px-3 py-5 p-md-5">
            <div class='container'>

                <p class="mt-3 lead">
                    <?php
                    the_content();
                    ?>
                </p>

                <?php
                $last_posts_blog = get_posts(array(
                    'numberposts' => 3,
                    'category' => 0,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));
                ?>
                <h2>Последние посты в блоге</h2>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($last_posts_blog as $index => $post_blog): ?>
                            <div class="carousel-item

                        <?php if ($index === 0) {
                                echo 'active';
                            } ?>">
                                <h3><?php echo $post_blog->post_title; ?></h3>
                                <a href="<?php echo get_permalink($post_blog->ID); ?>">
                                    <img
                                            src="<?php echo get_the_post_thumbnail_url($post_blog); ?>"
                                            class="d-block w-100"
                                            alt="image">
                                </a>
                            </div>

                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                       data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                       data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row row-cols-1 mt-4 row-cols-md-2">
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Заголовок</h5>
                                <p class="card-text">This is a longer card with supporting text
                                    below as
                                    a natural lead-in to additional content. This content is a
                                    little
                                    bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Заголовок</h5>
                                <p class="card-text">This is a longer card with supporting text
                                    below as
                                    a natural lead-in to additional content. This content is a
                                    little
                                    bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>
    </div>

<?php
get_footer();