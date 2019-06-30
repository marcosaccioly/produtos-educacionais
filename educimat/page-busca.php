<?php get_header(); ?>

<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
             <h2 class="page-title">Página de busca</h2>


			

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
                    <p>Digite abaixo os termos para a busca:</p>
                    <form method="get" action="<?php echo esc_url(site_url('/')); ?>">
                        <input type="search" name="s">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

 <?php 
get_footer();
?>