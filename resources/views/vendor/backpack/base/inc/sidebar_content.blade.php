<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<style>
    .nav-item,.nav-icon{
        font-size:22px;
    }
</style>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li> <br>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('client') }}'><i class='nav-icon la la-user'></i> Clients </a></li><br>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('compte') }}'><i class='nav-icon la la-question'></i> Comptes </a></li><br>
{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-question'></i> Users</a></li> --}}
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('virement') }}'><i class='nav-icon la la-share'></i> Virements </a></li> <br>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('operation') }}'><i class='nav-icon la la-dollar'></i> Operations </a></li>
{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('type_compte') }}'><i class='nav-icon la la-question'></i> Type de comptes </a></li> --}}