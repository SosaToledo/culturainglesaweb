<?php

/**
 * For displaying 404 pages (Not Found)
 *
 * @package Thinco
 * @subpackage CulturaTheme
 */

get_header(); ?>
<?php include 'menu.php'; ?>

<style>
    #supe{
        text-align: center;
    }
    #imgWIP {
        width: 40vw;
    }

</style>
<div id="supe">
    <img id="imgWIP" src="<?php bloginfo('template_directory'); ?>/img/wip.gif" alt="">
    <h1>Work in progress </h1>
</div>

<?php get_footer(); ?>