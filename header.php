<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php do_action( 'webwise_base_head_open' ); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php wp_head(); ?>
    <?php do_action( 'webwise_base_head_close' ); ?>

</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php do_action( 'webwise_base_body_open' ); ?>

<?php do_action( 'webwise_base_before_header' ); ?>
<?php do_action( 'webwise_base_header' ); ?>
<?php do_action( 'webwise_base_after_header' ); ?>
