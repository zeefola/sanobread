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
                         <li class="menu-item"><a href="/classic-loaf"><i class="po po-wraps"></i>SANO Classic Loaf</a></li>
                         <li class="menu-item"><a href="/la-familia"><i class="po po-wraps"></i>SANO La Familia</a></li>
                         <li class="menu-item"><a href="/amet-coconut"><i class="po po-wraps"></i>SANO Amet Coconut</a></li>
                         <li class="menu-item"><a href="/fresco-delight-roll"><i class="po po-wraps"></i>SANO Fresco Delight</a></li>
                         <li class="menu-item"><a href="/fresh-basil-slipper"><i class="po po-wraps"></i>SANO Fresh Basil Slipper</a></li>
                      </ul>
                  </div>
               </nav>
               <!-- #site-navigation -->
               <div class="site-branding">
                  <a href="/" class="custom-logo-link" rel="home">
                     <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 232.71 113.68"><defs><style>.cls-1{fill:none;}.cls-2{fill:#93490c;}.cls-3{fill:#f5e982;}.cls-4{fill:#cc4205;}.cls-5{font-size:22.44px;font-family:AttemptyonRegular;}.cls-5,.cls-7{fill:#fff;}.cls-6{letter-spacing:0.02em;}</style></defs><rect class="cls-1" width="232.71" height="113.68"/><path class="cls-2" d="M-20.48-81.78l.26-2.58,10-10.14-19,3.36A51.42,51.42,0,0,0-32.48-79Z" transform="translate(65 133.25)"/><path class="cls-2" d="M60.9-65.14,50.39-69.61,36.17-71.23,21.54-72.31l-4.33,9.17L8.9-71.77l-8.37.54L-5.86-58.78l-5.53-3.53-.25,4.75L-28.7-51a50.2,50.2,0,0,0,45.91,30.4c27.13,0,49.23-21.89,50.17-49.26Z" transform="translate(65 133.25)"/><path class="cls-3" d="M-31.14-44.9a1.5,1.5,0,0,1-1-.39,1.6,1.6,0,0,1-.49-1.4l1.68-11a1.54,1.54,0,0,1,1.06-1.25l4.45-1.38.2-6.88-7.27,3.11a1.52,1.52,0,0,1-.59.12,1.5,1.5,0,0,1-.88-.29,1.56,1.56,0,0,1-.65-1.35l1.38-24.83a1.55,1.55,0,0,1,1.06-1.4L-7.8-99.6a1.42,1.42,0,0,1,.45-.08,1.51,1.51,0,0,1,1,.39,1.58,1.58,0,0,1,.51,1.42l-1.68,10.4a1.55,1.55,0,0,1-1.07,1.23l-6.73,2.06-1.23,6.63,6.4-1.6a1.47,1.47,0,0,1,.36,0,1.5,1.5,0,0,1,1,.37,1.57,1.57,0,0,1,.53,1.32l-2.29,26.07a1.54,1.54,0,0,1-1.13,1.36l-19.06,5.12A1.31,1.31,0,0,1-31.14-44.9Z" transform="translate(65 133.25)"/><polygon class="cls-4" points="46.52 57.78 48.35 47.85 55.97 45.52 57.65 35.13 33.25 42.89 31.88 67.72 41.33 63.68 41.03 74.08 35.54 75.78 33.86 86.8 52.92 81.68 55.21 55.61 46.52 57.78"/><path class="cls-3" d="M68.88-57.51,51.39-54.34a1.52,1.52,0,0,1-1.77-1.24c-.2-1.05-2.6-8.32-4.07-12.65a1.69,1.69,0,0,1-.08-.5c0-1.72-3.22-18.8-5.25-29.16a1.58,1.58,0,0,1,.23-1.18,1.51,1.51,0,0,1,.69-.56,1.71,1.71,0,0,1,.3-.09l17-3.14a1.48,1.48,0,0,1,1.35.42,1.59,1.59,0,0,1,.42,1.38c-1.78,10.14,3.71,9.57,3.8,9.65.3.25,1.27.1,1.45.74l4.66,31.48a1.56,1.56,0,0,1-.95,1.59A1.49,1.49,0,0,1,68.88-57.51Zm-10-13.95L55-81.27l-2.72.39,2.85,11Z" transform="translate(65 133.25)"/><path class="cls-4" d="M51.12-55.87,68.61-59,64-91.41s-7.27,1.26-5.3-9.93l-17,3.15S47-71.24,47-68.73C47-68.73,50.83-57.42,51.12-55.87Zm3-11.94L50.38-82.17,56-83,60.9-70.6Z" transform="translate(65 133.25)"/><path class="cls-3" d="M-10.11-44.9a1.5,1.5,0,0,1-1-.39,1.58,1.58,0,0,1-.49-1.42l7.48-43.76A1.53,1.53,0,0,1-3-91.72L8.76-94.51a1.32,1.32,0,0,1,.34,0,1.48,1.48,0,0,1,.84.25,1.61,1.61,0,0,1,.67,1l7.47,43.45a1.6,1.6,0,0,1-.3,1.22,1.51,1.51,0,0,1-1.09.6L6-47.23H5.9a1.54,1.54,0,0,1-1.51-1.33L2.73-60,.84-49A1.52,1.52,0,0,1-.23-47.75L-9.69-45A1.52,1.52,0,0,1-10.11-44.9ZM2.78-77.38l.54-.09L3-78.26Z" transform="translate(65 133.25)"/><path class="cls-4" d="M-2.77-90.21l-7.48,43.76,9.46-2.79L2.72-69.73l3,21,10.67-.77L9-93ZM.58-75.47l2-7.76,2.75,7Z" transform="translate(65 133.25)"/><path class="cls-3" d="M43.74-49.24a1.54,1.54,0,0,1-1-.37L28.18-62.26l1.51,10a1.55,1.55,0,0,1-.29,1.18,1.55,1.55,0,0,1-1,.6L18.22-49.33H18a1.46,1.46,0,0,1-1-.36,1.56,1.56,0,0,1-.55-1.08L13.93-89.09a1.55,1.55,0,0,1,1.31-1.65l4.43-.62h.21a1.51,1.51,0,0,1,1.26.68L26.6-82.4l-2.82-23.92A1.54,1.54,0,0,1,25-108l10.83-2.48a1.37,1.37,0,0,1,.34,0,1.53,1.53,0,0,1,1.48,1.2L50.41-53a1.55,1.55,0,0,1-1,1.82l-5.19,1.86A1.48,1.48,0,0,1,43.74-49.24Z" transform="translate(65 133.25)"/><polygon class="cls-4" points="90.29 26.75 93.87 57.09 84.88 43.43 80.45 44.05 83.05 82.38 93.19 81.22 91.05 67.09 108.74 82.46 113.93 80.59 101.12 24.26 90.29 26.75"/><text class="cls-5" transform="matrix(0.97, -0.16, 0.15, 0.99, 63.95, 104.52)">Bake<tspan class="cls-6" x="44.74" y="0">r</tspan><tspan x="52.64" y="0">y</tspan></text><path class="cls-7" d="M-10.7-102.62a10.54,10.54,0,0,1-6-2.08c-2.92-2.24-4.53-6.13-4.76-11.56A12.83,12.83,0,0,1-19-124.49c2.53-3.37,7.51-6.45,16.9-2.2a10,10,0,0,1,5.95-3.76,8.58,8.58,0,0,1,6.52,1.93A13.3,13.3,0,0,1,13.87-131a8.81,8.81,0,0,1,9.21.69,12,12,0,0,1,5.08,8.17,10.32,10.32,0,0,1-1.1,7c-1.52,2.6-4.39,4.38-8.52,5.29L18.32-111c8.37-1.85,9.4-7,8.79-11a10.93,10.93,0,0,0-4.62-7.43,7.7,7.7,0,0,0-8.16-.61,11.6,11.6,0,0,0-3.51,2.61l-.33.38-.4-.31a7.78,7.78,0,0,0-6.08-2c-3.34.52-5.49,3.63-5.51,3.66l-.26.38-.4-.19c-7.13-3.34-12.66-2.75-16,1.69a11.69,11.69,0,0,0-2.26,7.53c.21,5.09,1.67,8.7,4.32,10.74,3.58,2.74,8.2,1.66,8.24,1.65l.25,1.06A12.06,12.06,0,0,1-10.7-102.62Z" transform="translate(65 133.25)"/><path class="cls-7" d="M-2-92.94l-.87-.62C-.64-96.82,3.92-99,10.67-99.95a56.06,56.06,0,0,1,8.08-.53,9,9,0,0,1-2.55-6,6.21,6.21,0,0,1,.75-3.07l.9.58-.45-.29.45.29c-.1.16-2.33,4,2.56,8.63l1.07,1L20-99.37C19.85-99.38,3-100.15-2-92.94Z" transform="translate(65 133.25)"/></svg>   
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