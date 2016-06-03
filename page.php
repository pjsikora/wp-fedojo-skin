<?php get_header(); ?>

    <article id="post-<?php the_ID(); ?>" class="single_article">


        <?php
        while (have_posts()) : the_post();
            ?>


            <header class="single_article__header">
                <div class="single_article__image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </header>


            <main class="single_article__content">
                <div class="single_article__headline">
                    <?php the_title(sprintf('<h1 class="single_article__title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
                </div>
                <?php the_content() ?>

            </main>






            <?php
        endwhile;
        ?>

    </article>
<?php get_footer(); ?>