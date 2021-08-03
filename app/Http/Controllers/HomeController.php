<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use App\Models\PersonalData;
use App\Models\Questions;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function home(Request $request)
    {
        return view('home');
    }

    public function register(Request $request)
    {
        $provinsi=Provinsi::orderBy('nama','ASC')->get();

        $data = array(  
            'provinsi' => $provinsi
		);

        return view('register')->with($data);
    }

    public function post(Request $request)
    {
        // Personal Data
        $full_name=$request->input('full_name');
        $mobile_phone=$request->input('mobile_phone');
        $designation=$request->input('designation');
        $company_name=$request->input('company_name');
        $company_address=$request->input('company_address');
        $company_phone=$request->input('company_phone');
        $email=$request->input('email');
        $province_origin=$request->input('province_origin');
        $industry=$request->input('industry');
        $industry_other=$request->input('industry_other');
        $industry_type=$request->input('industry_type');
        $industry_type_other=$request->input('industry_type_other');

        $cekpeserta=PersonalData::where('email',$email)->first();

        if($cekpeserta != null)
        {
            return redirect('/')->with('success', 'Email has been registered! Please use other email and try again. Thank you.');
        }

        $pd=array(
            'full_name' => $full_name,
            'mobile_phone' => $mobile_phone,
            'designation' => $designation,
            'company_name' => $company_name,
            'company_address' => $company_address,
            'company_phone' => $company_phone,
            'email' => $email,
            'province_origin' => $province_origin,
            'industry' => $industry,
            'industry_other' => $industry_other,
            'industry_type' => $industry_type,
            'industry_type_other' => $industry_type_other
        );

        $id = PersonalData::create($pd)->id;
        // End Personal Data

        
        // Other Questions
        $question1=$request->input('question1');
        $question2=$request->input('question2');
        $question3=$request->input('question3');
        $question4=json_encode($request->input('question4'));
        $question5=$request->input('question5');
        $question6=$request->input('question6');
        $question6_other=$request->input('question6_other');
        $question7=json_encode($request->input('question7'));
        $question8=json_encode($request->input('question8'));
        $question9=$request->input('question9');

        if($question9 == "satu")
        {
            $vt="Everyday Tour Company : Halal-friendly Streets and Eats Live Virtual Tour";
        }
        else if($question9 == "dua")
        {
            $vt="Tribe Tour : Peranakan Culture";
        }
        else if($question9 == "tiga")
        {
            $vt="Monster Day Tours : Urban Development in Singapore River";
        }
        else
        {
            $vt="Work 'n' Stroll: Lorem ipsum dolor sit amet, consectetur adipiscing elit";   
        }

        $que=array(
            'personal_data_id' => $id,
            'question1' => $question1,
            'question2' => $question2,
            'question3' => $question3,
            'question4' => $question4,
            'question5' => $question5,
            'question6' => $question6,
            'question6_other' => $question6_other,
            'question7' => $question7,
            'question8' => $question8,
            'question9' => $vt
        );

        Questions::create($que);
        // End Questions

        // sendMail
        $body=view('mail.mail', compact('full_name', 'vt'))->render();
        $this->sendMail($email, $body);
        // End sendMail

		return redirect('/')->with('success', 'Registration Success! We have sent a confirmation email. Thank you.');
    }

    public function schedule(Request $request)
    {
        return view('schedule');
    }

    public function competition(Request $request)
    {
        return view('competition');
    }

    public function sendmail($email, $body)
    {
        $curl = curl_init();

        $postFields=array(
            'emailTo'=> $email,
            'body' => $body,
            'subject' => "Successful Registration"
        );

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://www.stbvirtualtour.com/api/Email/SendEmail',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($postFields),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

    }

    public function tour(Request $request)
    {
        return view('tour');
    }
}
