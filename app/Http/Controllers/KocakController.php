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
    public function add (Request $request)
    {
        $data = $request->except('_token');
        Contact::create($data);
        return view('user.contact');
    }
    public function hapus($id)
    {
        $kontak = Contact::find($id);
        $kontak->delete();
        return redirect()->route('admin.contact');
    }
}