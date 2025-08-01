<?php get_header(); ?>

<section class="hero-section">
    <div class="hero-content">
        <h1>Bem-vindo ao Mundo dos Esportes</h1>
        <p>Descubra nossa paixão pelos esportes e encontre tudo que você precisa para sua jornada esportiva</p>
        <a href="<?php echo esc_url(home_url('/produto')); ?>" class="cta-button">Ver Produtos</a>
    </div>
</section>

<section class="content-section">
    <h2>Nossos Serviços</h2>
    <div class="services-grid">
        <div class="service-item">
            <h3>Equipamentos Esportivos</h3>
            <p>Oferecemos uma ampla variedade de equipamentos esportivos de alta qualidade para todas as modalidades.</p>
        </div>
        <div class="service-item">
            <h3>Consultoria Esportiva</h3>
            <p>Nossa equipe de especialistas está pronta para ajudá-lo a escolher os melhores produtos para suas necessidades.</p>
        </div>
        <div class="service-item">
            <h3>Suporte Técnico</h3>
            <p>Oferecemos suporte completo para manutenção e cuidados com seus equipamentos esportivos.</p>
        </div>
    </div>
</section>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <article class="content-section">
            <h2><?php the_title(); ?></h2>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
endif;
?>

<?php get_footer(); ?>