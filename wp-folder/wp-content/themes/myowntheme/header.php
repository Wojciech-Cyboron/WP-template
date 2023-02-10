<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php echo get_bloginfo('name') ?></title>


    <link href="<?php echo get_bloginfo('template_directory') ?> / style.css" rel="stylesheet" /> 

    <?php wp_head() ?>
</head>

<body>

    <div id="main">

        <div class="blog header">
            <h1 class="blog title">
                <a href="<?php echo get_bloginfo('wpurl') ?>"> <?php echo get_bloginfo('name') ?> </a>
            </h1>

            <div>
                <?php echo get_bloginfo('description') ?>
            </div>

        </div>


        <nav class="navbar">

            <?php wp_nav_menu(['theme_location' => 'primary_nav']); ?>

        </nav>