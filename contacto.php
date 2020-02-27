<?php /* Template Name: Contacto */ ?>
<?php get_header(); ?>
<?php include 'menu.php'; ?>
<div class="backgroundContacto">
    <div class="primeraMitadVertical">
        <a href="https://goo.gl/maps/7pzGUjLbkxdXGXvz9">
            <div class="etiqueta">
                    <img class="imagenEtiqueta" src="<?php bloginfo('template_directory') ;?>/img/Contacto/Lugar.png" alt="LugarIco">
                <!-- <div class="imagenEtiqueta">
                    <i class="iconoEtiqueta">Icono</i>
                </div> -->
                <div class="textoEtiqueta">
                    <span>25 de Mayo 746 <br> Pergamino - Buenos Aires <br> Argentina</span>
                </div>
            </div>
        </a>
        <div class="etiqueta">
            <img class="imagenEtiqueta" src="<?php bloginfo('template_directory') ;?>/img/Contacto/Telefono.png" alt="TelefonoIco">
            <div class="textoEtiqueta telefono">
                <span>02477 43-7654</span>
            </div>
        </div>
        <div class="etiqueta">
            <img class="imagenEtiqueta" src="<?php bloginfo('template_directory') ;?>/img/Contacto/Mail.png" alt="MailIco">
            <div class="textoEtiqueta">
                <span>info@apci.org.ar <br> direccion@apci.org.ar </span>
            </div>
        </div>
        <a href="https://www.instagram.com/cultura_inglesa_pergamino/?hl=es">
            <div class="etiqueta">
                <img class="imagenEtiqueta" src="<?php bloginfo('template_directory') ;?>/img/Contacto/Insta.png" alt="InstaIco">
                <div class="textoEtiqueta">
                    <span> @cultura_inglesa_pergamino</span>
                </div>
            </div>
        </a>
    </div>
    <div class="segundaMitadVertical">
        <div>
            <h3 class="tituloFormulario">Formulario de contacto</h3>
            <form>
                <div class="form-group">
                    <label for="formNombre">Nombre*</label>
                    <input type="text" class="form-control" id="formNombre" placeholder="">
                    <label for="formEmail">Correo Electronico*</label>
                    <input type="email" class="form-control" id="formEmail" placeholder="">
                    <label for="formAsunto">Asunto*</label>
                    <input type="text" class="form-control" id="formAsunto" placeholder="">
                    <label for="formMensaje">Mensaje*</label>
                    <textarea class="form-control" id="formMensaje" rows="4"></textarea>
                    <small>Todos los campos con el asterisco ( * ) son obligatorios.</small>
                    <button class="btn btn-block btn-danger" type="submit"> Enviar</button>
                </div>
            </form>
        </div>
        <div class="iframeMascara">
            <div class="iframeInterior">
                <iframe id="mapaContacto" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13246.931803742007!2d-60.5727705!3d-33.8965309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63ff30da3d806e0e!2sAsociaci%C3%B3n%20Pergamino%20de%20Cultura%20Inglesa!5e0!3m2!1ses-419!2sar!4v1572648368324!5m2!1ses-419!2sar" width="500" height="500" frameborder="0" style="border:0;"></iframe>
            </div>
        </div>
    </div>
</div>


<script>
    const iframe = document.querySelector('#mapaContacto');
    iframe.onload = () => {
        console.log('tu vieja');
        $('.place-card .place-card-medium').css("display","none");
    }
</script>