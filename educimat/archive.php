<?php get_header(); ?>

<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <?php the_archive_title( '<h2 class="page-title">', '</h2>' ); ?>
			<p><?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?></p>

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

                    <?php if ( have_posts() ) : ?>
                    
                    <?php while ( have_posts() ) : the_post(); ?>

                      <div class="col-md-6 col-sm-6">
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
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p><?php echo wp_trim_words( get_the_content(), 30, NULL ); ?></p>
                            <div class="mu-latest-course-single-contbottom">
                            <a class="mu-course-details" href="<?php the_permalink(); ?>">Detalhes</a>
                            <!-- <span class="mu-course-price" href="#">$165.00</span> -->
                            </div>
                        </div>
                        </div> 
                      </div>   
                

                    <?php
                        endwhile;

                    endif;
                    ?>
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