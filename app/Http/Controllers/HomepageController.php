<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
Use Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class HomepageController extends Controller
{
    public function index(){

        SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');

        return view('welcome');
    }

    public function about_us(){

        SEOTools::setTitle('About Us');
        SEOTools::setDescription('This is my page description');
    
        return view('about-us');
    }

    public function contactUs(){

        SEOTools::setTitle('Contact Us');
        SEOTools::setDescription('This is my page description');
    
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
        SEOTools::setDescription('This is my page description');

        return view('products');
    }

    public function single_product() {

        SEOTools::setTitle('Product_name here');
        SEOTools::setDescription('This is my page description');

        return view('single-product');
    }


    public function faq() {

        SEOTools::setTitle('Frequently Asked Questions');
        SEOTools::setDescription('This is my page description');

        return view('faq');
    }

    public function terms_of_use() {

        SEOTools::setTitle('Terms of Use');
        SEOTools::setDescription('This is my page description');

        return view('terms-of-use');
    }

    public function la_familia(){

        SEOTools::setTitle('product_name here');
        SEOTools::setDescription('This is my page description');
        
       return view('la-familia');
    }
}
