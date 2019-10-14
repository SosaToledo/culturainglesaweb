<?php get_header(); ?>
<?php include 'menu.php'; ?>
  <!--CARROUSEL-->
  <div id="carrousel">
    <img src="<?php bloginfo('template_directory');?>/img/graficabiblioteca.jpg" alt="">
  </div>
  <!--CIRCLES-->
  <div id="circlesParents">
    <div id="circles">
      <!--KID-->
      <div id="kids" class="circlesGrade">
        KIDS
      </div>
      <!--TEENS-->
      <div id="teens" class="circlesGrade">
        TEENS
      </div>
      <!--ADULTS-->
      <div id="adults" class="circlesGrade">
        ADULTS
      </div>
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
</body>
<?php get_footer(); ?>
</html>
