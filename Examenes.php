<?php /* Template Name: Examenes */ ?>
<?php get_header(); ?>
<?php include 'menu.php'; ?>
<style>
    .backgroundExamenes {
        background-image: url("<?php bloginfo('template_directory'); ?>/img/Examenes/Fondo.jpg");
        background-position: center;
        background-size: cover;
        padding-top: 100px;
        width: 97vw;
        padding-bottom: 40px;
    }

    .cuadroBlanco {
        background-color: white;
        border-radius: 1.2em;
        padding: 20px;
        border: 3px solid #f7c146;
        text-align: center;
    }

    #ImgAPCI {
        width: 50%;
    }

    .jumbotron {
        background-color: inherit;
    }

    /*
    .exCamb::after{
        content: '';
        position: absolute;
        border-style: solid;
        border-width: 43px 0 43px 36px;
        border-color: transparent #f7c146;
        display: block;
        width: 0;
        z-index: 1;
        right: -26px;
        top: 55px;
    }
    .exAPCI::after{
        content: '';
        position: absolute;
        border-style: solid;
        border-width: 43px 36px 43px 0;
        border-color: transparent white;
        display: block;
        width: 0;
        z-index: 1;
        left: -26px;
        top: 60px;
    }
    */

    .row img {
        margin: auto;
        display: block;
    }
</style>
<div class="backgroundExamenes">
    <div class="row tira1">
        <div class="col">
            <img id="ImgAPCI" src="<?php bloginfo('template_directory'); ?>/img/Examenes/ExamenesAPCI.png" alt="Examenes APCI">
        </div>
        <div class="col-md-6">

            <div class="jumbotron d-flex align-items-center">
                <div class="container cuadroBlanco exAPCI">
                    Diseñamos y administramos exámenes <br>
                    para alumnos regulares y libres <br>
                    de distintas localidades de la provincia de Buenos Aires. <br>
                    <br>
                    Nuestros exámenes están basados <br>
                    en el <strong> Common European Framework of Reference </strong> <br>
                    (Marco Común de Referencia para las Lenguas Europeas).
                </div>
            </div>

        </div>
    </div>
    <div class="row tira2">
        <div class="col-md-6">
            <div class="jumbotron d-flex align-items-center">
                <div class="container cuadroBlanco exAPCI">
                    Exámenes Internacionales <br>
                    <br>
                    <strong> Cambridge English Qualifications </strong> <br>
                    <br>
                    Desde 2004 la Asociación Pergamino de Cultura Inglesa <br>
                    es venue de los Exámenes de Cambridge English.
                </div>
            </div>


        </div>
        <div class="col">
            <img id="ImgAPCI" src="<?php bloginfo('template_directory'); ?>/img/Examenes/ExamenesCAMBRIDGE.png" alt="Examenes Cambridge">
        </div>
    </div>
</div>