<?php
/*
    Template Name: Template Page Contacts
 */
get_header();
the_post();
?>

    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading"><?php the_title(); ?></h1>
        </header>
        <section class="about-section py-5">
            <div class="container">
                <?php
                the_content();
                ?>

                <?php echo do_shortcode('[contact-form-7 id="49" title="Контактная форма 1"]');?>

            </div>
        </section>

<?php
get_footer();