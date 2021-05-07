<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() 
    {
        $newsData = ContactUs::get();
        
    }
}
