<header id="masthead" class="site-header header-v1"  style="background-image: none; ">
    <div class="col-full">
       <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
       <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
       <div class="header-wrap">
          <div class="site-branding">
             <a href="/" class="custom-logo-link" rel="home">
               <span class="logo-desktop">
                  <img src="/assets/images/sano_bread.png" alt="sano_bread_logo" />
               </span>
             </a>
               <span class="logo-mobile">
                  <img src="/assets/images/sano_bread_mobile.png" alt="sano_bread_logo" />
               </span>
          </div>
          <nav id="site-navigation" class="main-navigation"  aria-label="Primary Navigation">
             <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>
             <div class="primary-navigation">
                @yield('site_navigation')
             </div>
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
                  <li class="menu-item"><a href="/classic-loaf"><img src="/assets/images/icon/mobile-loaf-1-icon.png" alt="">Classic Loaf</a></li>
                  <li class="menu-item"><a href="/la-familia"><img src="/assets/images/icon/mobile-loaf-2-icon.png" alt="">La Familia Loaf</a></li>
                  <li class="menu-item"><a href="/amet-coconut-loaf"><img src="/assets/images/icon/mobile-loaf-3-icon.png" alt="">Amet Coconut Loaf</a></li>
                  <li class="menu-item"><a href="/fresh-basil-slipper"><img src="/assets/images/icon/mobile-loaf-4-icon.png" alt="">Fresh Basil Slipper</a></li>
                  <li class="menu-item"><a href="/fresco-delight-roll"><img src="/assets/images/icon/mobile-loaf-5-icon.png" alt="">Fresco Delight Roll</a></li>
                  <li class="menu-item"><a href="/breakfast-box"><img src="/assets/images/icon/mobile-breakfast-box-icon.png" alt="">Breakfast Box</a></li>
               </ul>
             </div>
          </nav>
          <!-- #site-navigation -->
          <div class="header-info-wrapper">
             <div class="header-phone-numbers">
                <span class="intro-text">Call and Order in Lagos</span>
                {{-- <select class="select-city-phone-numbers" name="city-phone-numbers" id="city-phone-numbers">
                   <option value="54 548 779 654">London</option>
                   <option value="33 398 621 710">Paris</option>
                   <option value="718 54 674 021">New York</option>
                </select> --}}
                <span id="city-phone-number-label" class="phone-number">{{ config('app.telephone_1') }}</span>
             </div>
             <ul class="site-header-cart-v2 menu">
                <li class="cart-content ">
                   <a href="https://shop.sanobread.com/cart?action=show" title="View your shopping cart" target="_blank">
                   <i class="po po-scooter"></i>
                   <span>Go to Your Cart</span>
                   </a>
                   <ul class="sub-menu">
                      <li>
                         <a href="https://shop.sanobread.com/cart?action=show" title="View your shopping cart" target="_blank">
                         <span class="count">0 items</span> <span class="amount"><span>&#8358;</span> 00.00</span>
                         </a>
                      </li>
                   </ul>
                </li>
             </ul>
          </div>
       </div>
       <div class="pizzaro-secondary-navigation">
          <nav class="secondary-navigation"  aria-label="Secondary Navigation">
             <ul  class="menu">
                <li class="menu-item"><a href="/classic-loaf"><img src="/assets/images/icon/loaf-1-icon.png" alt=""> Classic Loaf</a></li>
                <li class="menu-item"><a href="/la-familia"><img src="/assets/images/icon/loaf-2-icon.png" alt=""> </i>La Familia Loaf</a></li>
                <li class="menu-item"><a href="/amet-coconut-loaf"><img src="/assets/images/icon/loaf-3-icon.png" alt=""> Amet Coconut Loaf</a></li>
                <li class="menu-item"><a href="/fresh-basil-slipper"><img src="/assets/images/icon/loaf-4-icon.png" alt=""> Fresh Basil Slipper</a></li>
                <li class="menu-item"><a href="/fresco-delight-roll"><img src="/assets/images/icon/loaf-5-icon.png" alt=""> Fresco Delight Roll</a></li>
                <li class="menu-item"><a href="/breakfast-box"><img src="/assets/images/icon/breakfast-box-icon.png" alt="">Breakfast Box</a></li>
             </ul>
          </nav>
          <!-- #secondary-navigation -->
       </div>
    </div>
 </header>