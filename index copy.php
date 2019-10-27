<?php get_header(); ?>
<?php include 'menu.php'; ?>
  <!--CARROUSEL-->
  <div id="carrousel">
    <img src="<?php bloginfo('template_directory');?>/img/graficabiblioteca.jpg" alt="">
  </div>
  <!-- Segunda mitad del sitio -->
  <div id="segundaMitadSitio">
    <!--CIRCLES-->
    <div id="circlesParents">
      <div id="circles" style="height:60px">
        <!--KID-->
        <img id="" class="imgcircle circlesGrade" src="<?php bloginfo('template_directory');?>/img/kids.png" alt="Kids button">
        <!--TEENS-->
        <img id="" class="imgcircle circlesGrade" src="<?php bloginfo('template_directory');?>/img/teens.png" alt="Teens button">
        <!--ADULTS-->
        <img id="" class="imgcircle circlesGrade" src="<?php bloginfo('template_directory');?>/img/adults.png" alt="Adults button">
      </div>
      <div id="circles">
      <div class="circlesGradeDectoration"></div>
      <div class="circlesGradeDectoration"></div>
      <div class="circlesGradeDectoration"></div>
    </div>
  </div>
  <!--CURSOS INTERNACIONALES Y NOTICIAS-->
  <div class="highlight">
    <div class="square gradeInternational">
      Cursos Internacionales
    </div>
    <div class="square news">
      Noticias
    </div>
  </div>
</div>
</body>
<?php get_footer(); ?>
</html>
