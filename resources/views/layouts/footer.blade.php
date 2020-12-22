<!-- #content -->
<div class="footer-v1-static-content">
    <div class="kc-css-994088 kc_row">
       <div class="kc-row-container  kc-container">
          <div class="kc-wrap-columns">
             <div class="kc-css-194963 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="stretch-full-width kc-col-container">
                   <div class="kc-css-126640 kc_shortcode kc_wrap_instagram  kc_ins_col_6">
                      <ul class="row">
                          <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gyf2hTkr/" target="_blank"><img alt="" src="assets/images/footer/1.jpg"></a></li>
                          <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gtf1BCmM/" target="_blank"><img alt="" src="assets/images/footer/2.jpg"></a></li>
                          <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GnvhBqNt/" target="_blank"><img alt="" src="assets/images/footer/3.jpg"></a></li>
                          <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GhsuhQE4/" target="_blank"><img alt="" src="assets/images/footer/4.jpg"></a></li>
                          <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F_ZbBuxI/" target="_blank"><img alt="" src="assets/images/footer/5.jpg"></a></li>
                          <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F8fLhgkp/" target="_blank"><img alt="" src="assets/images/footer/6.jpg"></a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 <footer id="colophon" class="site-footer footer-v1" >
    <div class="col-full">
       <div class="footer-social-icons">
          <span class="social-icon-text">Follow us</span>
          <ul class="social-icons list-unstyled">
             <li><a class="fa fa-facebook" href="{{ config('app.facebook') }}" target="_blank"></a></li>
             <li><a class="fa fa-twitter" href="{{ config('app.twitter') }}" target="_blank"></a></li>
             <li><a class="fa fa-instagram" href="{{ config('app.instagram') }}" target="_blank"></a></li>
             <li><a class="fa fa-youtube" href="{{ config('app.youtube') }}" target="_blank"></a></li>
             <li><a class="fa fa-pinterest" href="{{ config('app.pinterest') }}" target="_blank"></a></li>
             <li><a class="fa fa-linkedin" href="{{ config('app.linkedin') }}" target="_blank"></a></li>
          </ul>
       </div>
       <div class="footer-logo">
          <a href="/" class="custom-logo-link" rel="home">
            <img src="/assets/images/sano_bread.png" alt="sano_bread_logo" />   
         </a>
       </div>
       <div class="site-address">
          <ul class="address">
             <li> {{ config('app.name') }} </li>
             <li> {{ config('app.address_1') }} </li>
             <li>Telephone 1: {{ config('app.telephone_2') }}</li>
             <li>Telephone 2: {{ config('app.telephone_3') }}</li>
          </ul>
       </div>
       <div class="site-info">
          <p class="copyright">Copyright &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
       </div>
       <!-- .site-info -->      
       <a role="button" class="footer-action-btn" href="/contact-us"><i class="po po-map-marker"></i>Find us on Map</a>
       <div class="pizzaro-handheld-footer-bar">
          <ul class="columns-3">
             <li class="my-account">
                <a href="https://shop.sanobread.com/login?back=my-account" target="_blank">My Account</a>
             </li>
             <li class="cart">
                <a class="footer-cart-contents" href="https://shop.sanobread.com/cart?action=show" title="View your shopping cart" target="_blank">
                <span class="count">0</span>
                </a>
             </li> 
             <li class="search">
                <a href="#">Search</a>
                <div class="site-search">
                   <div class="widget woocommerce widget_product_search">
                      <form role="search" method="get" class="woocommerce-product-search" >
                         <label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
                         <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Search Products&hellip;" value="" name="s" title="Search for:" />
                         <input type="submit" value="Search" />
                         <input type="hidden" name="post_type" value="product" />
                      </form>
                   </div>
                </div>
             </li>
          </ul>
       </div>
    </div>
    <!-- .col-full -->
 </footer>
