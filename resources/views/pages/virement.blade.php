@extends('layout.app')
@section('content')
<!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Virement

                            </h2>
                            {{-- @php
                            echo bcrypt('passe123')
                        @endphp  --}}


                        </div>
                    </div>
                </div> <br>

                <div class="row">
                    <div class="col-lg-6 offset-lg-0">
                        <div class="card">
                            {{-- <div class="card-header">transaction</div> --}}
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Effectuer un Virement</h3>
                                </div>
                                <hr>
                                <form action="{{route('add_virement')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="cc-number" class="control-label mb-1">numero de votre compte</label>
                                        @php
                                           $cpt= DB::table('comptes')->where('id_client',auth()->user()->id)->get()
                                        @endphp
                                        <select class="form-control" name="origin" id="">
                                            @foreach ($cpt as $item)

                                            <option value="{{$item->numeroCompte}}">{{$item->numeroCompte}}</option>
                                            @endforeach
                                        </select>
                                        {{-- <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                            data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                            autocomplete="cc-number"> --}}
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-number" class="control-label mb-1">numero du compte du destinataire</label>
                                        <input id="cc-number" name="desti" type="tel" required class="form-control cc-number identified visa" value="" data-val="true"
                                            data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                            autocomplete="cc-number">
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">montant du virement</label>
                                        <input id="cc-pament" name="montant" type="text" class="form-control" aria-required="true" aria-invalid="false" value="50000">
                                    </div>
                                    {{-- <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">mot de passe</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div> --}}

                                    {{-- <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1">code de securite</label>
                                            <div class="input-group">
                                                <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                    data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                            </div>
                                        </div>
                                    </div> --}}
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-dollar fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Envoyer</span>
                                            <span id="payment-button-sending" style="display:none;">en cour d'envoie</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Company</strong>
                                <small> Form</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">beneficiaire</label>
                                    <input type="text" id="company" placeholder="Enter your company name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Sur quel type de compte voulez vous transferez de l'argent?</label>
                                    <select name="" id=""  class="form-control">
                                        <option value="">courant </option>
                                        <option value="">eparne </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="street" class=" form-control-label">Street</label>
                                    <input type="text" id="street" placeholder="Enter street name" class="form-control">
                                </div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">City</label>
                                            <input type="text" id="city" placeholder="Enter your city" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="postal-code" class=" form-control-label">Postal Code</label>
                                            <input type="text" id="postal-code" placeholder="Postal Code" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class=" form-control-label">Country</label>
                                    <input type="text" id="country" placeholder="Country name" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <strong>Inline</strong> Form
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" class="form-inline">
                                    <div class="form-group">
                                        <label for="exampleInputName2" class="pr-1  form-control-label">Name</label>
                                        <input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2" class="px-1  form-control-label">Email</label>
                                        <input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Horizontal</strong> Form
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="hf-email" name="hf-email" placeholder="Enter Email..." class="form-control">
                                            <span class="help-block">Please enter your email</span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-password" class=" form-control-label">Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control">
                                            <span class="help-block">Please enter your password</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>

                    </div> --}}







                </div>
                <div class="rw">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Historique des transactions</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>num compte initial</th>
                                        <th>num compte destinataire</th>
                                        <th class="text-right">montant transaction</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $virements=DB::table('virements')->where('id_client',auth()->user()->id)->get();
                                    @endphp
                                    @foreach ($virements as $v )
                                    <tr>
                                        <td>{{$v->date_virement}}</td>
                                        <td>{{$v->numcompte_origin}}</td>
                                        <td>{{$v->numcompte_destin}}</td>
                                        <td class="text-right">{{$v->montant}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
