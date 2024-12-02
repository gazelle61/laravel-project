<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact', [
            'title' => 'Contact',
            'name' => 'Syifa Nur Kemala',
            'class' => '11 PPLG 2',
            'linkedin' => 'https://www.linkedin.com/in/syifa-nur-kemala-a462352a1',
            'repository' => 'https://github.com/gazelle61',
        ]);
    }
}
