<?php

namespace App\Http\Controllers;

use App\Mail\sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('homesite.index');
    }
    public function home()
    {
        return view('pages.accueil');
    }
    public function virement()
    {
        return view('pages.virement');
    }
    public function compte()
    {
        // Mail::to("virtus225one@gmail.com")->send(new sendmail("mail.bienvenue"));
        return view('pages.compte');
    }
}
