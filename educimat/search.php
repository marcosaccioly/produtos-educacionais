<?php get_header(); ?>

<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
             <h2 class="page-title">Buscando por: <?php echo get_search_query(); ?></h2>
         </div>
       </div>
     </div>
   </div>
 </section>

<section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
                    <div class="area-busca" style="padding:1rem; background: #f5f5f5; border-bottom: 1px solid #ccc; margin-bottom: 2em">
                      <?php get_search_form(); ?>
                    </div>
                    <?php if ( have_posts() ) : ?>
                    
                      <?php while ( have_posts() ) : the_post(); ?>

                        <div class="col-md-6 col-sm-6">
                          <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                              <?php if ( has_post_thumbnail() ) {
                                  the_post_thumbnail();
                                  } else { ?>
                                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/imagem-padrao.png" alt="<?php the_title(); ?>" />
                              <?php } ?>                             
                              <figcaption class="mu-latest-course-imgcaption">
                              <a href="#"><?php the_terms(get_the_id(),'category'); ?></a>
                              <span><i class="fa fa-clock-o"></i><?php the_field('ano_de_producao'); ?></span>
                              </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                              <p><?php echo wp_trim_words( get_the_content(), 30, NULL ); ?></p>
                              <div class="mu-latest-course-single-contbottom">
                              <a class="mu-course-details" href="<?php the_permalink(); ?>">Detalhes</a>
                              <!-- <span class="mu-course-price" href="#">$165.00</span> -->
                              </div>
                          </div>
                          </div> 
                        </div>   
                  

                      <?php endwhile; ?>

                    <?php else : ?>
                    <h2>Nenhum resultado encontrado para "<?php echo get_search_query(); ?>"</h2>
                    <?php endif; ?>
                  </div>
                </div>        
                <!-- end course content container -->
               
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start widgets -->
                  <?php if(is_active_sidebar('custom-widget-arquivo-lateral')) : ?>
                    <?php dynamic_sidebar('custom-widget-arquivo-lateral'); ?>
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

 <?php 
get_footer();
?>