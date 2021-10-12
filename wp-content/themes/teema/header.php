<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <title>Title</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-container">
<header class="tummansininen main-header">
    <div class="sinista tunnus"><p>Eläinkoti</p></div>
</header>
<div class="banner">
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Banneri">
</div>

