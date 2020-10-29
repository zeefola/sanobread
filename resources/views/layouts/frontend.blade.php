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
      {{-- body --}}
      @yield('body')
   
        {{-- header --}}
        @section('site_navigation')
        <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                   
         <li class="menu-item"><a href="/">Home</a></li>
         <li class="menu-item" itemprop="name"><a itemprop="url" href="/about-us">About Us</a></li>
         <li class="menu-item" itemprop="name"><a itemprop="url" href="/products">Products</a></li>
         <li class="cart-content menu-item-has-children">
          <a><span>Pages</span></a>
          <ul class="sub-menu">
             <li itemprop="name">
                <a itemprop="url" href="/contact-us" title="Contact Us ">
                <span class="count">Contact Us</span>
                </a>
             </li>
             <li itemprop="name">
                <a itemprop="url" href="/faq" title="Faq">
                  <span class="count">Faq</span>
                </a>
             </li>
           {{-- <li>
              <a href="/newsletter" title="News Letter">
                <span class="count">News Letter</span>
              </a>
           </li> --}}
           <li itemprop="name">
              <a itemprop="url" href="/terms-of-use" title="Terms of Use">
                <span class="count">Terms of Use</span>
              </a>
           </li>
          </ul>
       </li>
      </ul>
      @endsection
        @yield('header')
        {{-- end header --}}
        <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                    {{-- banner --}}
                    @yield('banner')
                    {{-- end banner --}}

                    @yield('breadcrumb')

                    @yield('main_content')

                    {{-- footer --}}
                    @includeIf('layouts.footer')
                    {{-- end footer --}}

                  <!-- chat plugin-->
                    @includeIf("layouts.tawk")
                  
    <!-- #colophon -->
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