<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php include_once('analytics-tracking.php') ?>

    <title><?php bloginfo('name');?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="expires" content="-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="fragment" content="!" />
    <meta name="distribution" content="global" />
    <meta name="rating" content="general" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>