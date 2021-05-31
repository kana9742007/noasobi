<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
  <title><?php bloginfo('name');
          wp_title('|', true, 'left'); ?></title>
  <meta name="description" content="<?= has_excerpt() ? get_the_excerpt() : bloginfo('description') ?>">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <?php get_template_part('parts/header'); ?>