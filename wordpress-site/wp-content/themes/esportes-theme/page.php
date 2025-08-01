<?php get_header(); ?>

<section class="content-section">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article class="page-content">
                <h1><?php the_title(); ?></h1>
                <div class="page-text">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <article class="page-content">
            <h1>Página não encontrada</h1>
            <p>Desculpe, a página que você está procurando não foi encontrada.</p>
        </article>
        <?php
    endif;
    ?>
</section>

<?php get_footer(); ?>