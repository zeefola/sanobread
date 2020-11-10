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
                        <li class="menu-item"><a href="/classic-loaf"><i class="po po-wraps"></i>Classic Loaf</a></li>
                        <li class="menu-item"><a href="/la-familia"><i class="po po-wraps"></i>La Familia Loaf</a></li>
                        <li class="menu-item"><a href="/amet-coconut-loaf"><i class="po po-wraps"></i>Amet Coconut Loaf</a></li>
                        <li class="menu-item"><a href="/fresh-basil-slipper"><i class="po po-wraps"></i>Fresh Basil Slipper</a></li>
                        <li class="menu-item"><a href="/fresco-delight-roll"><i class="po po-wraps"></i>Fresco Delight Roll</a></li>
                        <li class="menu-item"><a href="/breakfast-box"><i class="po po-wraps"></i>Breakfast Box</a></li>
                     </ul>
                  </div>
               </nav>
               <!-- #site-navigation -->
               <div class="site-branding">
                  <a href="/" class="custom-logo-link" rel="home">
                     <img src="/assets/images/sano_bread_mobile.png" alt="sano_bread_logo" />      
                  </a>
               </div>
            </div>
         </header>

         @yield('main_content')

        {{-- footer --}}
        @includeIf('layouts.footer')
        {{-- end footer --}}

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