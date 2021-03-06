<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('home');
    }

    public function sendEmail()
    {
        $data = ['message' => 'This is a test!'];
        $to = auth()->user()->email;
        Mail::to($to)->send(new TestEmail($data));
        $result = 'Email sent';
        return view('home', ['result' => $result]);
    }

    public function viewEmail()
    {
        $address = 'liteninkiran@yahoo.co.uk';
        $subject = 'Test Email';
        $name = 'Kiran Anand';

        return view('emails.test-view')->with([ 'test_message' => 'This is a test!' ]);
    }
}
