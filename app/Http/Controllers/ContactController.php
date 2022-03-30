<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
   
public function AdminContact(){
$contacts = Contact::all();
return view('admin.contact.index',compact('contacts'));


}
public function AdminAddContact(){

    return view('admin.contact.create');
}


public function AdminStoreContact(Request $request){

    Contact::insert([

        'address'=> $request->address,
        'email'=> $request->email,
        'phone'=> $request->phone,
        
        'created_at'=> Carbon::now()
        ]);
return Redirect()->route('admin.contact')->with('success','Contact Inserted  Successfully');

}
public function Contact(){
$contacts = DB::table('contacts')->first();
    return view('pages.contact',compact('contacts'));
}





public function ContactForm(Request $request){

    ContactForm::insert([

        'name'=> $request->name,
        'email'=> $request->email,
        'subject'=> $request->subject,
        'message'=> $request->message,
        
        'created_at'=> Carbon::now()
        ]);
return Redirect()->route('contact')->with('success','Your message send successfully  Successfully');

}
public function AdminMessage(){
$messages = ContactForm::all();
return view('admin.contact.message',compact('messages'));

}
public function Logout(){


return view('auth.login');

}

}
