<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Carbon\Carbon;

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

        Survey::insert([
            'zipcode' => $request->zipcode,
            'electricitybill' => $request->electricityBill,
            'email' => $request->email,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'ownhome' => 1,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('survey.successfull');

    }
}
