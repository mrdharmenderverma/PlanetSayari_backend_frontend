<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelpContactRequest;
use App\Models\Usercontact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{   

    // Request Deal function
    public function requestDeal(){
        return view('/request-deal');
    }
    public function requestDealStore(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required',
            'skypid'=> 'required',
            'address'=> 'required',
            'country'=> 'required',
            'investment'=> 'required',
        ]);

        // dd($request->all());
        return back()->with('Success', 'Form Submitted Successfully');
    }

    // Help Contact form function 
    public function helpContact(){
        return view('/help-contact');
    }
    public function helpContactStore(HelpContactRequest $request){

        $userContact = new Usercontact();
        $userContact->full_name = $request->name;
        $userContact->email = $request->email;
        $userContact->number = $request->phone;
        $userContact->message = $request->Contact_Message;        
 
         // Save the new user to the database
        $userContact->save();
        
        //transfer this validation to helpcontactrequest
        // $request->validate([
        //     'name'=> 'required',
        //     'email'=> 'required|email',
        //     'phone'=> 'required',
        //     'Contact_Message'=> 'required|min:305'
        // ]);
        //for debug
        // dd($request->all());

        //for redirection
        return back()->with('Success', 'Form Submitted Successfully');
    }
}