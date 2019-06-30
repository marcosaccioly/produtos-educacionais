<?php get_header(); ?>

 <!-- Start Slider -->
 <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="<?php echo get_theme_file_uri('/assets/img/slider/1.jpg'); ?>" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Bem-vindo(a) ao repositório</h4>
        <span></span>
        <h2>Ajudamos você a aprender</h2>
        <p>Se está buscando um produto educacional, veio ao local certo. Nosso repositório contém todos os produtos educacionais que já produzimos. </p>
        <a href="<?php echo get_site_url(); ?>/produtos" class="mu-read-more-btn">Veja a lista completa!</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="<?php echo get_theme_file_uri('/assets/img/slider/2.jpg'); ?>" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Todos os produtos são gratuitos</h4>
        <span></span>
        <h2>Produtos de alta qualidade</h2>
        <p>Este repositório apresenta produtos educacionais que você pode utilizar em sua prática. Todos os produtos são gratuitos e possuem licença livre.</p>
        <a href="#" class="mu-read-more-btn">Entenda sobre o repositório.</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="<?php echo get_theme_file_uri('/assets/img/slider/3.jpg'); ?>" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Todos podem pesquisar e estudar</h4>
        <span></span>
        <h2>Educação ao seu alcance</h2>
        <p>Este repositório vem em excelente momento para agregar informações e orientar práticas educacionais a partir de pesquisas de qualidade. </p>
        <a href="#" class="mu-read-more-btn">Veja os produtos educacionais.</a>
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Produtos Educacionais</h3>
              <p>Seja para auxiliar em sua prática ou em sua pesquisa, aquie estão todos os produtos educacionais do programa.</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Conteúdo organizado</h3>
              <p>Os produtos estão organizados em páginas próprias e você pode buscá-los a partir de palavras-chave.</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Um só local</h3>
              <p>Além dos repositórios oficiais, como Educapes e o Repositório do Ifes, esta vitrine ajuda você a encontrar o que precisa.</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->
<!-- Start about us -->
<section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>Sobre o Repositório</h2>              
                  </div>
                  <!-- End Title -->
                  <p>O Educimat é o primeiro Programa Pós-Graduação do Instituto Federal do Espírito Santo (Ifes), com mais de 200 produtos educacionais já publicados. Neste repositório você pode:</p>
                  <ul>
                    <li>Encontrar todos os produtos educacionais do programa.</li>
                    <li>Para cada produto educacional, ver a pesquisa associada àquele produto.</li>
                    <li>Pesquisar produtos por palavra-chave, autor, ano de produção e categoria.</li>
                    <li>Ver todos os produtos educacionais de uma mesma categoria.</li>
                    <li>Conhecer um pouco mais da produção técnica e científica do Ifes.</li>
                  </ul>
                  <p>Aproveite agora mesmo e compartilhe com seus amigos.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                  <a href="http://educimat.ifes.edu.br" target="_blank"><img src="<?php echo get_theme_file_uri('/assets/img/logo-educimat.png'); ?>" alt="img"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->
  
  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Últimos Produtos Educacionais</h2>
              <p>Adicionamos, em média, 40 produtos educacionais por ano. Abaixo estão os produtos mais recentemente adicionados.</p>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
            <?php 
                $homepageProdutos = new WP_Query(array(
                    'posts_per_page' => 9,
                    'post_type' => 'produto_educacional'
                ));
                
                while($homepageProdutos->have_posts()) {
                    $homepageProdutos->the_post(); ?>
                
                    
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								
                                <?php } else { ?>
                                <a href="<?php echo the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/imagem-padrao.png" alt="<?php the_title(); ?>" /></a>
                            <?php } ?>
                            <figcaption class="mu-latest-course-imgcaption">
                            <a href="#"><?php the_terms(get_the_id(),'category'); ?></a>
                            <span><i class="fa fa-clock-o"></i><?php the_field('ano_de_producao'); ?></span>
                            </figcaption>
                        </figure>
                        <div class="mu-latest-course-single-content">
                            <h4><a href="#"><?php the_title(); ?></a></h4>
                            <p><?php echo wp_trim_words( get_the_content(), 30, NULL ); ?></p>
                            <div class="mu-latest-course-single-contbottom">
                            <a class="mu-course-details" href="<?php the_permalink(); ?>">Detalhes</a>
                            <!-- <span class="mu-course-price" href="#">$165.00</span> -->
                            </div>
                        </div>
                        </div>
                    </div>

            <?php
                }
            ?>

              
              </div>
            </div>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->  
  
<?php 
get_footer();
?>