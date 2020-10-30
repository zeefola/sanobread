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
                         <li class="menu-item"><a href="/classic"><i class="po po-wraps"></i>SANO Classic</a></li>
                         <li class="menu-item"><a href="/la-familia"><i class="po po-wraps"></i>SANO Lafamilia</a></li>
                         <li class="menu-item"><a href="/amet-coconut"><i class="po po-wraps"></i>SANO Amet Coconut</a></li>
                         <li class="menu-item"><a href="/fresco-delight"><i class="po po-wraps"></i>SANO Fresco Delight</a></li>
                         <li class="menu-item"><a href="/fresh"><i class="po po-wraps"></i>SANO Fresh Basil Slipper</a></li>
                      </ul>
                  </div>
               </nav>
               <!-- #site-navigation -->
               <div class="site-branding">
                  <a href="/" class="custom-logo-link" rel="home">
                     <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195 67.5"><defs><style>.cls-1{fill:none;}.cls-2{fill:#93490c;}.cls-3{fill:#f5e982;}.cls-4{fill:#cc4205;}.cls-5{font-size:12.93px;font-family:AttemptyonRegular;}.cls-5,.cls-8{fill:#fff;}.cls-6{letter-spacing:0.03em;}.cls-7{letter-spacing:0em;}</style></defs><rect class="cls-1" width="195" height="67.5"/><path class="cls-2" d="M38.33,28.06l.17-1.48,6.82-5.82-13,1.93a26.08,26.08,0,0,0-2.22,7Z" transform="translate(0 3)"/><path class="cls-2" d="M94,37.6,86.78,35l-9.73-.93-10-.62-3,5.26-5.69-5-5.72.31-4.37,7.14-3.78-2L44.37,42,32.7,45.7C38,56,50.09,63.13,64.1,63.13c18.54,0,33.65-12.55,34.3-28.24Z" transform="translate(0 3)"/><path class="cls-3" d="M31,49.21a1.12,1.12,0,0,1-.69-.23.83.83,0,0,1-.34-.79l1.15-6.32a.94.94,0,0,1,.73-.72l3-.79.13-3.94-5,1.78a1.34,1.34,0,0,1-.4.07,1.16,1.16,0,0,1-.6-.17.83.83,0,0,1-.44-.77l.94-14.24a.92.92,0,0,1,.73-.8L47,17.84a1.1,1.1,0,0,1,.31,0A1.2,1.2,0,0,1,48,18a.84.84,0,0,1,.34.82l-1.15,6a.93.93,0,0,1-.73.71l-4.6,1.18L41,30.49l4.37-.92.25,0a1.15,1.15,0,0,1,.68.22.82.82,0,0,1,.36.75l-1.56,15a1,1,0,0,1-.77.78l-13,2.93A1.24,1.24,0,0,1,31,49.21Z" transform="translate(0 3)"/><polygon class="cls-4" points="39.69 34.68 40.94 28.98 46.16 27.65 47.3 21.69 30.62 26.14 29.68 40.38 36.14 38.06 35.94 44.02 32.18 45 31.04 51.32 44.07 48.39 45.63 33.43 39.69 34.68"/><path class="cls-3" d="M99.42,42l-12,1.82a1.05,1.05,0,0,1-1.21-.71c-.13-.61-1.77-4.77-2.78-7.26a.93.93,0,0,1,0-.29c0-1-2.21-10.78-3.6-16.72a.84.84,0,0,1,.16-.68,1.16,1.16,0,0,1,.48-.32l.2-.05L92.29,16a1.14,1.14,0,0,1,.92.24.8.8,0,0,1,.29.79c-1.22,5.82,2.54,5.49,2.6,5.54s.87.05,1,.42L100.27,41a.89.89,0,0,1-.64.91ZM92.6,34l-2.66-5.63-1.86.23,2,6.29Z" transform="translate(0 3)"/><path class="cls-4" d="M87.28,42.92l12-1.82L96.1,22.54s-5,.72-3.62-5.7L80.85,18.65s3.6,15.45,3.61,16.89C84.46,35.54,87.08,42,87.28,42.92Zm2-6.85-2.55-8.24,3.83-.45L94,34.47Z" transform="translate(0 3)"/><path class="cls-3" d="M45.41,49.21a1.18,1.18,0,0,1-.69-.22.84.84,0,0,1-.34-.82l5.11-25.1a1,1,0,0,1,.79-.71l8-1.6a1,1,0,0,1,.24,0,1.19,1.19,0,0,1,.58.15.94.94,0,0,1,.45.59l5.11,24.92a.8.8,0,0,1-.21.7,1.1,1.1,0,0,1-.75.34l-7.3.45h-.07a1,1,0,0,1-1-.76l-1.14-6.55-1.29,6.3a1,1,0,0,1-.73.71l-6.47,1.6A1.36,1.36,0,0,1,45.41,49.21Zm8.82-18.63.37,0-.22-.45Z" transform="translate(0 3)"/><path class="cls-4" d="M50.43,23.22l-5.11,25.1,6.47-1.6L54.18,35l2.09,12,7.3-.45L58.46,21.62Zm2.29,8.46,1.36-4.45,1.88,4Z" transform="translate(0 3)"/><path class="cls-3" d="M82.23,46.72a1.13,1.13,0,0,1-.67-.21l-10-7.26,1,5.73a.82.82,0,0,1-.2.68,1.09,1.09,0,0,1-.71.34l-6.94.67h-.12a1.15,1.15,0,0,1-.66-.21.87.87,0,0,1-.38-.62l-1.77-22a1,1,0,0,1,.9-.94l3-.35h.15a1.08,1.08,0,0,1,.86.39l3.73,4.75L68.58,14a.92.92,0,0,1,.81-1l7.4-1.42a.93.93,0,0,1,.23,0,1,1,0,0,1,1,.69l8.76,32.3a.88.88,0,0,1-.67,1l-3.55,1.07A1.34,1.34,0,0,1,82.23,46.72Z" transform="translate(0 3)"/><polygon class="cls-4" points="69.62 16.88 72.07 34.28 65.92 26.45 62.89 26.8 64.66 48.79 71.6 48.12 70.14 40.02 82.23 48.83 85.78 47.76 77.02 15.46 69.62 16.88"/><text class="cls-5" transform="matrix(1.15, -0.15, 0.18, 0.98, 51.65, 61.44)">Bake<tspan class="cls-6" x="25.78" y="0">r</tspan><tspan class="cls-7" x="30.34" y="0">y</tspan></text><path class="cls-8" d="M45,16.11a8.19,8.19,0,0,1-4.12-1.2c-2-1.28-3.1-3.51-3.25-6.63a6.55,6.55,0,0,1,1.69-4.72c1.73-1.93,5.13-3.7,11.55-1.26A7,7,0,0,1,55,.15a6.69,6.69,0,0,1,4.46,1.1,9.15,9.15,0,0,1,2.4-1.44,7.06,7.06,0,0,1,6.3.4,6.86,6.86,0,0,1,3.47,4.68,5.1,5.1,0,0,1-.75,4c-1,1.49-3,2.51-5.83,3l-.15-.6c5.73-1.06,6.43-4,6-6.32A6.28,6.28,0,0,0,67.7.72,6.14,6.14,0,0,0,62.12.37a8.12,8.12,0,0,0-2.4,1.5l-.22.22-.28-.18A6,6,0,0,0,55.07.76a6.41,6.41,0,0,0-3.77,2.1l-.17.22L50.85,3c-4.88-1.92-8.66-1.58-10.94,1a6,6,0,0,0-1.55,4.32c.15,2.91,1.15,5,3,6.15a8.47,8.47,0,0,0,5.63.95l.17.61A10.26,10.26,0,0,1,45,16.11Z" transform="translate(0 3)"/><path class="cls-8" d="M51,21.66l-.6-.36c1.53-1.87,4.65-3.1,9.26-3.66a46.18,46.18,0,0,1,5.53-.31,4.7,4.7,0,0,1-1.75-3.42,3.18,3.18,0,0,1,.51-1.76l.62.33-.31-.16.31.16c-.07.09-1.59,2.3,1.75,4.95L67,18l-1,0C65.9,18,54.34,17.52,51,21.66Z" transform="translate(0 3)"/></svg>
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
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     {{-- <section class="promo-section bg-grey bd-bottom padding">
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
                     </section> --}}
                     
                     <div class="pitch-2">
                        <div class="container">
                          <div class="pitch-inner wow fadeInRight">
                            <h1>Share with family! Ignite your creative powers! </h1>
                            <button class="btn btn-action" type="button"><span>Order Now</span></button>
                          </div>
                        </div>
                      </div>

                     <section class="content-section bd-bottom padding">
                        <div class="container">
                           <div class="content-wrap row">
                           <div class="col-md-6 xs-padding">
                           <div class="content-details">
                           <h2>A loaf that speaks the language <br> of Health, Creativity, and Family!</h2>
                           <p>Baked with love and vitamin-rich Orange Fleshed Sweet Potato (OFSP), Sano La Familia Loaf is an excellent source of vitamin A and nicely cut to suit your creative style - from sandwich, to toast, to dips.</p>
                           <a href="#" class="default-btn">Order Now</a>
                           </div>
                           </div>
                           <div class="col-md-6 xs-padding text-center">
                           <img src="/assets/images/content-bg-1.jpg" alt="img">
                           </div>
                           </div>
                        </div>
                     </section>

                     <section class="row left-right-contents">
                        <div class="container">
                        <div class="row ">
                        <div class="col-sm-12 col-md-4 col-md-push-4 text-center wow fadeIn">
                        <img src="/assets/images/apple-watch-3.png" alt="">
                        </div>
                        <div class="col-md-4 col-sm-6 col-md-pull-4 left-content">
                        <div class="media wow fadeInUp">
                        <div class="media-left">
                        <span><i class="li_key"></i></span>
                        </div>
                        <div class="media-body">
                        <h4>Fast and secure</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.3s">
                        <div class="media-left">
                        <span><i class="li_megaphone"></i></span>
                        </div>
                        <div class="media-body">
                        <h4>Voice Assistant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-6 right-content">
                        <div class="media wow fadeInUp">
                        <div class="media-left">
                        <span><i class="li_like"></i></span>
                        </div>
                        <div class="media-body">
                        <h4>Stay in touch</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.3s">
                        <div class="media-left">
                        <span><i class="li_user"></i></span>
                        </div>
                        <div class="media-body">
                        <h4>Designed for you</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                     </section>                        

                     {{-- <div class="section-events" >
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
                     </div> --}}
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
                     {{-- <div class="footer-logo">
                        <a href="/" class="custom-logo-link" rel="home">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195 67.5"><defs><style>.cls-1{fill:none;}.cls-2{fill:#93490c;}.cls-3{fill:#f5e982;}.cls-4{fill:#cc4205;}.cls-5{font-size:12.93px;font-family:AttemptyonRegular;}.cls-5,.cls-7{fill:#fff;}.cls-6{letter-spacing:0.02em;}</style></defs><rect class="cls-1" width="195" height="67.5"/><path class="cls-2" d="M127.34-82.67l.17-1.48L134.33-90l-13,1.94a25.66,25.66,0,0,0-2.22,7Z" transform="translate(-57.01 113.73)"/><path class="cls-2" d="M183-73.13l-7.18-2.56-9.73-.93-10-.62-3,5.26-5.68-5-5.73.31-4.36,7.14-3.78-2-.17,2.72L121.71-65c5.34,10.27,17.39,17.44,31.39,17.44,18.55,0,33.66-12.56,34.31-28.25Z" transform="translate(-57.01 113.73)"/><path class="cls-3" d="M120-61.51a1.12,1.12,0,0,1-.69-.23.82.82,0,0,1-.34-.8l1.15-6.32a.93.93,0,0,1,.73-.71l3-.8.14-3.94-5,1.78a1.12,1.12,0,0,1-.4.07,1.22,1.22,0,0,1-.6-.16.84.84,0,0,1-.44-.78l.93-14.24a.94.94,0,0,1,.73-.8L136-92.89a1.1,1.1,0,0,1,.31,0,1.09,1.09,0,0,1,.68.22.8.8,0,0,1,.35.81l-1.15,6a.94.94,0,0,1-.73.7L130.86-84,130-80.24l4.37-.92.25,0a1.14,1.14,0,0,1,.68.21.83.83,0,0,1,.36.76l-1.56,14.95a1,1,0,0,1-.78.78l-13,2.94Z" transform="translate(-57.01 113.73)"/><polygon class="cls-4" points="71.69 34.68 72.94 28.98 78.16 27.65 79.3 21.69 62.62 26.14 61.68 40.38 68.14 38.06 67.94 44.02 64.18 45 63.03 51.32 76.07 48.39 77.63 33.43 71.69 34.68"/><path class="cls-3" d="M188.43-68.75l-12,1.82a1,1,0,0,1-1.21-.71c-.13-.6-1.78-4.77-2.78-7.26a.67.67,0,0,1-.06-.28c0-1-2.2-10.78-3.59-16.73a.81.81,0,0,1,.16-.67,1.06,1.06,0,0,1,.47-.33l.21,0,11.63-1.8a1.19,1.19,0,0,1,.92.24.83.83,0,0,1,.29.79c-1.22,5.82,2.53,5.5,2.59,5.54.21.14.88.06,1,.42l3.18,18.06a.88.88,0,0,1-.64.91Zm-6.82-8L179-82.37l-1.86.22L179-75.86Z" transform="translate(-57.01 113.73)"/><path class="cls-4" d="M176.29-67.81l12-1.82L185.1-88.19s-5,.72-3.62-5.7l-11.63,1.81s3.61,15.46,3.62,16.89C173.47-75.19,176.09-68.7,176.29-67.81Zm2-6.84-2.55-8.24,3.83-.46,3.36,7.1Z" transform="translate(-57.01 113.73)"/><path class="cls-3" d="M134.42-61.51a1.17,1.17,0,0,1-.7-.23.84.84,0,0,1-.33-.82l5.11-25.09a1,1,0,0,1,.79-.72l8-1.6a1,1,0,0,1,.24,0,1.23,1.23,0,0,1,.57.14.92.92,0,0,1,.46.59l5.11,24.92a.79.79,0,0,1-.21.7,1.06,1.06,0,0,1-.75.34l-7.3.45h-.07a1,1,0,0,1-1-.76l-1.14-6.55-1.29,6.31a1,1,0,0,1-.73.7l-6.47,1.6A1.45,1.45,0,0,1,134.42-61.51Zm8.81-18.63.37,0-.21-.46Z" transform="translate(-57.01 113.73)"/><path class="cls-4" d="M139.44-87.5l-5.11,25.1L140.79-64l2.4-11.74,2.09,12,7.3-.44L147.47-89.1ZM141.73-79l1.36-4.45,1.88,4Z" transform="translate(-57.01 113.73)"/><path class="cls-3" d="M171.24-64a1.13,1.13,0,0,1-.67-.21l-10-7.26,1,5.74a.77.77,0,0,1-.21.67,1.05,1.05,0,0,1-.71.35l-6.93.66h-.12a1.13,1.13,0,0,1-.67-.21.87.87,0,0,1-.37-.62l-1.77-22a.94.94,0,0,1,.9-1l3-.35h.14a1.13,1.13,0,0,1,.87.39L159.52-83l-1.93-13.72a.92.92,0,0,1,.81-1l7.4-1.42.23,0a1,1,0,0,1,1,.69l8.76,32.31a.88.88,0,0,1-.66,1l-3.55,1.06A1,1,0,0,1,171.24-64Z" transform="translate(-57.01 113.73)"/><polygon class="cls-4" points="101.62 16.88 104.07 34.28 97.92 26.45 94.89 26.8 96.66 48.79 103.6 48.12 102.14 40.02 114.23 48.83 117.78 47.76 109.02 15.46 101.62 16.88"/><text class="cls-5" transform="matrix(1.15, -0.15, 0.18, 0.98, 83.61, 61.48)">Bake<tspan class="cls-6" x="25.78" y="0">r</tspan><tspan x="30.34" y="0">y</tspan></text><path class="cls-7" d="M134-94.62a8.15,8.15,0,0,1-4.12-1.19c-2-1.29-3.1-3.52-3.26-6.63a6.57,6.57,0,0,1,1.7-4.72c1.73-1.94,5.13-3.7,11.55-1.27a7.15,7.15,0,0,1,4.07-2.15,6.7,6.7,0,0,1,4.46,1.1,9.54,9.54,0,0,1,2.4-1.44,7.06,7.06,0,0,1,6.3.4,6.9,6.9,0,0,1,3.47,4.69,5.09,5.09,0,0,1-.75,4c-1,1.49-3,2.51-5.83,3l-.15-.61c5.72-1.06,6.43-4,6-6.32a6.26,6.26,0,0,0-3.16-4.26,6.11,6.11,0,0,0-5.58-.35,8.22,8.22,0,0,0-2.4,1.49l-.23.23-.27-.19a6,6,0,0,0-4.15-1.15,6.46,6.46,0,0,0-3.77,2.1l-.18.22-.27-.11c-4.88-1.91-8.66-1.58-10.94,1a6,6,0,0,0-1.55,4.32c.15,2.92,1.14,5,3,6.16a8.61,8.61,0,0,0,5.63,1l.17.6A9.5,9.5,0,0,1,134-94.62Z" transform="translate(-57.01 113.73)"/><path class="cls-7" d="M140-89.07l-.6-.36c1.53-1.86,4.65-3.1,9.26-3.66a45.69,45.69,0,0,1,5.52-.3,4.76,4.76,0,0,1-1.74-3.43,3.18,3.18,0,0,1,.51-1.76l.62.33-.31-.16.31.16c-.07.1-1.59,2.31,1.75,5l.73.58-1-.05C154.91-92.76,143.35-93.21,140-89.07Z" transform="translate(-57.01 113.73)"/></svg> 
                        </a>
                     </div> --}}
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
                        <div class="footer-logo">
                           <a href="/" class="custom-logo-link" rel="home">
                              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195 107"><defs><style>.cls-1{fill:none;}.cls-2{fill:#93490c;}.cls-3{fill:#f5e982;}.cls-4{fill:#cc4205;}.cls-5{font-size:21.59px;font-family:AttemptyonRegular;}.cls-5,.cls-7{fill:#fff;}.cls-6{letter-spacing:0.02em;}</style></defs><rect class="cls-1" y="1" width="195" height="105"/><path class="cls-2" d="M58.15,23.07l.26-2.47,10.28-9.75L49.13,14.08a46.78,46.78,0,0,0-3.35,11.68Z" transform="translate(-0.04 25.18)"/><path class="cls-2" d="M142,39.05,131.2,34.76,116.53,33.2l-15.08-1L97,41l-8.57-8.29-8.63.52-6.58,12-5.71-3.39-.25,4.56L49.67,52.62c8,17.2,26.21,29.2,47.33,29.2,28,0,50.73-21,51.71-47.32Z" transform="translate(-0.04 25.18)"/><path class="cls-3" d="M47.16,58.5a1.59,1.59,0,0,1-1-.38,1.45,1.45,0,0,1-.51-1.34L47.33,46.2a1.53,1.53,0,0,1,1.1-1.2L53,43.67l.21-6.6-7.5,3a1.58,1.58,0,0,1-.61.12,1.62,1.62,0,0,1-.9-.28,1.44,1.44,0,0,1-.67-1.3L45,14.74a1.51,1.51,0,0,1,1.1-1.34L71.21,6a1.53,1.53,0,0,1,.47-.07,1.63,1.63,0,0,1,1,.37,1.44,1.44,0,0,1,.52,1.36l-1.73,10a1.53,1.53,0,0,1-1.1,1.19l-6.94,2L62.2,27.14l6.59-1.54a1.67,1.67,0,0,1,1.4.32,1.44,1.44,0,0,1,.54,1.26l-2.36,25a1.51,1.51,0,0,1-1.16,1.31L47.56,58.45A1.37,1.37,0,0,1,47.16,58.5Z" transform="translate(-0.04 25.18)"/><polygon class="cls-4" points="60.16 54.32 62.05 44.78 69.91 42.54 71.64 32.55 46.49 40.01 45.07 63.86 54.82 59.98 54.5 69.97 48.84 71.61 47.12 82.19 66.77 77.28 69.12 52.23 60.16 54.32"/><path class="cls-3" d="M150.25,46.38l-18,3a1.57,1.57,0,0,1-1.82-1.19c-.2-1-2.68-8-4.19-12.15a1.36,1.36,0,0,1-.09-.48c0-1.65-3.32-18.06-5.41-28A1.39,1.39,0,0,1,121,6.46a1.54,1.54,0,0,1,.71-.54,1.09,1.09,0,0,1,.31-.08l17.53-3a1.59,1.59,0,0,1,1.39.41,1.43,1.43,0,0,1,.44,1.32c-1.85,9.74,3.81,9.2,3.91,9.27.31.24,1.31.1,1.49.71l4.8,30.24a1.49,1.49,0,0,1-1,1.53ZM140,33l-4-9.43-2.81.38,2.94,10.54Z" transform="translate(-0.04 25.18)"/><path class="cls-4" d="M131.94,48l18-3.05-4.73-31.09s-7.49,1.21-5.46-9.54l-17.53,3s5.43,25.9,5.44,28.3C127.69,35.6,131.64,46.47,131.94,48ZM135,36.49l-3.84-13.8,5.77-.76L142,33.81Z" transform="translate(-0.04 25.18)"/><path class="cls-3" d="M68.83,58.5a1.61,1.61,0,0,1-1-.38,1.46,1.46,0,0,1-.5-1.36l7.7-42a1.54,1.54,0,0,1,1.2-1.2l12.1-2.68a1.47,1.47,0,0,1,.36,0,1.57,1.57,0,0,1,.86.25,1.5,1.5,0,0,1,.69,1l7.7,41.74A1.48,1.48,0,0,1,97.58,55a1.61,1.61,0,0,1-1.13.57l-11,.74h-.12A1.55,1.55,0,0,1,83.78,55L82.07,44,80.13,54.58A1.55,1.55,0,0,1,79,55.76l-9.75,2.68A1.67,1.67,0,0,1,68.83,58.5ZM82.12,27.3l.56-.09-.33-.76Z" transform="translate(-0.04 25.18)"/><path class="cls-4" d="M76.4,15,68.69,57l9.75-2.68,3.62-19.68L85.2,54.78l11-.75L88.5,12.29Zm3.45,14.17,2.05-7.46,2.83,6.71Z" transform="translate(-0.04 25.18)"/><path class="cls-3" d="M124.34,54.33a1.59,1.59,0,0,1-1-.36l-15-12.15,1.56,9.6a1.41,1.41,0,0,1-.3,1.13,1.63,1.63,0,0,1-1.08.58L98,54.24h-.18a1.63,1.63,0,0,1-1-.34,1.43,1.43,0,0,1-.56-1L93.61,16.05A1.51,1.51,0,0,1,95,14.47l4.55-.6h.22a1.6,1.6,0,0,1,1.31.66l5.62,8-2.91-23A1.5,1.5,0,0,1,105-2.13l11.17-2.39a2,2,0,0,1,.34,0A1.55,1.55,0,0,1,118-3.4l13.21,54.11a1.48,1.48,0,0,1-1,1.74l-5.35,1.79A1.54,1.54,0,0,1,124.34,54.33Z" transform="translate(-0.04 25.18)"/><polygon class="cls-4" points="105.28 24.5 108.97 53.65 99.7 40.53 95.14 41.13 97.81 77.94 108.26 76.83 106.06 63.26 124.3 78.02 129.64 76.23 116.44 22.12 105.28 24.5"/><text class="cls-5" transform="matrix(1.04, -0.16, 0.16, 0.99, 78.12, 99.09)">Bake<tspan class="cls-6" x="43.05" y="0">r</tspan><tspan x="50.65" y="0">y</tspan></text><path class="cls-7" d="M68.22,3.06a11.54,11.54,0,0,1-6.21-2C59-1.1,57.35-4.84,57.11-10A11.7,11.7,0,0,1,59.67-18c2.6-3.23,7.73-6.19,17.41-2.11a10.36,10.36,0,0,1,6.13-3.61,9.27,9.27,0,0,1,6.72,1.85,13.81,13.81,0,0,1,3.62-2.41,9.67,9.67,0,0,1,9.49.66,11.5,11.5,0,0,1,5.24,7.85A9.38,9.38,0,0,1,107.15-9c-1.57,2.49-4.53,4.2-8.79,5.08l-.23-1c8.64-1.77,9.7-6.73,9.07-10.58a10.47,10.47,0,0,0-4.76-7.14A8.44,8.44,0,0,0,94-23.3a12.33,12.33,0,0,0-3.62,2.51l-.34.37-.41-.31a8.4,8.4,0,0,0-6.26-1.92,9.53,9.53,0,0,0-5.68,3.52l-.26.36L77-19C69.68-22.16,64-21.6,60.54-17.33A10.72,10.72,0,0,0,58.2-10.1c.23,4.89,1.73,8.36,4.47,10.32,3.68,2.63,8.44,1.6,8.48,1.59l.26,1A13.37,13.37,0,0,1,68.22,3.06Z" transform="translate(-0.04 25.18)"/><path class="cls-7" d="M77.2,12.35l-.9-.6c2.3-3.13,7-5.19,14-6.13a62,62,0,0,1,8.32-.51A8.35,8.35,0,0,1,96-.63a5.64,5.64,0,0,1,.77-2.94l.93.55-.46-.28.46.28c-.1.15-2.4,3.85,2.64,8.29l1.11,1-1.51-.08C99.72,6.17,82.29,5.42,77.2,12.35Z" transform="translate(-0.04 25.18)"/></svg>
                           </a>
                        </div>
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
                     {{-- <li class="my-account">
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
                     </li> --}}
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