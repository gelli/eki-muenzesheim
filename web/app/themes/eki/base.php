<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->


    <div role="document">
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <div class="container">
        <div class="row">
          <?php
            if (!is_category() && !is_archive()) :
            // add subpage list if single page
            $children = wp_list_pages('title_li=&echo=0&child_of=' . $post->ID);
            if ($children) : ?> 
                  <div class="col-sm-3">
                    <div class="row">
                    <div class="well">
                      <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active"><a href="#">Seniorennachmittage</a></li>
                        <li role="presentation"><a href="#">Besuchdienstkreis</a></li>
                        <li role="presentation"><a href="#">Redaktionskreis</a></li>
                        <li role="presentation"><a href="#">Grüner Gockel</a></li>
                        <li role="presentation"><a href="#">Kirchenmusik</a>
                          <ul class="nav nav-pills nav-stacked">
                            <li role="presentation"><a href="#">Kirchenmusikerinnen</a></li>
                            <li role="presentation"><a href="#">Kirchenchor</a></li>
                            <li role="presentation"><a href="#">Flötenkreis</a></li>
                            <li role="presentation"><a href="#">Jugendchor</a></li>
                            <li role="presentation"><a href="#">Link zum Bläserkreis</a></li>
                          </ul>
                        </li>
                        <li role="presentation"><a href="#">AB-Gemeinschaft</a></li>
                        <li role="presentation"><a href="#">Kindertagesstätten</a></li>
                        <li role="presentation"><a href="#">Martinskindergarten</a></li>
                        <li role="presentation"><a href="#">Andreaskrippe</a></li>
                        <li role="presentation"><a href="#">Martinskirche</a></li>
                        <li role="presentation"><a href="#">Geschichte der Gemeinde</a></li>
                      </ul>
                    </div>
                  </div>
                  </div>
                <?php endif;
              endif; ?>
          
            <main class="main" role="main">
              <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->
            <?php if (Config\display_sidebar()) : ?>
              <aside class="sidebar" role="complementary">
                <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- /.sidebar -->
            <?php endif; ?>
          </div>
        
      </div>
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
