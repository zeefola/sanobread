<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
Use Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class HomepageController extends Controller
{
    public function index(){

        SEOTools::setTitle('Vitamin In Every Bite');
        SEOTools::setDescription('To give you the healthy and nourishing taste that you deserve, Sano Breads have been baked to meet your healthy demands by being made from organically grown Orange Fleshed Sweet Potato (OFSP), a good source of Vitamin A. 
        ');

        return view('welcome');
    }

    public function about_us(){

        SEOTools::setTitle('About Us');
        SEOTools::setDescription('We are a team of committed and dedicated professional bakers with core values hinged on baking nutritious bread from the finest organic ingredients, to ensure you maintain good health.');
    
        return view('about-us');
    }

    public function contactUs(){

        SEOTools::setTitle('Contact Us');
        SEOTools::setDescription('At Sano Bread, we are committed to giving you the best experience. However, if you can’t seem to find the answer to any of your questions within our FAQs, please contact us on our customer service line 080XXXXXXXX and EMAIL');
    
        return view('contact-us');
    }

    public function contactUsConfirm(){
        /** Validate the input */
        $this->validate(request(), array(
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ));

        /** Create an instance of the model and store the input */
        $data = new Contact();

        $data->fullname = request()->fullname;
        $data->email = request()->email;
        $data->phone = request()->phone;
        $data->subject = request()->subject;
        $data->message = request()->message;

        $data->save();

        //save all request into data
        $data = array (
            'fullname' => request()->fullname,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'admin_email' => 'info@sanobread.com',
            'created_at' => $data->created_at,

        );

        //send mail to admin
        Mail::send('emails.contact_notification',$data, function($m) use($data){
            $m->to($data['admin_email'])->subject('Contact us Notification');
        });

        /**Return back with a session flash */
        session()->flash('success_report' , 'Contact Form submitted successfully!!');
        return back();
        
    }

    public function products() {

        SEOTools::setTitle('Products');
        SEOTools::setDescription('From a wide range of organic ingredients, these special organic breads have been carefully selected to give your taste buds sweet delight and health to your body.');

        return view('products');
    }

    // public function single_product() {

    //     SEOTools::setTitle('Product_name here');
    //     SEOTools::setDescription('This is my page description');

    //     return view('single-product');
    // }


    public function faq() {

        SEOTools::setTitle('Frequently Asked Questions');
        SEOTools::setDescription('We know you have questions. So, whether you want to know more about Sano bread variants, or how to make an order, or even become our distributor, we are here to answer all your questions.');

        $datas = \App\Repositories\Faq::getFaq();

        return view('faq', compact('datas'));
    }

    public function terms_of_use() {

        SEOTools::setTitle('Terms of Use');
        SEOTools::setDescription('Although, we love you and we look forward to always having you as a visitor here. However, we’re guided by some terms and conditions. Kindly go through our terms, as we are always here to satisfy your cravings.');

        return view('terms-of-use');
    }

    public function la_familia(){

        SEOTools::setTitle('La Familia Loaf');
        SEOTools::setDescription('Sano La Familia Loaf is a healthy cut-up loaf made from organically grown Orange Fleshed Sweet Potato (OFSP). This fresh-out-of-oven bread is made in Lagos and is rich in vitamins.
        ');
        
       return view('la-familia');
    }

    public function classic_loaf() {

        SEOTools::setTitle('Classic Loaf');
        SEOTools::setDescription('Sano Classic Loaf is a bold, appetizing loaf made from organically grown Orange Fleshed Sweet Potato (OFSP). This fresh-out-of-oven bread is made in Lagos and is rich in vitamins.');

        // return view('terms-of-use');
    }

    public function amet_coconut_loaf() {

        SEOTools::setTitle('Amet Coconut Loaf');
        SEOTools::setDescription('Sano Amet Coconut Loaf comes with an adventurous, tropical coconutty feel made from organically grown Orange Fleshed Sweet Potato (OFSP). This fresh-out-of-oven bread is made in Lagos and is rich in vitamins.');

        // return view('terms-of-use');
    }

    public function fresh_basil_slipper() {

        SEOTools::setTitle('Fresh Basil Slipper');
        SEOTools::setDescription('Sano Fresh Basil Slipper is a scenty, trendy and snacky amazing feel and is made from the nutritious Orange Fleshed Sweet Potato (OFSP). This fresh-out-of-oven bread is baked with love in Lagos and is rich in vitamins.');

        // return view('terms-of-use');
    }

    public function fresco_delight_loaf() {

        SEOTools::setTitle('Fresco Delight Loaf');
        SEOTools::setDescription('The Sano Fresco Delight Loaf is an amazing bread with a snacky feel, made from the nutritious Orange Fleshed Sweet Potato (OFSP). This fresh-out-of-oven bread is rich in vitamins and proudly baked with love in Lagos.');

        // return view('terms-of-use');
    }

    public function sano_juice() {

        SEOTools::setTitle('Sano Juice');
        SEOTools::setDescription('A trendy natural juice, filled with exciting moments of healthy and refreshing sips. SANO Lemongrass & Pineapple flavored Juice is an amazing blend of nature, made in Lagos, for your satisfaction.');

        // return view('terms-of-use');
    }

    public function breakfast_box() {

        SEOTools::setTitle('Breakfast In A Box');
        SEOTools::setDescription('SANO breakfast box of healthy goodies made from naturally grown and produced spices is all the organic nourishment you need. Made in Lagos, specially for you!');

        // return view('terms-of-use');
    }
}
