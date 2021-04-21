@extends('layout.app')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Mon compte

                        </h2>
                        {{-- @php
                        echo bcrypt('passe123')
                    @endphp  --}}


                    </div>
                </div>
            </div>
            <div class="row m-t-55">
                <div class="col-sm-12 col-lg-6">
                    <div style="background-color: black; width:60%;height:250px">
                        <img style="width:100%;height:100%" src="images/icon/avatar-02.jpg" alt="">
                    </div>
                    <br>
                    <button class="btn btn-outline-dark">choisir une image</button>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card-body card-block">
                        <form action="" method="post" class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Numero de compte</div>
                                    <input type="text" id="username3" value="{{auth()->user()->num_compte}}" name="num_cpte" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Nom</div>
                                    <input type="text" id="username3" value="{{auth()->user()->nom}}" name="nom" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Prenom</div>
                                    <input type="text" id="username3" value="{{auth()->user()->prenoms}}" name="prenoms" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Email</div>
                                    <input type="email" id="email3" value="{{auth()->user()->email}}" name="email" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Password</div>
                                    <input type="password" id="password3" name="password" placeholder="******" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-outline-dark btn-sm">modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
