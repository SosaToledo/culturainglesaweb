<?php /* Template Name: Cursos */ ?>
<?php get_header(); ?>
<?php include 'menu.php'; ?>

<!-- Ponemos los 3 iconos por debajo del mouse -->
<style>
    #ImgAbsolute {
        position: absolute;
        z-index: -1;
    }

    .flex-imagenes {
        display: flex;
        justify-content: center;
        width: 100%;
        flex-wrap: nowrap;
    }
    .flex-descripciones{
        width: 300px;
        position: relative;
    }
    .borde{
        padding:20px;
        margin: auto 5px;
        padding-top: 80px;
        border: 0.25em solid;
        border-radius: 4em;
        
        position: absolute;
        top:320px;
        z-index: -1;
    }
    .descKids{
        border-color: #f7c146;
    }
    .descTeens{
        border-color: #e33633;
    }
    .descAdults{
        border-color: #5f6369;
    }
</style>
<div class="container-fluid" id="ImgAbsolute">
    <div class="flex-imagenes">
        <div class="flex-descripciones">
            <img src="<?php bloginfo('template_directory'); ?>/img/cursos/1Kids.png" alt="Kids" class="img-fluid">
            <div class="borde descKids">
                <p>Lorem ipsum dolor sit  quisquam quaerat officiis siloremnt Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quas commodi molestiae rem quo aliquid reprehenderit voluptatibus autem odit corporis deleniti, expedita, repellat delectus ad aliquam facilis. In, consequatur odio. repellat sapiente aliquid dolores culpa unde harum modi quae, consequuntur, natus reprehenderit pariatur. Dignissimos, fugit sequi?</p>
            </div>
        </div>
        <div class="flex-descripciones">
            <img src="<?php bloginfo('template_directory'); ?>/img/cursos/2TeensCorregido.png" alt="" class="img-fluid">
            <div class="borde descTeens">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laboriosam, quisquam quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic magni consequuntur provident alias, laudantium corrupti vitae voluptatibus  officiis sint repellat sapiente aliquid dolores culpa unde harum modi quae, consequuntur, natus reprehenderit pariatur. Dignissimos, fugit sequi?</p>
            </div>
        </div>
        <div class="flex-descripciones">
            <img src="<?php bloginfo('template_directory'); ?>/img/cursos/3Adults.png" alt="" class="img-fluid">
            <div class="borde descAdults">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident accusantium amet dolores in maiores, qui corporis! Quisuid harum, sequi, delectus et alias. Exercitationem laboriosam, quisquam quaerat officiis sint repellat sapiente aliquid dolores culpa unde harum modi quae, consequuntur, natus reprehenderit pariatur. Dignissimos, fugit sequi?</p>
            </div>
        </div>
    </div>
</div>