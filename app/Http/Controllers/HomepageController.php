<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
Use Mail;

class HomepageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about_us(){
        return view('about-us');
    }

    public function contactUs(){
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
        return view('products');
    }

    public function single_product() {
        return view('single-product');
    }

    public function news_letter() {
        return view('newsletter');
    }

    public function faq() {
        return view('faq');
    }

    public function terms_of_use() {
        return view('terms-of-use');
    }

    public function la_familia(){
       return view('la-familia');
    }
}
