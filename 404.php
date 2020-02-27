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
        height:88vh;
    }
    #imgWIP {
        width: 40vw;
    }

</style>
<div id="supe">
    <img id="imgWIP" src="<?php bloginfo('template_directory'); ?>/img/wip.gif" alt="">
    <h1> <strong> Work in progress </strong> </h1>
</div>

<?php get_footer(); ?>