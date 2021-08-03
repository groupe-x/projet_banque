<?php

namespace App\Http\Controllers;

use App\Mail\sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->check()) return redirect()->route('home');
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

    public function post_edit_profil(Request $request){
        $pass = $request->password?bcrypt($request->password):null;
        $nom = $request->nom;
        $prenoms = $request->prenoms;
        $email = $request->email;
        if($pass!=null){
            \DB::table('client')->where('id',auth()->user()->id)->update(["nom"=>$nom,"prenoms"=>$prenoms,"email"=>$email,"password"=>$pass]);
        }
        else{
            \DB::table('client')->where('id',auth()->user()->id)->update(["nom"=>$nom,"prenoms"=>$prenoms,"email"=>$email]);

        }
        return redirect()->route('pages.compte');
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

        $cpt_destinataire = \DB::table('comptes')->where("numeroCompte",$cpt_desti)->first();
        if($cpt_destinataire){
            $destinataire=\DB::table('client')->where("id",$cpt_destinataire->id_client)->first();
            $ns= $cpt_destinataire->solde+$montant;
            \DB::table('operations')->insert(["id_client"=>$destinataire->id,"montant"=>$montant,"solde_initial"=>$cpt_destinataire->solde,"new_solde"=>$ns,"date"=>$date,"id_type_op"=>1]);
            \DB::table('comptes')->where("numeroCompte",$cpt_desti)->update(["solde"=>$ns]);

        }
// dd($montant);
        \DB::table('operations')->insert(["id_client"=>auth()->user()->id,"montant"=>$montant,"solde_initial"=>$solde_initial,"new_solde"=>$new_solde,"date"=>$date,"id_type_op"=>2]);
        \DB::table('comptes')->where("numeroCompte",$cpt_origin)->update(["solde"=>$new_solde]);
        return redirect()->back();
    }

}
