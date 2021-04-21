<?php

namespace App\Http\Controllers;

use App\Mail\sendmail;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(\Auth::user()->nom);

        if(auth()->check()){
            return redirect()->route('home');
            }else{
                return view('auth.login');
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function login(Request $request)
    {
         $email = $request->name;
         $pass = $request->password;
        // validate the info, create rules for the inputs
$rules = array(
    'email'    => 'required|email', // make sure the email is an actual email
    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
);


$userdata = array(
            'email'     => $request->email,
            'password'  => $request->password
        );
    // attempt to do the login
    // dd(\Auth::attempt($userdata));
    // auth()->login($user);
    if (\Auth::attempt($userdata)) {

        // dd(\Auth::user()->nom);
        // echo 'SUCCESS!';
        return redirect()->route('home');


    } else {


        return redirect()->route('login');

    }

    }

    public function logout(Request $request) {
        \Auth::logout();
        return redirect('/login');
      }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $client=new Client;
        //dd($request);
      $client->nom=$request->nom;
      $client->prenoms=$request->prenoms;
      $client->email=$request->email;
      $client->num_piece=$request->num_piece;
      $client->civilite=$request->civilite;
      $client->dateNaissance=$request->date_naissance;
      $client->numero=$request->numero;
      $client->save();
    //   dd();
      \DB::table('comptes')->insert(["numeroCompte"=>sprintf("%06d", mt_rand(1, 999999999999)),"id_client"=>$client->id,"solde"=>"50000","id_typecompte"=>$request->type_compte]);
      \DB::table('adresses')->insert(["detail"=>$request->adresse,"id_client"=>$client->id]);
      Mail::to("virtus225one@gmail.com")->send(new sendmail("mail.bienvenue",$client->id));

      return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(){

        return view('auth.register');
    }
}
