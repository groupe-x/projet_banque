<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('home')}}">
            {{-- <img src="images/icon/logo.png" alt="Cool Admin" /> --}}
            <span style="color: black;font-size:25px;font-weight:bold">Pruni</span> <span style="color: grey;font-size:25px;font-weight:bold">Banque</span>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('home')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                </li>
                <!--li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li-->
                <li>
                    <a href="{{route('pages.compte')}}">
                        <i class="fas fa-table"></i>Mon compte</a>
                </li>
                <li>
                    <a href="{{route('pages.virement')}}">
                        <i class="far fa-check-square"></i>Virement</a>
                </li>
                
                <li>
                    <a href="{{route('logout')}}"
                    {{-- onclick="event.preventDefault(); document.getElementById('logout-form').submit();" --}}
                    >
                        <i class="far fa-logout"></i>Deconnexion</a>
                </li>
                <form id="logout-form" action="" method="POST" style="display: none;">
                    @csrf
                </form>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
