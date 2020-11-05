@extends('layouts.frontend')

@section('body')
<body class="page-template-template-homepage-v1 home-v1">
   <div id="page" class="hfeed site">
@endsection

@section('banner')
@includeIf('layouts.banner')
@endsection

@section('main_content')
<div class="tiles">
    <div class="row">
       <div class="col-xs-12 col-sm-6">
          <div class="banner top-left" >
             <a href="https://shop.sanobread.com/home/6-classic-loaf.html">
                <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/1.jpg ); height: 442px;">
                   <div class="caption">
                      <h3 class="title">CLASSIC LOAF</h3>
                      <h4 class="subtitle">SUMMER PIZZA</h4>
                      <span class="button">HOT &amp; SPICY</span>
                      {{-- <span class="condition"><em>*</em>ONLY IN LOCAL</span> --}}
                   </div>
                </div>
             </a>
          </div>
       </div>
       <div class="col-xs-12 col-sm-6">
          <div class="banners">
             <div class="row">
                <div class="banner col-sm-6 top-right" >
                   <a href="https://shop.sanobread.com/home/21-fresh-basil-slipper.html">
                      <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/2.jpg ); height: 210px;">
                         <div class="caption">
                            <h3 class="title">Fresh</h3>
                            <h3 class="title">Basil</h3>
                            <h4 class="subtitle">Slipper</h4>
                            {{-- <div class="description">for online orders in wendsdays</div> --}}
                         </div>
                      </div>
                   </a>
                </div>
                <div class="banner col-sm-6 top-right" >
                   <a href="https://shop.sanobread.com/home/5-la-familia-loaf.html">
                      <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/3.jpg ); height: 210px;">
                         <div class="caption">
                            <h3 class="title third-product">La Familia </h3>
                            <h4 class="subtitle">Loaf</h4>
                            {{-- <span class="condition"><em>*</em>ONLY IN LOCAL</span> --}}
                         </div>
                      </div>
                   </a>
                </div>
             </div>
          </div>
          <div class="banner center" >
             <a href="https://shop.sanobread.com/home/22-fresco-delight-roll.html">
                <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/4.jpg  ); height: 210px;">
                   <div class="caption">
                      <h3 class="title"><span>Fresco</span> Delight Roll</h3>
                   </div>
                </div>
             </a>
          </div>
       </div>
    </div>
 </div>
 <div class="section-tabs">
    <ul class="nav nav-tabs pizzaro-nav-tabs" >
       <li class="nav-item">
          <a href="#h1-tab-products-1" data-toggle="tab"> Bread Loaves</a>
       </li>
       <li class="nav-item active">
          <a href="#h1-tab-products-2" class="active" data-toggle="tab">Bread Rolls</a>
       </li>
       <li class="nav-item">
          <a href="#h1-tab-products-3" data-toggle="tab">Special Products</a>
       </li>
    </ul>
    <div class="tab-content">
       <div class="tab-pane" id="h1-tab-products-1">
          <div class="section-products">
             <div class="woocommerce columns-3">
                <div class="columns-3">
                   <ul class="products">
                      <li class="product first">
                         <div class="product-outer">
                            <div class="product-inner">
                               <div class="product-image-wrapper">
                                  <a href="https://shop.sanobread.com/home/6-classic-loaf.html" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p1.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com/home/6-classic-loaf.html" class="woocommerce-LoopProduct-link">
                                     <h3>Classic Loaf</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">All the nutrients you need in one vintage loaf!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com/home/6-classic-loaf.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                                  <a href="https://shop.sanobread.com/home/5-la-familia-loaf.html" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p2.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com/home/5-la-familia-loaf.html" class="woocommerce-LoopProduct-link">
                                     <h3>La Familia Loaf</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">A Loaf -  Health, Creativity, and Family!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com/home/5-la-familia-loaf.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                                  <a href="https://shop.sanobread.com/home/20-amet-coconut-loaf.html" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p3.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com/home/20-amet-coconut-loaf.html" class="woocommerce-LoopProduct-link">
                                     <h3>Amet Coconut Loaf</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">Exciting tropical adventure in one coconutty loaf!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com/home/20-amet-coconut-loaf.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
       <div class="tab-pane active" id="h1-tab-products-2">
          <div class="section-products">
             <div class="woocommerce columns-3">
                <div class="columns-3">
                   <ul class="products">
                      <li class="product first">
                         <div class="product-outer">
                            <div class="product-inner">
                               <div class="product-image-wrapper">
                                  <a href="https://shop.sanobread.com/home/21-fresh-basil-slipper.html" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p4.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com/home/21-fresh-basil-slipper.html" class="woocommerce-LoopProduct-link">
                                     <h3>Fresh Basil Slipper</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">Break the rules! Rewrite the laws! You decide what goes into you!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com/home/21-fresh-basil-slipper.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                                  <a href="https://shop.sanobread.com/home/22-fresco-delight-roll.html" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p5.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com/home/22-fresco-delight-roll.html" class="woocommerce-LoopProduct-link">
                                     <h3>Fresco Delight Roll</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">Cool! Effective! Snacky! You should try it!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com/home/22-fresco-delight-roll.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                                  <a href="https://shop.sanobread.com/home/22-fresco-delight-roll.html" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p6.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com/home/22-fresco-delight-roll.html" class="woocommerce-LoopProduct-link">
                                     <h3>Fresco Delight Roll</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">Cool! Effective! Snacky! You should try it!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com/home/22-fresco-delight-roll.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
       <div class="tab-pane" id="h1-tab-products-3">
          <div class="section-products">
             <div class="woocommerce columns-3">
                <div class="columns-3">
                   <ul class="products">
                      <li class="product first">
                         <div class="product-outer">
                            <div class="product-inner">
                               <div class="product-image-wrapper">
                                  <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p7.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                                     <h3>Breakfast Box</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">Your favorite box of health! Build your menu here!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                                  <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p8.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                                     <h3>Breakfast Box</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">Your favorite box of health! Build your menu here!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                                  <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                                  <img src="assets/images/products/p9.jpg" class="img-responsive" alt="">
                                  </a>
                               </div>
                               <div class="product-content-wrapper">
                                  <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                                     <h3>Breakfast Box</h3>
                                     <div itemprop="description">
                                        <p style="max-height: none;">Your favorite box of health! Build your menu here!</p>
                                     </div>
                                  </a>
                                  <div class="hover-area">
                                     <a rel="nofollow" href="https://shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
       <!-- /.panel -->
    </div>
 </div>
 <div class="stretch-full-width section-products-sale-event"  style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/5.jpg ); height: 468px;">
    <div class="sale-event-content">
       <h3 class="pre-title"><span>Build your box of health here!</span></h3>
       <h2 class="section-title">BREAKFAST BOX</h2>
       <div class="sale-event-products">
          <div class="products-price">
             <span class="price"><span class="currency"> &#8358;</span>1<span class="decimals">500</span><span class="price-info">EACH</span></span>
          </div>
          <ul class="products-info">
             <li>
                <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                   <h3>Hurray</h3>
                </a>
             </li>
             <li>
                <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                   <h3>And</h3>
                </a>
             </li>
             <li>
                <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                   <h3>Order Now</h3>
                </a>
             </li>
          </ul>
       </div>
       <a href="https://shop.sanobread.com" class="button">Order Now</a>
    </div>
 </div>
 <div class="section-products">
    <h2 class="section-title">Goes Great With</h2>
    <div class="columns-4">
       <ul class="products">
          <li class="product first">
             <div class="product-outer">
                <div class="product-inner">
                   <div class="product-image-wrapper">
                      <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                      <img src="assets/images/products/p9.jpg" class="img-responsive" alt="">
                      </a>
                   </div>
                   <div class="product-content-wrapper">
                      <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                         <h3>Drinks</h3>
                         <p style="max-height: none; margin-bottom: -.6rem; margin-top: -2rem;">Basil Tea</p>
                         <p style="max-height: none;">Sano Juice</p>
                      </a>
                      <div class="hover-area">
                         <a rel="nofollow" href="https://shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                      <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                      <img src="assets/images/products/p10.jpg" class="img-responsive" alt="">
                      </a>
                   </div>
                   <div class="product-content-wrapper">
                      <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                         <h3>Toppings</h3>
                         <p style="max-height: none; margin-bottom: -.6rem; margin-top: -2rem;">Egg</p>
                         <p style="max-height: none;">Peanut Butter</p>
                      </a>
                      <div class="hover-area">
                         <a rel="nofollow" href="https://shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                      <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                      <img src="assets/images/products/p2.jpg" class="img-responsive" alt="">
                      </a>
                   </div>
                   <div class="product-content-wrapper">
                      <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                         <h3>Enhancers </h3>
                         <p style="max-height: none; margin-bottom: -.6rem; margin-top: -2rem;">Honey</p>
                         <p style="max-height: none;">Sweetner</p>
                      </a>
                      <div class="hover-area">
                         <a rel="nofollow" href="https://shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                      <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                      <img src="assets/images/products/p1.jpg" class="img-responsive" alt="">
                      </a>
                   </div>
                   <div class="product-content-wrapper">
                      <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                         <h3>Creams</h3>
                         <p style="max-height: none; margin-bottom: -.6rem; margin-top: -2rem;">Sweetened</p>
                         <p style="max-height: none;">Unsweetened</p>
                      </a>
                      <div class="hover-area">
                         <a rel="nofollow" href="https://shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
 <div class="section-product"  style="background-size: cover; background-image: url( assets/images/homepage-banners/6.png ); height: 556px;">
    <div class="product-wrapper">
       <div class="product-inner">
          <a href="https://shop.sanobread.com/home/20-amet-coconut-loaf.html" class="woocommerce-LoopProduct-link">
             <h3>SANO AMET COCONUT LOAF</h3>
             <div itemprop="description">
                <p>Sano Amet Coconut Loaf comes with an adventurous, tropical coconutty feel made from organically grown Orange Fleshed Sweet Potato (OFSP).</p>
             </div>
             {{-- <div  class="yith_wapo_groups_container">
                <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                   <h3><span>Pick Size</span></h3>
                   <div class="ywapo_input_container ywapo_input_container_radio">

                      <span class="ywapo_label_tag_position_after">
                      <span class="ywapo_option_label ywapo_label_position_after">22  cm</span>
                  </span>
                      <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>19.90</span></span>
                   </div>
                   <div class="ywapo_input_container ywapo_input_container_radio">

                      <span class="ywapo_label_tag_position_after">
                      <span class="ywapo_option_label ywapo_label_position_after">29  cm</span>
                  </span>
                      <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span></span>
                   </div>
                </div>
             </div> --}}
          </a>
          <a rel="nofollow" href="https://shop.sanobread.com/home/20-amet-coconut-loaf.html" data-quantity="1" data-product_id="82" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
       </div>
    </div>
 </div>
 <div class="features-list" >
    <div class="row">
       <div class="feature col-xs-12 col-sm-3">
          <div class="feature-icon"><i class="po po-best-quality"></i></div>
          <div class="feature-label">
             <h4>OUR MISSION</h4>
             <p>To bring delicious and nutritious bread to health-conscious people who love good food, and give people the platform for wealth creation.</p>
          </div>
       </div>
       <div class="feature col-xs-12 col-sm-3">
          <div class="feature-icon"><i class="po po-ready-delivery"></i></div>
          <div class="feature-label">
             <h4>BEST QUALITY</h4>
             <p>Baked with organic ingredients in the most hygienic environment.</p>
          </div>
       </div>
       <div class="feature col-xs-12 col-sm-3">
          <div class="feature-icon"><i class="po po-on-time"></i></div>
          <div class="feature-label">
             <h4>ON-TIME</h4>
             <p>Timely sale and delivery of all your orders is assured.</p>
          </div>
       </div>
       <div class="feature col-xs-12 col-sm-3">
          <div class="feature-icon"><i class="po po-master-chef"></i></div>
          <div class="feature-label">
             <h4>MASTER BAKERS</h4>
             <p>Our creative bakers are determined to give you the most amazing WOW mixes!</p>
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

@endsection