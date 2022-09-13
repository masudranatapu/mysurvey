<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Carbon\Carbon;
use Mail;
use Session;
use Str;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function surveySuccessfull()
    {
        return view('surveysuccess');
    }

    public function survey(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'zipcode' => 'required',
            'electricityBill' => 'required',
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
        ]);
        $survey_user = new Survey();
        $survey_user->zipcode = $request->zipcode;
        $survey_user->electricitybill = $request->electricityBill;
        $survey_user->email = $request->email;
        $survey_user->firstname = $request->firstname;
        $survey_user->lastname = $request->lastname;
        $survey_user->phone = $request->phone;
        $survey_user->ownhome = 1;
        $survey_user->save();

        Session::put('survey_user_id',$survey_user->id);
        $email       = $request->email;
        $messageData = [
            'name'         => $request->firstname.' '.$request->lastname,
            'content'     => '
            We are excited to help you take the next steps towards powering your home with the sun! Going solar is a great way to give yourself and your family peace of mind when it comes to your home’s energy needs.
            
            At Sunrun, we believe that solar is the energy of the future, and provides a clean, safe alternative that is better for our planet. (And it’s not just us - our 500K+ happy customers would agree!)
            ',
            'subject'     => 'Thanks for your interest in going solar with Sunrun!',

        ];
        $name =env('APP_NAME');
        $from_email = env('MAIL_FROM_ADDRESS');
        $subject = 'Thanks for your interest in going solar with Sunrun!';
        Mail::send('contactDetails',$messageData, function($message) use ($name,$from_email,$email,$subject)
        {    
            $message->to($email)->subject($subject); 
            $message->from($from_email,$name);
        });

        return redirect()->route('survey.successfull');

    }
    public function send_file(Request $request){
        $survey = Survey::find(Session::get('survey_user_id'));
        $image = $request->file('image');
        
        // dd($image);
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/product/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            
            if($success)
            {
                $survey->image = $image_url;
            }
        }
        $survey->update();

        $messageData = [
            'name'         => $request->firstname.' '.$request->lastname,
            'image'     => $image_url,
            'subject'     => 'Thanks for your interest in going solar with Sunrun!',

        ];
        $name =env('APP_NAME');
        $from_email = $survey->email;
        $subject = 'Thanks for your interest in going solar with Sunrun!';
        Mail::send('file_send',$messageData, function($message) use ($name,$from_email,$subject)
        {    
            $message->to(env('MAIL_FROM_ADDRESS'))->subject($subject); 
            $message->from($from_email,$name);
        });
        return redirect()->back();
    }
}
