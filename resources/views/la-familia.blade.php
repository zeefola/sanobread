<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {!! SEO::generate() !!} 
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-pizzaro.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css" media="all" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
      
      <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicon57-57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicon60-60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon72-72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicon76-76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon114-114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicon120-120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicon144-144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicon152-152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon180-180.png">

      <link rel="icon" type="image/png" href="/assets/images/favicon32-32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="/assets/images/favicon192-192.png" sizes="192x192">
      <link rel="icon" type="image/png" href="/assets/images/favicon96-96.png" sizes="96x96">
      <link rel="icon" type="image/png" href="/assets/images/favicon16-16.png" sizes="16x16">

      <link rel=icon href=/assets/images/20.png sizes="20x20" type="image/png">
      <link rel="shortcut icon" href="assets/images/sanobread_logo.ico" />


      @includeIf('layouts.analytics')
      @includeIf('layouts.schema.organization')
   </head>
   <body class="home-v2 page-template-template-homepage-v2 html-change woocommerce-active">
      <div id="page" class="hfeed site">
         <header id="masthead" class="site-header header-v2 "  style="background-image: none; ">
            <div class="col-full">
               <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
               <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
               <nav id="site-navigation" class="main-navigation"  aria-label="Primary Navigation">
                  <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>
                  <div class="handheld-navigation">
                     <span class="phm-close">Close</span>
                     <ul  class="menu">
                        <li class="menu-item "><a href="/"><i class=""></i>Home</a></li>
                        <li class="menu-item "><a href="/about-us"><i class=""></i>About Us</a></li>
                        <li class="menu-item "><a href="contact-us"><i class=""></i>Contact Us</a></li>
                        <li class="menu-item "><a href="/products"><i class=""></i>Products</a></li>
                        <li class="menu-item "><a href="/faq"><i class=""></i>Faq</a></li>
                        {{-- <li class="menu-item "><a href="/newsletter"><i class=""></i>News Letter</a></li> --}}
                        <li class="menu-item "><a href="/terms-of-use"><i class=""></i>Terms of Use</a></li>
                     </ul>
     
                     <hr>
                     <ul  class="menu">
                         <li class="menu-item"><a href=""><i class="po po-pizza"></i>Pizza</a></li>
                         <li class="menu-item"><a href=""><i class="po po-burger"></i>Burgers</a></li>
                         <li class="menu-item"><a href=""><i class="po po-salads"></i>Salads</a></li>
                         <li class="menu-item"><a href=""><i class="po po-tacos"></i>Tacos</a></li>
                         <li class="menu-item"><a href=""><i class="po po-wraps"></i>Wraps</a></li>
                         <li class="menu-item"><a href=""><i class="po po-fries"></i>Fries</a></li>
                         <li class="menu-item"><a href=""><i class="po po-salads"></i>Salads</a></li>
                         <li class="menu-item"><a href=""><i class="po po-drinks"></i>Drinks</a></li>
                      </ul>
                  </div>
               </nav>
               <!-- #site-navigation -->
               <div class="site-branding">
                  <a href="index.html" class="custom-logo-link" rel="home">
                     <svg class="pizzaro-logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 52.39">
                        <path class="cls-1" d="M51.33,16.15A5.61,5.61,0,0,0,56,10.88a4,4,0,0,0-4.67-4,5.38,5.38,0,0,0-4.67,5.22A4.07,4.07,0,0,0,51.33,16.15ZM21.42,3.69C6.1,5.62,0,17.8,0,25.47a16.41,16.41,0,0,0,2.6,8.68l5.62-4.92A11,11,0,0,1,7,24.48c0-5.22,5-13,14.42-14.18,8.17-1,10.5,4.17,10.5,8.48,0,8.21-8.17,14.51-14.42,11.78l3.23-8.35A10.87,10.87,0,0,1,25,16.72l-1.54-4.39c-5.3.67-9,5.19-10.5,9.05L1.17,52.4,9.6,51.34l5.73-15.11C29.59,40.35,40,28.8,40,17.72,40,9.67,34.47,2.05,21.42,3.69ZM197,12.22c-2.17,4-4.77,6.3-7.37,7.06A25.1,25.1,0,0,0,192,9.22c0-6.18-3.55-9.47-10-8.66-8.82,1.11-13.92,9-15.71,15.8-4,7.28-6.48,10.81-7.94,11-0.74.09-2-.6,0.42-6.88l1.48-4a8,8,0,0,0,.64-2.74c0-4-6.52-6.16-8.7-7.81L154,1.49,150.53,0c-2.17,1-5,4.2-5,6.92a4,4,0,0,0,1.64,3c-1.54,3.6-3,6.83-4.19,9.06h0c-3.82,7-7.42,11.22-9.54,11.49-1,.12-1.86-0.57.53-6.89l6.58-17.14-9.92,4.87s-1.17-4.17-6.31-3.52c-6.81.86-11.07,8.78-13.14,15.62-3.48,6.34-6.05,7.74-8,8-2.7.34-4.67-1.38-7.11-1.45l15.54-16.19-2.76-3.33c-5.2,2.63-9.17.46-13.52,1-6.36.8-7.58,6.71-12,15.05h0c-3.61,6.74-6.26,8.19-8.22,8.44-2.7.34-4.67-1.38-7.11-1.45L83.56,17.34,80.81,14c-5.2,2.63-9.17.46-13.52,1-6.36.8-7.58,6.71-12,15.05h0c-3.76,7-7.42,11.22-9.54,11.49-0.9.11-1.86-.51,0.58-6.9l6.52-17.13L44.38,18.6l-6,15.62c-3.87,10.13-.48,13.54,4.35,12.94,6.1-.77,11.4-7.62,15.48-15.33h0c3.45-6.51,4.56-7.93,7-8.24,2.23-.28,4.19.48,5.83,0.6L54.51,41.31l2.76,3.33c5.57-5.28,7.05-.2,13.63-1,6.73-.85,11-7.09,15.43-15.32h0c3.45-6.51,4.56-7.93,7-8.24,2.23-.28,4.19.48,5.83,0.6L82.61,37.77l2.76,3.33c5.57-5.29,7.05-.2,13.63-1,4.39-.55,7.72-3.4,10.74-7.59,0.25,3.46,2.25,6,6,5.49,4.67-.59,8.32-5.47,8.32-5.47s0.69,4.34,6.2,3.64c6.47-.81,11.61-7.59,15.75-15.36h0a93.45,93.45,0,0,0,4.24-9.11c1.43,1,2.6,1.86,2.6,2.92a5.62,5.62,0,0,1-.48,1.93L150.64,21c-3.82,9.91.58,12.45,4.72,11.93s7.48-4.12,10.53-8.89c0.9,4.5,4.34,7,9.93,6.31a16.62,16.62,0,0,0,11.08-6.67c5.41-.25,10.23-4.43,13.1-9.75A3.52,3.52,0,0,0,197,12.22ZM125,26.2s-2.44,4.14-5.36,4.51c-1.06.13-1.7-.37-1.7-1.76,0-3.41,3.92-13.87,8.11-14.4,2.33-.29,2.39,2.68,2.39,2.68Zm57.9-12.09a4.93,4.93,0,0,0-4.51,4.83,3.79,3.79,0,0,0,1.17,2.84c-1.17,1.69-2.49,2.93-3.76,3.09S173.7,24,173.7,22.3c0-3.94,4.08-15.65,8.27-16.18C183.09,6,184,6.66,184,8.63A18.75,18.75,0,0,1,182.87,14.11Z" transform="translate(0 -0.01)"></path>
                     </svg>
                  </a>
               </div>
            </div>
         </header>
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div class="home-v1-slider" >
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                           <div class="item slider-1" style="background-image: url(assets/images/slider/homepage-slider-1.jpg);">
                              <div class="caption fadeIn">
                                 <div class="title">SANO LA FAMILIA LOAF</div>
                                 <div class="sub-title">A loaf that speaks the language of Health, Creativity, and Family!</div>
                                 <div class="btn_action">
                                    <a href="">Order Now</a>
                                 </div>


                              </div>
                              <!-- /.caption -->
                           </div>
                           <!-- /.item -->
                        </div>
                        <!-- /.owl-carousel -->
                     </div>
                     <div class="stretch-full-width products-with-gallery-tabs section-tabs">
                        <div class="section-tabs">
                           <div class="tab-content">
                              <div class="tab-pane active" id="h1-tab-products-2">
                                 <div class="section-products-with-gallery section-products">
                                    <div class="columns-5">
                                       <ul class="products">
                                          <li class="product first">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <div class="thumbnails woocommerce-LoopProduct-link owl-carousel">
                                                         <img src="assets/images/products/p5.png" class="img-responsive" alt=""></div>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Tasty</h3>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product ">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <div class="thumbnails woocommerce-LoopProduct-link owl-carousel">
                                                         <img src="assets/images/products/p4.png" class="img-responsive" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Soft</h3>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product ">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <div class="thumbnails woocommerce-LoopProduct-link owl-carousel">
                                                         <img src="assets/images/products/p2.png" class="img-responsive" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Creative</h3>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product ">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <div class="thumbnails woocommerce-LoopProduct-link owl-carousel">
                                                         <img src="assets/images/products/p1.png" class="img-responsive" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Rationable</h3>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product last">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <div class="thumbnails woocommerce-LoopProduct-link owl-carousel">
                                                         <img src="assets/images/products/p3.png" class="img-responsive" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Flexible and Family</h3>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="list-view section-products" style="margin-top: 5rem; margin-bottom: 3rem;">
                        <h2 class="section-title">Product Details</h2>
                        <div class="footer-about-info">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-5 image">
                                    <img src="assets/images/footer/about.jpg" alt="About us">
                                 </div>
                                 <div class="col-md-7 content">
                                    <h2>Description</h2>
                                    <p>Whether for a sandwich, or toast, spreads, or dips, the versatility and creative nature of a sliced 
                                       loaf cannot be exhausted. Even better is the fact that it speaks FAMILY. You'd probably think it was OK, 
                                       and that we should leave it alone. But the good stuff needs improving too, or else it'll end up being a 
                                       cbit ordinary. That’s why we’ve gone the extra mile to ensure this breakfast king is served with vitamins. 
                                       Cheers to health!
                                       </p>
                                    <p>
                                       Baked with love and vitamin-rich Orange Fleshed Sweet Potato (OFSP), 
                                       Sano La Familia Loaf is an excellent source of vitamin A and nicely cut to suit your creative style - from sandwich, to toast, to dips. 
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

<section class="promo-section bg-grey bd-bottom padding">
<div class="container">
<div class="promo-wrap row">
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="promo-content text-center">
<i class="icon-speedometer"></i>
<h3>Creativity</h3>
<p>Allows for creativity (toast, sandwich, dips)</p>
</div>
</div> 
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="promo-content text-center">
<i class="icon-adjustments"></i>
<h3>Cell Growth</h3>
<p>Supports cell growth and differentiation.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="promo-content text-center">
<i class="icon-camera"></i>
<h3>Vitamin A</h3>
<p>The presence of Vitamin A in Orange Fleshed Sweet Potato (OFSP)</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="promo-content text-center">
<i class="icon-bargraph"></i>
<h3>Healthy Life</h3>
<p>Plays a critical role in the normal formation and maintenance of the heart, lungs, kidneys, and other organs.</p>
</div>
</div> 
</div>
</div>
</section>

                     <div class="section-events" >
                        <h3 class="pre-title"><span>Customers Reviews</span></h3>
                        <h2 class="section-title">TESTIMONIALS</h2>
                        <div class="events">
                           <div class="event">
                              <div class="media">
                                 <div class="media-left">
                                    <div class="event-date">
                                       <div class="date">05</div>
                                       <div class="month">Mar</div>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h2>
                                       <a class="tribe-event-url" href="#" title="5th International Pizza Festival with New Competitors." rel="bookmark">5th International Pizza Festival with New Competitors.</a>
                                    </h2>
                                    <div class="time-venue">
                                       <div class="time">8:00 am - 5:00 pm</div>
                                       <div class="venue">Pizzaro - 124th Street, Brooklyn</div>
                                    </div>
                                    <p>Although the legendary Double Burger really needs no introduction, please allow us… Tucked in between three soft buns are two</p>
                                    <a class="btn-more" href="#">Read more</a>
                                 </div>
                              </div>
                           </div>
                           <div class="event">
                              <div class="media">
                                 <div class="media-left">
                                    <div class="event-date">
                                       <div class="date">
                                          27
                                       </div>
                                       <div class="month">
                                          Mar
                                       </div>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h2>
                                       <a class="tribe-event-url" href="#" title="Introducing Original Burger Sets New Line: My line of Spicy." rel="bookmark">Introducing Original Burger Sets New Line: My line of Spicy.</a>
                                    </h2>
                                    <div class="time-venue">
                                       <div class="time">8:00 am - 5:00 pm</div>
                                       <div class="venue">Pizzaro - 124th Street, Brooklyn  </div>
                                    </div>
                                    <p>Although the legendary Double Burger really needs no introduction, please allow us… Tucked in between three soft buns are two</p>
                                    <a class="btn-more" href="#">Read more</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>
         <!-- #content -->
         <footer id="colophon" class="site-footer footer-v2" >
            <div class="col-full">
               <div class="footer-row row vertical-align">
                  <div class="footer-store-info">
                     <div class="footer-logo">
                        <a href="index.html" class="custom-logo-link" rel="home">
                           <svg class="pizzaro-logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 52.39">
                              <path class="cls-1" d="M51.33,16.15A5.61,5.61,0,0,0,56,10.88a4,4,0,0,0-4.67-4,5.38,5.38,0,0,0-4.67,5.22A4.07,4.07,0,0,0,51.33,16.15ZM21.42,3.69C6.1,5.62,0,17.8,0,25.47a16.41,16.41,0,0,0,2.6,8.68l5.62-4.92A11,11,0,0,1,7,24.48c0-5.22,5-13,14.42-14.18,8.17-1,10.5,4.17,10.5,8.48,0,8.21-8.17,14.51-14.42,11.78l3.23-8.35A10.87,10.87,0,0,1,25,16.72l-1.54-4.39c-5.3.67-9,5.19-10.5,9.05L1.17,52.4,9.6,51.34l5.73-15.11C29.59,40.35,40,28.8,40,17.72,40,9.67,34.47,2.05,21.42,3.69ZM197,12.22c-2.17,4-4.77,6.3-7.37,7.06A25.1,25.1,0,0,0,192,9.22c0-6.18-3.55-9.47-10-8.66-8.82,1.11-13.92,9-15.71,15.8-4,7.28-6.48,10.81-7.94,11-0.74.09-2-.6,0.42-6.88l1.48-4a8,8,0,0,0,.64-2.74c0-4-6.52-6.16-8.7-7.81L154,1.49,150.53,0c-2.17,1-5,4.2-5,6.92a4,4,0,0,0,1.64,3c-1.54,3.6-3,6.83-4.19,9.06h0c-3.82,7-7.42,11.22-9.54,11.49-1,.12-1.86-0.57.53-6.89l6.58-17.14-9.92,4.87s-1.17-4.17-6.31-3.52c-6.81.86-11.07,8.78-13.14,15.62-3.48,6.34-6.05,7.74-8,8-2.7.34-4.67-1.38-7.11-1.45l15.54-16.19-2.76-3.33c-5.2,2.63-9.17.46-13.52,1-6.36.8-7.58,6.71-12,15.05h0c-3.61,6.74-6.26,8.19-8.22,8.44-2.7.34-4.67-1.38-7.11-1.45L83.56,17.34,80.81,14c-5.2,2.63-9.17.46-13.52,1-6.36.8-7.58,6.71-12,15.05h0c-3.76,7-7.42,11.22-9.54,11.49-0.9.11-1.86-.51,0.58-6.9l6.52-17.13L44.38,18.6l-6,15.62c-3.87,10.13-.48,13.54,4.35,12.94,6.1-.77,11.4-7.62,15.48-15.33h0c3.45-6.51,4.56-7.93,7-8.24,2.23-.28,4.19.48,5.83,0.6L54.51,41.31l2.76,3.33c5.57-5.28,7.05-.2,13.63-1,6.73-.85,11-7.09,15.43-15.32h0c3.45-6.51,4.56-7.93,7-8.24,2.23-.28,4.19.48,5.83,0.6L82.61,37.77l2.76,3.33c5.57-5.29,7.05-.2,13.63-1,4.39-.55,7.72-3.4,10.74-7.59,0.25,3.46,2.25,6,6,5.49,4.67-.59,8.32-5.47,8.32-5.47s0.69,4.34,6.2,3.64c6.47-.81,11.61-7.59,15.75-15.36h0a93.45,93.45,0,0,0,4.24-9.11c1.43,1,2.6,1.86,2.6,2.92a5.62,5.62,0,0,1-.48,1.93L150.64,21c-3.82,9.91.58,12.45,4.72,11.93s7.48-4.12,10.53-8.89c0.9,4.5,4.34,7,9.93,6.31a16.62,16.62,0,0,0,11.08-6.67c5.41-.25,10.23-4.43,13.1-9.75A3.52,3.52,0,0,0,197,12.22ZM125,26.2s-2.44,4.14-5.36,4.51c-1.06.13-1.7-.37-1.7-1.76,0-3.41,3.92-13.87,8.11-14.4,2.33-.29,2.39,2.68,2.39,2.68Zm57.9-12.09a4.93,4.93,0,0,0-4.51,4.83,3.79,3.79,0,0,0,1.17,2.84c-1.17,1.69-2.49,2.93-3.76,3.09S173.7,24,173.7,22.3c0-3.94,4.08-15.65,8.27-16.18C183.09,6,184,6.66,184,8.63A18.75,18.75,0,0,1,182.87,14.11Z" transform="translate(0 -0.01)"></path>
                           </svg>
                        </a>
                     </div>
                     <ul class="store-timings">
                        <li>
                           <span class="store-timing-label">Monday - Thursday</span>
                           <span class="store-timing-value">11:00 - 21:00</span>
                        </li>
                        <li>
                           <span class="store-timing-label">Friday - Saturday</span>
                           <span class="store-timing-value">11:30 - 22:00</span>
                        </li>
                        <li>
                           <span class="store-timing-label">Sundays</span>
                           <span class="store-timing-value">12:00 - 20:00</span>
                        </li>
                     </ul>
                     <!-- /.store-timings -->
                     <div class="footer-social-icons">
                        <span class="social-icon-text">Follow us</span>
                        <ul class="social-icons list-unstyled">
                           <li><a class="fa fa-facebook" href="#"></a></li>
                           <li><a class="fa fa-twitter" href="#"></a></li>
                           <li><a class="fa fa-instagram" href="#"></a></li>
                           <li><a class="fa fa-youtube" href="#"></a></li>
                           <li><a class="fa fa-dribbble" href="#"></a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- /.footer-store-info -->
                  <div class="footer-contact-form">
                     <div class="contact-form">
                        
                     </div>
                  </div>
                  <div class="footer-contact-info">
                     <ul class="address">
                        <li><i class="po po-map-marker"></i><span class="address-text">901-947 South Drive, Houston, TX 77057, USA</span></li>
                        <li><i class="fa fa-mobile"></i><span class="address-text">+1 555 125 9455, +42 548 78 983</span></li>
                        <li><i class="po po-mail-icon"></i><span class="address-text">hello@pizzaro.com</span></li>
                     </ul>
                  </div>
               </div>
               <!-- /.footer-row -->
               <div class="pizzaro-handheld-footer-bar">
                  <ul class="columns-3">
                     <li class="my-account">
                        <a href="login-and-register.html">My Account</a>
                     </li>
                     <li class="search">
                        <a href="">Search</a>
                        <div class="site-search">
                           <div class="widget woocommerce widget_product_search">
                              <form role="search" method="get" class="woocommerce-product-search" action="#">
                                 <label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
                                 <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Search Products…" value="" name="s" title="Search for:">
                                 <input type="submit" value="Search">
                                 <input type="hidden" name="post_type" value="product">
                              </form>
                           </div>
                        </div>
                     </li>
                     <li class="cart">
                        <a class="footer-cart-contents" href="cart.html" title="View your shopping cart"><span class="count">2</span></a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- .col-full -->
         </footer>
         <div class="site-info">
            <p class="copyright">Copyright © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
         </div>
         @includeIf("layouts.tawk")
      </div>
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/tether.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

      <script type="text/javascript" src="assets/js/social.share.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script type="text/javascript" src="assets/js/scripts.min.js"></script>
   </body>
</html>