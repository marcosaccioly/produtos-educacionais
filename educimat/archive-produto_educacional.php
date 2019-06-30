<?php get_header(); ?>

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
                  <?php 
                    $todosProdutos = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'produto_educacional',
                        'meta_key' => 'ano_de_producao',
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC',
                        'paged' => get_query_var('paged')
                    ));
                    
                    while($todosProdutos->have_posts()) {
                        $todosProdutos->the_post(); ?>   

                      <div class="col-md-6 col-sm-6">
                        <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								
                                <?php } else { ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/imagem-padrao.png" alt="<?php the_title(); ?>" /></a>
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
                        }
                    ?>
                  </div>
                </div>        
                <!-- end course content container -->
                <!-- start course pagination -->
                <!-- <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                        <?php 
                        //echo paginate_links(array('total' => $todosProdutos->max_num_pages)); ?>
                        <li>
                            <a href="#" aria-label="Previous">
                            <span class="fa fa-angle-left"></span> Prev 
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                            Next <span class="fa fa-angle-right"></span>
                            </a>
                        </li>
                    </ul>
                  </nav>
                </div> -->
                <!-- end course pagination -->
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