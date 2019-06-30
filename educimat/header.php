<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">           
        <?php wp_head(); ?>
       
    </head>
    <body <?php body_class(); ?>>

        <!--START SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#">
            <i class="fa fa-angle-up"></i>      
            </a>
        <!-- END SCROLL TOP BUTTON -->

        <!-- Start header  -->
        <header id="mu-header">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                <div class="mu-header-area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mu-header-top-left">
                            <div>
                                <span>Programa de Pós-graduação em Educação em Ciências e Matemática - Ifes</span> &nbsp; | &nbsp; <i class="fa fa-envelope"></i><span> educimat@ifes.edu.br</span>
                            </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </header>
        <!-- End header  -->    
        <!-- Start menu -->
        <section id="mu-menu">
            <nav class="navbar navbar-default" role="navigation">  
            <div class="container">
                <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->              
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>"><i class="fa fa-university"></i><span><?php echo get_bloginfo(); ?></span></a>
                <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                <?php wp_nav_menu(array(
                    'theme_location' => 'menu_principal',
                    'menu_class' => 'nav navbar-nav navbar-right main-nav'
                )); ?>
                <!-- <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="active"><a href="index.html">Home</a></li>            
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Course <span class="fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="course.html">Course Archive</a></li>                
                        <li><a href="course-detail.html">Course Detail</a></li>                
                    </ul>
                    </li>           
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="blog-archive.html">Blog Archive</a></li>                
                        <li><a href="blog-single.html">Blog Single</a></li>                
                    </ul>
                    </li>            
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="404.html">404 Page</a></li>               
                    <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
                </ul>                      -->
                </div><!--/.nav-collapse -->        
            </div>     
            </nav>
        </section>
        <!-- End menu -->
        <!-- Start search box -->
        <div id="mu-search">
            <div class="mu-search-area">      
            <button class="mu-search-close"><span class="fa fa-close"></span></button>
            <div class="container">
                <div class="row">
                <div class="col-md-12">            
                    <form class="mu-search-form">
                    <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- End search box -->            
