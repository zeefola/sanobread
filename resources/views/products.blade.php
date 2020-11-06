@extends('layouts.frontend')

@section('body')
 <body class="full-width grid-view columns-3 archive woocommerce-page">
   <div id="page" class="hfeed site">
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Products'])
@endsection

@section('main_content')
<div class="pizzaro-sorting">
    <div class="food-type-filter">
       <div class="clear-food-type-filter chosen"><a href="#">Show All</a>
       </div>
       <div class="widget woocommerce widget_layered_nav">
          <ul>
             <li class="wc-layered-nav-term "><a href="https://shop.sanobread.com">Loaves</a> <span class="food-type-icon"><i class="fa fa-cutlery"></i></span></li>
             <li class="wc-layered-nav-term "><a href="https://shop.sanobread.com">Bread Rolls</a> <span class="food-type-icon"><i class="fa fa-fire"></i></span></li>
             <li class="wc-layered-nav-term "><a href="https://shop.sanobread.com">Breakfast Box</a> <span class="food-type-icon"><i class="po po-veggie-icon"></i></span></li>
          </ul>
       </div>
       {{-- <div class="create-your-own"><a href="single-product-v3.html">Create your own</a></div> --}}
    </div>
 </div>
 {{-- <div id="primary" class="content-area">
    <main id="main" class="site-main" > --}}
       <div class="columns-3">
          <ul class="products">
             <li class="product first">
                <div class="product-outer">
                   <div class="product-inner">
                      <div class="product-image-wrapper">
                         <a href="https://shop.sanobread.com/home/5-la-familia-loaf.html" class="woocommerce-LoopProduct-link">
                         <img src="assets/images/products/p1.jpg" class="img-responsive" alt="">
                         </a>
                      </div>
                      <div class="product-content-wrapper">
                         <a href="https://shop.sanobread.com/home/5-la-familia-loaf.html" class="woocommerce-LoopProduct-link">
                            <h3>La Familia Loaf</h3>
                            <div itemprop="description">
                               <p style="max-height: none;">A Loaf -  Health, Creativity, and Family!</p>
                            </div>
                            <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">#</span>350.00</span></span>
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
             <li class="product ">
                <div class="product-outer">
                   <div class="product-inner">
                      <div class="product-image-wrapper">
                         <a href="https://shop.sanobread.com/home/6-classic-loaf.html" class="woocommerce-LoopProduct-link">
                         <img src="assets/images/products/p2.jpg" class="img-responsive" alt="">
                         </a>
                      </div>
                      <div class="product-content-wrapper">
                         <a href="https://shop.sanobread.com/home/6-classic-loaf.html" class="woocommerce-LoopProduct-link">
                            <h3>Classic Loaf</h3>
                            <div itemprop="description">
                               <p style="max-height: none;">All the nutrients you need in one vintage loaf!</p>
                            </div>
                            <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">#</span>350.00</span></span>
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
                            <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">#</span>400.00</span></span>
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
                            <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">#</span>350.00</span></span>
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
                            <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">#</span>350.00</span></span>
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
                         <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                         <img src="assets/images/products/p6.jpg" class="img-responsive" alt="">
                         </a>
                      </div>
                      <div class="product-content-wrapper">
                         <a href="https://shop.sanobread.com" class="woocommerce-LoopProduct-link">
                            <h3>Breakfast Box</h3>
                            <div itemprop="description">
                               <p style="max-height: none;">Your favorite box of health! Build your menu here!</p>
                            </div>
                            <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">#</span>1500.00</span></span>
                         </a>
                         <div class="hover-area">
                            <a rel="nofollow" href="https://shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- /.product-outer -->
             </li>
             {{-- <!-- /.products -->
             <li class="product first">
                <div class="product-outer">
                   <div class="product-inner">
                      <div class="product-image-wrapper">
                         <a href="shop.sanobread.com" class="woocommerce-LoopProduct-link">
                         <img src="assets/images/products/p7.jpg" class="img-responsive" alt="">
                         </a>
                      </div>
                      <div class="product-content-wrapper">
                         <a href="shop.sanobread.com" class="woocommerce-LoopProduct-link">
                            <h3>Pepperoni Calzone</h3>
                            <div itemprop="description">
                               <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                            </div>
                            <div  class="yith_wapo_groups_container">
                               <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                  <h3><span>Pick Size</span></h3>
                                  <div class="ywapo_input_container ywapo_input_container_radio">
                                     
                                     <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                     <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                  </div>
                                  <div class="ywapo_input_container ywapo_input_container_radio">
                                     
                                     <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                     <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                  </div>
                               </div>
                            </div>
                         </a>
                         <div class="hover-area">
                            <a rel="nofollow" href="shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                         <a href="single-product" class="woocommerce-LoopProduct-link">
                         <img src="assets/images/products/p8.jpg" class="img-responsive" alt="">
                         </a>
                      </div>
                      <div class="product-content-wrapper">
                         <a href="shop.sanobread.com" class="woocommerce-LoopProduct-link">
                            <h3>Pepperoni Pizza</h3>
                            <div itemprop="description">
                               <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                            </div>
                            <div  class="yith_wapo_groups_container">
                               <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                  <h3><span>Pick Size</span></h3>
                                  <div class="ywapo_input_container ywapo_input_container_radio">
                                     
                                     <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                     <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                  </div>
                                  <div class="ywapo_input_container ywapo_input_container_radio">
                                     
                                     <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                     <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                  </div>
                               </div>
                            </div>
                         </a>
                         <div class="hover-area">
                            <a rel="nofollow" href="shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                         <a href="shop.sanobread.com" class="woocommerce-LoopProduct-link">
                         <img src="assets/images/products/p9.jpg" class="img-responsive" alt="">
                         </a>
                      </div>
                      <div class="product-content-wrapper">
                         <a href="shop.sanobread.com" class="woocommerce-LoopProduct-link">
                            <h3>Trio Cheese</h3>
                            <div itemprop="description">
                               <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                            </div>
                            <div  class="yith_wapo_groups_container">
                               <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                  <h3><span>Pick Size</span></h3>
                                  <div class="ywapo_input_container ywapo_input_container_radio">
                                     
                                     <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                     <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                  </div>
                                  <div class="ywapo_input_container ywapo_input_container_radio">
                                     
                                     <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                     <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                  </div>
                               </div>
                            </div>
                         </a>
                         <div class="hover-area">
                            <a rel="nofollow" href="shop.sanobread.com" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- /.product-outer -->
             </li>
             <!-- /.products --> --}}
          </ul>
       </div>
       <nav class="woocommerce-pagination">
          <ul class="page-numbers">
             <li><span class="page-numbers current">1</span></li>
             <li><a class="page-numbers" href="#">2</a></li>
             <li><a class="page-numbers" href="#">3</a></li>
             <li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;→</a></li>
          </ul>
       </nav>
    </main>
    <!-- #main -->
 </div>
 <!-- #primary -->
</div>
<!-- .col-full -->
</div>
@endsection