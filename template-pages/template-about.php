<?php
/*
    Template Name: Template Page About
 */
get_header();
?>

    <div class="main-wrapper">

    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading"><?php single_post_title(); ?></h1>
    </header>


    <article class="about-section content px-3 py-5 p-md-5">
        <div class="container">
            <figure><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"
                         alt="image"></figure>
            <?php
            the_content();
            ?>
        </div>
    </article>

<?php
get_footer();