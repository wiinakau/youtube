<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <nav class="navbar">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <?php bloginfo('name'); ?>
        </a>
        
        <ul class="nav-menu">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
            <li><a href="<?php echo esc_url(home_url('/quem-somos')); ?>">QUEM SOMOS</a></li>
            <li><a href="<?php echo esc_url(home_url('/produto')); ?>">PRODUTO</a></li>
            <li><a href="<?php echo esc_url(home_url('/preco')); ?>">PREÇO</a></li>
            <li><a href="<?php echo esc_url(home_url('/contato')); ?>">CONTATO</a></li>
        </ul>
    </nav>
</header>

<main class="site-main">