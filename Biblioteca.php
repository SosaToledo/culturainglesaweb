<?php /* Template Name: Biblioteca */ ?>
<?php get_header(); ?>
<?php include 'menu.php'; ?>
<style>
    .BibliotecaBackground {
        background-image: url("<?php bloginfo('template_directory'); ?>/img/Biblioteca/bibliotecaFondo.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 89.5vh;
    }
    .segundoBorder{
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        
        padding:10px;
        border-radius: 1em;
        border: 4px solid white;
    }
    .centroTexto {
        background-color: white;
        border-radius: 1em;
        border: 4px solid #5f6369;
        padding: 20px;
    }

    .centroTexto h2 {
        text-align: center;
        font-size: 1.7em;
        font-weight: bold;
    }
</style>
<div class="BibliotecaBackground">
    <div class="segundoBorder">
        <div class="centroTexto">
            <h2>
                LA BIBLIOTECA DE LA ASOCIACIÓN <br> TIENE COMO OBJETIVO <br> DIFUNDIR LA LENGUA Y LA CULTURA INGLESA.
            </h2>
        </div>
    </div>
</div>