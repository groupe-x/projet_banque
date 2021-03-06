 <!-- HEADER DESKTOP-->
 <header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button> -->
                </form>
                <div class="header-button">
                    <div class="noti-wrap">

                        {{-- <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-email"></i>
                            <span class="quantity">1</span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have 3 New Emails</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, 3 min ago</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, Yesterday</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, April 12,,2018</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">See all emails</a>
                                </div>
                            </div>
                        </div> --}}

                        @php
                            $notif=DB::table('notif')->where('id_client',auth()->user()->id)->orderBy('created_at','desc')->take(5)->get();
                        @endphp
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">{{count($notif)}}</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>Vous avez {{count($notif)}} Notification(s)</p>
                                </div>
                                @foreach ($notif as $i=>$n )
                                <div class="notifi__item">
                                    <div class="bg-c{{$i+1}} img-cir img-40">
                                        <i class="{{$n->icon}}"></i>
                                    </div>

                                   <a href="{{route($n->route)}}">
                                    <div class="content">
                                        <p>{{$n->msg}}</p>
                                        <span class="date">{{$n->created_at}}</span>
                                    </div>
                                   </a>
                                </div>
                                @endforeach
                                {{-- <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div> --}}
                                {{-- <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="profil/user.png" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="profil/user.png" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{auth()->user()->nom}} {{auth()->user()->prenom}}</a>
                                        </h5>
                                        <span class="email">{{auth()->user()->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{route('pages.compte')}}">
                                            <i class="zmdi zmdi-account"></i>mon compte</a>
                                    </div>
                                    {{-- <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div> --}}

                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{route('logout')}}">
                                        <i class="zmdi zmdi-power"></i>Deconexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->
