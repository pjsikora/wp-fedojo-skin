<?php get_header(); ?>

    <article id="post-<?php the_ID(); ?>" class="single_article">


        <?php
        while (have_posts()) : the_post();
            ?>


            <header class="single_article__header">


            </header>


            <main class="single_article__content">
                <div class="single_article__authorname">
                    post by
                    <strong>
                        <?php the_author(); ?>
                    </strong>
                </div>
                <div class="single_article__postdate">
                    <?php the_date(); ?>
                </div>
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