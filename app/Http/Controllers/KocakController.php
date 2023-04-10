<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class KocakController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact', ['contacts' => $contacts]);
    } 
}