<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" /><!-- リセット　-->
    <!-- font-->
    <link rel="stylesheet" href="https://use.typekit.net/evy0fjn.css">
    <?php wp_head(); ?>
</head>

<body>
    <div class="l-container">
        <!-- .l-header -->
        <header class="l-header">
            <div class="c-center l-header__flex c-flex--pcBetween">
                <div class="l-header__logo c-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <h1 class="u-font--roboto c-color--Gray"><?php bloginfo("name") ?></h1>
                    </a>
                </div>
                <?php get_search_form(); ?>
            </div>
        </header>
        <!-- /.l-header -->