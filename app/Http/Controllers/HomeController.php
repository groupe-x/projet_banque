<?php

namespace App\Http\Controllers;

use App\Mail\sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->check()) return view('home');
        return view('homesite.index');
    }
    public function home()
    {
        return view('pages.accueil');
    }
    public function compte()
    {
        //   Mail::to("virtus225one@gmail.com")->send(new sendmail("mail.bienvenue",2));

        return view('pages.compte');
    }
    public function virement()
    {
        return view('pages.virement');
    }

    public function add_virement(Request $request)
    {
        $cpt_origin = $request->origin;
        $cpt_desti = $request->desti;
        $montant = $request->montant;
        $date=now();
        \DB::table('virements')->insert(["id_client"=>auth()->user()->id,"numcompte_origin"=>$cpt_origin,"numcompte_destin"=>$cpt_desti,"montant"=>$montant,"date_virement"=>$date]);
        return redirect()->route('home');
    }

}
