<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use Redirect;
use Mail;
use Meta;

class ContactController extends Controller
{
    public function show() {
        Meta::set('title','Contact');
        
        return view('contact');
    }
    public function getContactUsForm(){


        //Get all the data and store it inside Store Variable
        $data = Input::all();

        //Validation rules
        $rules = array (
            'name' => 'required', 
            'email' => 'required|email',
            'message_content' => 'required'
        );

        //Validate data
        $validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
        if ($validator -> passes()){

           Mail::send('emails.contact', $data, function($message) use ($data)
            {
                //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields 
                $message->from($data['email'], $data['name']);
                //email 'To' field: cahnge this to emails that you want to be notified.                    
                $message->to('info@lyssakayra.com', 'Lyssa Kayra')->subject('New message from '.$data['name']);

            });
            // Redirect to page
            return Redirect::route('contact')
                            ->with('status', 'Your message has been sent. Thank you!');


            //return View::make('contact');  
         } else {
            //return contact form with errors
            return Redirect::route('contact')
                            ->withErrors($validator)
                            ->withInput();

         }
     }
} 

