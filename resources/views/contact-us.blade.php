@extends('layouts.frontend')

@section('header')
@includeIf('layouts.header')
@endsection

@section('body')
<body class="page-template-template-contactpage">
   <div id="page" class="hfeed site">
@endsection

@section('main_content')
            <div class="contact-map" >
               <iframe allowfullscreen height="450" src="https://maps.google.com/maps?q=20%2C%20Oba%20Ogunusi%20Road%2C%20Akiode%20Bus%20stop%2C%20Ojudu%20Berger%2C%20Lagos%2C%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
            <header class="contact-header">
               <h1 class="entry-title">Contact Us</h1>
               <p class="description">We are a second-generation family business established in 1972</p>
               @includeIf('layouts.error_template')
            </header>
                     <div class="contact-form-with-address">
                        <div class="row">
                           <div class="col-md-9 col-sm-9 col-xs-12">
                              <div class="contact-form">
                                 <h2>Leave us a Message</h2>
                                 <p>Aenean massa diam, viverra vitae luctus sed, gravida eget est. Etiam nec ipsum porttitor, consequat libero eu, dignissim eros. Nulla auctor lacinia enim id mollis.</p>
                                 <div role="form" class="wpcf7" id="wpcf7-f425-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form   class="wpcf7-form" method="POST" action="/contact-us">
                                       {{ csrf_field() }}
                                       <div style="display: none;">
                                          <input type="hidden" name="_wpcf7" value="425" />
                                          <input type="hidden" name="_wpcf7_version" value="4.5.1" />
                                          <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                          <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f425-o1" />
                                          <input type="hidden" name="_wpnonce" value="e6363d91dd" />
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-xs-12 col-md-6">
                                             <label>Full name*</label> <br/>
                                             <span class="wpcf7-form-control-wrap first-name">
                                             <input type="text" name="fullname" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" aria-required="true" aria-invalid="false" />
                                             </span>
                                          </div>
                                          <div class="col-xs-12 col-md-6">
                                             <label class="email-view">Email*</label><br/>
                                             <span class="wpcf7-form-control-wrap email">
                                             <input type="email" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" aria-required="true" aria-invalid="false" />
                                             </span>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                        <div class="col-xs-12 col-md-6">
                                            <label>Phone Number*</label> <br/>
                                            <span class="wpcf7-form-control-wrap phone-number">
                                            <input type="text" name="phone" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" aria-required="true" aria-invalid="false" />
                                            </span>
                                         </div>
                                         <div class="col-xs-12 col-md-6">
                                            <label class="email-view">Subject*</label> <br/>
                                            <span class="wpcf7-form-control-wrap subject">
                                            <input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" aria-required="true" aria-invalid="false" />
                                            </span>
                                         </div>
                                          {{-- <label>Subject</label><br />
                                          <span class="wpcf7-form-control-wrap subject">
                                          <input type="text" name="subject"  size="40" class="wpcf7-form-control wpcf7-text input-text" aria-invalid="false" />
                                          </span> --}}
                                       </div>
                                       <div class="form-group">
                                          <label>Your Message</label><br />
                                          <span class="wpcf7-form-control-wrap your-message">
                                          <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                          </span>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-xs-12 col-md-6">
                                             {!! NoCaptcha::renderJs() !!}
                                             {!! NoCaptcha::display() !!}
                                           </div>
                                           <div class="col-xs-12 col-md-6">
                                             <div class="form-group clearfix button-adjust">
                                                <p><input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" /></p>
                                             </div>
                                           </div>
                                         </div>
                                       
                                       
                                       <div class="wpcf7-response-output wpcf7-display-none">
                                       </div>
                                    </form>
                                 </div>

                              </div>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="store-info">
                                 <h2>Our Address</h2>
                                 <p>17 Princess Road London, Greater London NW1 8JR, UK<br>Support (+800) 856 800 604<br>E-mail: info@pizzaro.com</p>
                                 <div class="address">
                                    <h3>Opening Hours</h3>
                                    <div class="address-info">
                                       <ul>
                                          <li class="clearfix"><span class="day">Monday</span><span class="pull-right flip hours">12-6 PM</span></li>
                                          <li class="clearfix"><span class="day">Tuesday</span><span class="pull-right flip hours">12-6 PM</span></li>
                                          <li class="clearfix"><span class="day">Wednesday</span><span class="pull-right flip hours">12-6 PM</span></li>
                                          <li class="clearfix"><span class="day">Thursday</span><span class="pull-right flip hours">12-6 PM</span></li>
                                          <li class="clearfix"><span class="day">Friday</span><span class="pull-right flip hours">12-6 PM</span></li>
                                          <li class="clearfix"><span class="day">Saturday</span><span class="pull-right flip hours">12-6 PM</span></li>
                                          <li class="clearfix"><span class="day">Sunday</span><span class="pull-right flip hours">Closed</span></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="address">
                                    <h3>Careers.</h3>
                                    <div class="address-info">
                                       <p class="inner-right-md">If you are interested in employment opportunities at Pizzaro, please email us: <a href="mailto:contact@yourstore.com">contact@yourstore.com</a></p>
                                    </div>
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
@endsection