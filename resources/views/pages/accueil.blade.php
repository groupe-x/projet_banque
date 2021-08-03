@extends('layout.app')
@section('content')



            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon text-center">
                                                
                                                @php $cpt= DB::table('comptes')->where('id_client',auth()->user()->id)->first(); @endphp
                                                <h2 style="color:white">
                                                    <i class="zmdi zmdi-account-o"></i> &nbsp;&nbsp;&nbsp; {{auth()->user()->nom}}
                                                    {{-- compte {{DB::table('type_comptes')->where('id',$cpt->id_typecompte)->first()->libelle}}  --}}
                                                </h2>
<br>
                                            </div>
                                            <div class="text">x

                                                {{-- <span> compte(s) </span><br> --}}

                                              {{-- <a href=""><h3 style="color:white;">compte(s)</h3></a> --}}
                                            </div>
                                        </div>
                                        {{-- <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 offset-lg-4">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                {{-- <i class="zmdi zmdi-upload"></i> --}}
                                            </div>
                                            <div class="text">
                                                <h3>solde actuel</h3> 
                                                <h2>{{$cpt->solde}} f cfa</h2> <br>
                                            </div>
                                        </div>
                                        {{-- <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                           
                        </div> <br> <br>
                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Analyse</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>depot</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>retrait</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}
                        {{-- <div class="rw">
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
                        </div> --}}
                        <div class="rw">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Historique des transactions</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>type d'operation</th>
                                                <th >montant</th>
                                                <th>ancien solde</th>
                                                <th class="text-right">nouveau solde</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $openrations=DB::table('operations')->where('id_client',auth()->user()->id)->get();
                                            @endphp
                                            @foreach ($openrations as $v )
                                            <tr>
                                                <td>{{$v->date}}</td>
                                                <td>{{DB::table('type_operations')->where('id',$v->id_type_op)->first()->libelle}}</td>
                                                <td>{{$v->montant}}</td>
                                                <td>{{$v->solde_initial}}</td>
                                                <td class="text-right">{{$v->new_solde}}</td>

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
