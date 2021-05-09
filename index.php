<?php get_header(); ?>

<!-- Top Bar Start -->         
<div class="top-bar"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6"> 
                <div class="tb-contact"> 
                    <p><i class="fas fa-envelope"></i><?php _e( 'info@mail.com', 'news_website_template' ); ?></p> 
                    <p><i class="fas fa-phone-alt"></i><?php _e( '+012 345 6789', 'news_website_template' ); ?></p> 
                </div>                         
            </div>                     
            <div class="col-md-6"> 
                <div class="tb-menu"> 
                    <a href=""><?php _e( 'About', 'news_website_template' ); ?></a> 
                    <a href=""><?php _e( 'Privacy', 'news_website_template' ); ?></a> 
                    <a href=""><?php _e( 'Terms', 'news_website_template' ); ?></a> 
                    <a href=""><?php _e( 'Contact', 'news_website_template' ); ?></a> 
                </div>                         
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Top Bar Start -->         
<!-- Brand Start -->         
<div class="brand"> 
    <div class="container"> 
        <div class="row align-items-center"> 
            <div class="col-lg-3 col-md-4"> 
                <div class="b-logo"> 
                    <a href="index.html">  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="Logo">  </a> 
                </div>                         
            </div>                     
            <div class="col-lg-6 col-md-4"> 
                <div class="b-ads"> 
                    <a href="https://htmlcodex.com">  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/ads-1.jpg" alt="Ads">  </a> 
                </div>                         
            </div>                     
            <div class="col-lg-3 col-md-4"> 
                <div class="b-search"> 
                    <input type="text" placeholder="Search"> 
                    <button>
                        <i class="fa fa-search"></i>
                    </button>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Brand End -->         
<!-- Nav Bar Start -->         
<div class="nav-bar"> 
    <div class="container"> 
        <nav class="navbar navbar-expand-md bg-dark navbar-dark"> 
            <a href="#" class="navbar-brand"><?php _e( 'MENU', 'news_website_template' ); ?></a> 
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"> 
                <span class="navbar-toggler-icon"></span> 
            </button>                     
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse"> 
                <div class="navbar-nav mr-auto"> 
                    <a href="index.html" class="nav-item nav-link active"><?php _e( 'Home', 'news_website_template' ); ?></a> 
                    <div class="nav-item dropdown"> 
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php _e( 'Dropdown', 'news_website_template' ); ?></a> 
                        <div class="dropdown-menu"> 
                            <a href="#" class="dropdown-item"><?php _e( 'Sub Item 1', 'news_website_template' ); ?></a> 
                            <a href="#" class="dropdown-item"><?php _e( 'Sub Item 2', 'news_website_template' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <a href="single-page.html" class="nav-item nav-link"><?php _e( 'Single Page', 'news_website_template' ); ?></a> 
                    <a href="contact.html" class="nav-item nav-link"><?php _e( 'Contact Us', 'news_website_template' ); ?></a> 
                </div>                         
                <div class="social ml-auto"> 
                    <a href=""><i class="fab fa-twitter"></i></a> 
                    <a href=""><i class="fab fa-facebook-f"></i></a> 
                    <a href=""><i class="fab fa-linkedin-in"></i></a> 
                    <a href=""><i class="fab fa-instagram"></i></a> 
                    <a href=""><i class="fab fa-youtube"></i></a> 
                </div>                         
            </div>                     
        </nav>                 
    </div>             
</div>         
<!-- Nav Bar End -->         
<!-- Top News Start-->         
<div class="top-news"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6 tn-left"> 
                <div class="row tn-slider"> 
                    <div class="col-md-6"> 
                        <div class="tn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-450x350-1.jpg"/> 
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="tn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-450x350-2.jpg"/> 
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Integer hendrerit elit eget purus sodales maximus', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <div class="col-md-6 tn-right"> 
                <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="tn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="tn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-2.jpg"/> 
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="tn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="tn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Top News End-->         
<!-- Category News Start-->         
<div class="cat-news"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6"> 
                <h2><?php _e( 'Sports', 'news_website_template' ); ?></h2> 
                <div class="row cn-slider"> 
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-2.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <div class="col-md-6"> 
                <h2><?php _e( 'Technology', 'news_website_template' ); ?></h2> 
                <div class="row cn-slider"> 
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-5.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Category News End-->         
<!-- Category News Start-->         
<div class="cat-news"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6"> 
                <h2><?php _e( 'Business', 'news_website_template' ); ?></h2> 
                <div class="row cn-slider"> 
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-5.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <div class="col-md-6"> 
                <h2><?php _e( 'Entertainment', 'news_website_template' ); ?></h2> 
                <div class="row cn-slider"> 
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-2.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-6"> 
                        <div class="cn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            <div class="cn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Category News End-->         
<!-- Tab News Start-->         
<div class="tab-news"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6"> 
                <ul class="nav nav-pills nav-justified"> 
                    <li class="nav-item"> 
                        <a class="nav-link active" data-toggle="pill" href="#featured"><?php _e( 'Featured News', 'news_website_template' ); ?></a> 
                    </li>                             
                    <li class="nav-item"> 
                        <a class="nav-link" data-toggle="pill" href="#popular"><?php _e( 'Popular News', 'news_website_template' ); ?></a> 
                    </li>                             
                    <li class="nav-item"> 
                        <a class="nav-link" data-toggle="pill" href="#latest"><?php _e( 'Latest News', 'news_website_template' ); ?></a> 
                    </li>                             
                </ul>                         
                <div class="tab-content"> 
                    <div id="featured" class="container tab-pane active"> 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-2.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div id="popular" class="container tab-pane fade"> 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-5.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div id="latest" class="container tab-pane fade"> 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-2.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <div class="col-md-6"> 
                <ul class="nav nav-pills nav-justified"> 
                    <li class="nav-item"> 
                        <a class="nav-link active" data-toggle="pill" href="#m-viewed"><?php _e( 'Most Viewed', 'news_website_template' ); ?></a> 
                    </li>                             
                    <li class="nav-item"> 
                        <a class="nav-link" data-toggle="pill" href="#m-read"><?php _e( 'Most Read', 'news_website_template' ); ?></a> 
                    </li>                             
                    <li class="nav-item"> 
                        <a class="nav-link" data-toggle="pill" href="#m-recent"><?php _e( 'Most Recent', 'news_website_template' ); ?></a> 
                    </li>                             
                </ul>                         
                <div class="tab-content"> 
                    <div id="m-viewed" class="container tab-pane active"> 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-5.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div id="m-read" class="container tab-pane fade"> 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-2.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div id="m-recent" class="container tab-pane fade"> 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-5.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                        <div class="tn-news"> 
                            <div class="tn-img"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            </div>                                     
                            <div class="tn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Tab News Start-->         
<!-- Main News Start-->         
<div class="main-news"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-9"> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-2.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-5.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-1.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-2.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-3.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="mn-img"> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news-350x223-4.jpg"/> 
                            <div class="mn-title"> 
                                <a href=""><?php _e( 'Lorem ipsum dolor sit', 'news_website_template' ); ?></a> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <div class="col-lg-3"> 
                <div class="mn-list"> 
                    <h2><?php _e( 'Read More', 'news_website_template' ); ?></h2> 
                    <ul> 
                        <li>
                            <a href=""><?php _e( 'Lorem ipsum dolor sit amet', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Pellentesque tincidunt enim libero', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Morbi id finibus diam vel pretium enim', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Duis semper sapien in eros euismod sodales', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Vestibulum cursus lorem nibh', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Morbi ullamcorper vulputate metus non eleifend', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Etiam vitae elit felis sit amet', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Nullam congue massa vitae quam', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Proin sed ante rutrum', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href=""><?php _e( 'Curabitur vel lectus', 'news_website_template' ); ?></a>
                        </li>                                 
                    </ul>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Main News End-->         
<!-- Footer Start -->         
<div class="footer"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-3 col-md-6"> 
                <div class="footer-widget"> 
                    <h3 class="title"><?php _e( 'Get in Touch', 'news_website_template' ); ?></h3> 
                    <div class="contact-info"> 
                        <p><i class="fa fa-map-marker"></i><?php _e( '123 News Street, NY, USA', 'news_website_template' ); ?></p> 
                        <p><i class="fa fa-envelope"></i><?php _e( 'info@example.com', 'news_website_template' ); ?></p> 
                        <p><i class="fa fa-phone"></i><?php _e( '+123-456-7890', 'news_website_template' ); ?></p> 
                        <div class="social"> 
                            <a href=""><i class="fab fa-twitter"></i></a> 
                            <a href=""><i class="fab fa-facebook-f"></i></a> 
                            <a href=""><i class="fab fa-linkedin-in"></i></a> 
                            <a href=""><i class="fab fa-instagram"></i></a> 
                            <a href=""><i class="fab fa-youtube"></i></a> 
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <div class="col-lg-3 col-md-6"> 
                <div class="footer-widget"> 
                    <h3 class="title"><?php _e( 'Useful Links', 'news_website_template' ); ?></h3> 
                    <ul> 
                        <li>
                            <a href="#"><?php _e( 'Lorem ipsum', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href="#"><?php _e( 'Pellentesque', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href="#"><?php _e( 'Aenean vulputate', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href="#"><?php _e( 'Vestibulum sit amet', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href="#"><?php _e( 'Nam dignissim', 'news_website_template' ); ?></a>
                        </li>                                 
                    </ul>                             
                </div>                         
            </div>                     
            <div class="col-lg-3 col-md-6"> 
                <div class="footer-widget"> 
                    <h3 class="title"><?php _e( 'Quick Links', 'news_website_template' ); ?></h3> 
                    <ul> 
                        <li>
                            <a href="#"><?php _e( 'Lorem ipsum', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href="#"><?php _e( 'Pellentesque', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href="#"><?php _e( 'Aenean vulputate', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href="#"><?php _e( 'Vestibulum sit amet', 'news_website_template' ); ?></a>
                        </li>                                 
                        <li>
                            <a href="#"><?php _e( 'Nam dignissim', 'news_website_template' ); ?></a>
                        </li>                                 
                    </ul>                             
                </div>                         
            </div>                     
            <div class="col-lg-3 col-md-6"> 
                <div class="footer-widget"> 
                    <h3 class="title"><?php _e( 'Newsletter', 'news_website_template' ); ?></h3> 
                    <div class="newsletter"> 
                        <p>  <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu', 'news_website_template' ); ?>  </p> 
                        <form> 
                            <input class="form-control" type="email" placeholder="Your email here"> 
                            <button class="btn">
                                <?php _e( 'Submit', 'news_website_template' ); ?>
                            </button>                                     
                        </form>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Footer End -->         
<!-- Footer Menu Start -->         
<div class="footer-menu"> 
    <div class="container"> 
        <div class="f-menu"> 
            <a href=""><?php _e( 'Terms of use', 'news_website_template' ); ?></a> 
            <a href=""><?php _e( 'Privacy policy', 'news_website_template' ); ?></a> 
            <a href=""><?php _e( 'Cookies', 'news_website_template' ); ?></a> 
            <a href=""><?php _e( 'Accessibility help', 'news_website_template' ); ?></a> 
            <a href=""><?php _e( 'Advertise with us', 'news_website_template' ); ?></a> 
            <a href=""><?php _e( 'Contact us', 'news_website_template' ); ?></a> 
        </div>                 
    </div>             
</div>         
<!-- Footer Menu End -->         
<!-- Footer Bottom Start -->         
<div class="footer-bottom"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6 copyright"> 
                <p><?php _e( 'Copyright &copy;', 'news_website_template' ); ?> <a href="https://htmlcodex.com"><?php _e( 'HTML Codex', 'news_website_template' ); ?></a><?php _e( '. All Rights Reserved', 'news_website_template' ); ?></p> 
            </div>                     
            <div class="col-md-6 template-by"> 
                <p><?php _e( 'Template By', 'news_website_template' ); ?> <a href="https://htmlcodex.com"><?php _e( 'HTML Codex', 'news_website_template' ); ?></a></p> 
            </div>                     
        </div>                 
    </div>             
</div>         
<!-- Footer Bottom End -->         
<!-- Back to Top -->         
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<?php get_footer(); ?>