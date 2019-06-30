<?php 

get_header();

while(have_posts()) {
    the_post(); ?>


<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2><?php the_title(); ?></h2>
           <ol class="breadcrumb">
            <li><a href="#">Início</a></li>            
            <li class="active">Detalhes do produto educacional</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-course-details">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img single">
                            <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                            } else { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/imagem-padrao.png" alt="<?php the_title(); ?>" />
                            <?php } ?>
                          <figcaption class="mu-latest-course-imgcaption">
                            <?php the_terms(get_the_id(),'category'); ?>
                            <span><i class="fa fa-clock-o"></i><?php the_field('ano_de_producao'); ?></span>
                          </figcaption>
                        </figure>
                        <div class="mu-latest-course-single-content">
                          <h2><a href="#"><?php the_title(); ?></a></h2>
                          <h4>Descrição</h4>
                          <?php the_content(); ?>
                          <h4>Acesso ao Produto Educacional</h4>
                          <a href="<?php the_field('link_externo_do_produto'); ?>" class="mu-read-more-btn" target="_blank">Acesse o Produto Educacional (link externo)</a>
                          <h4>Pesquisa associada ao Produto Educacional</h4>
                          <a href="<?php the_field('link_dissertacao_associada'); ?>" class="mu-read-more-btn" target="_blank">Acesse a pesquisa associada ao Produto (link externo)</a>
                          <h4>Informações do Produto Educacional</h4>
                          <ul>
                            <li> <span>Tipo de produto</span> <span><?php the_terms(get_the_id(),'category'); ?></span></li>
                            <li> <span>Ano de produção</span> <span><?php the_field('ano_de_producao'); ?></span></li>
                            <li> <span>Pesquisador responsável</span> <span><?php the_field('nome_do_pesquisador'); ?></span></li>
                            <li> <span>Orientador da pesquisa</span> <span><?php the_field('orientador_da_pesquisa'); ?></span></li>
                            <li> <span>Co-orientador da pesquisa</span> <span><?php the_field('coorientador_da_pesquisa'); ?></span></li>
                          </ul>
                        </div>
                      </div> 
                    </div>                                   
                  </div>
                </div>
                <!-- end course content container -->

              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Nuvem de tags</h3>
                    <div class="tag-cloud">
                        <?php the_terms( get_the_id(), 'post_tag'); ?>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start widgets -->
                  <?php if(is_active_sidebar('custom-widget-produtos-lateral')) : ?>
                    <?php dynamic_sidebar('custom-widget-produtos-lateral'); ?>
                  <?php endif; ?>
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
              </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>




<?php }

get_footer();

?>