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
        $cpt=\DB::table('comptes')->where("numeroCompte",$cpt_origin)->first();
        $solde_initial = $cpt->solde;
        $new_solde = $solde_initial-$montant;
        \DB::table('operations')->insert(["id_client"=>auth()->user()->id,"montant"=>$montant,"solde_initial"=>$solde_initial,"new_solde"=>$new_solde,"date"=>$date,"id_type_op"=>2]);
        \DB::table('comptes')->where("numeroCompte",$cpt_origin)->update(["solde"=>$new_solde]);
        return redirect()->back();
    }

}
