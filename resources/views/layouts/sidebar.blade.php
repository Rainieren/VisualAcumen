<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Visual Acumen</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
</head>
<body>

<div class="navigation">

    <nav id="dashboard-sidebar" class="dashboard-sidebar">
        <div class="dashboard-sidebar-brand">
            <h5><a href="../../index.html" class="text-white">Logo bedrijf</a></h5>
        </div>

        <div class="dashboard-main">
            <ul class="dashboard-sub-content list-unstyled">
                <a href="{{ route('home') }}" class="dashboard-sidebar-link">
                    <li class="dashboard-sidebar-listitem {{ request()->is('home') ? 'active' : '' }}"><i class="fal fa-window-maximize"></i>Dashboard</li>
                </a>
                <a href="{{ route('projects') }}" class="dashboard-sidebar-link">
                    <li class="dashboard-sidebar-listitem {{ request()->is('projects') ? 'active' : '' }}"><i class="fal fa-folder"></i>Projects</li>
                </a>
                <a href="#" class="dashboard-sidebar-link slideout slideout-item" data-slideout-item="clients">
                    <li class="dashboard-sidebar-listitem"><i class="fal fa-user-tie"></i>Clients</li>
                </a>

                <a href="#" class="dashboard-sidebar-link slideout slideout-item" data-slideout-item="invoices">
                    <li class="dashboard-sidebar-listitem"><i class="fal fa-file-invoice"></i>Invoices</li>
                </a>

                <a href="employees.html" class="dashboard-sidebar-link">
                    <li class="dashboard-sidebar-listitem"><i class="fal fa-user-friends"></i>Employees</li>
                </a>
                @if(Auth::user()->isCompanyOwner())
                    <a href="your_company.html" class="dashboard-sidebar-link">
                        <li class="dashboard-sidebar-listitem"><i class="fal fa-building"></i>My company</li>
                    </a>
                @endif
            </ul>
        </div>


        <div class="dashboard-clients" style="display: none; position: absolute; top: 100px;">
            <ul class="dashboard-sub-content list-unstyled">
                <a href="#" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem slidein" data-slidein-item="clients"><i class="fas fa-arrow-circle-left"></i> Terug naar hoofdmenu </li>
                </a>
            </ul>
            <div class="devider"></div>
            <ul class="dashboard-sub-content list-unstyled">
                <div class="sidebar-sub-heading mt-3">
                    <h6 class="text-white">All clients</h6>
                </div>
                <a href="clients.html" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem">See all clients </li>
                </a>

                <div class="sidebar-sub-heading mt-4">
                    <h6 class="text-white">Clients</h6>
                </div>

                <a href="#" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem"> Siemens </li>
                </a>
                <a href="#" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem"> Philips </li>
                </a>
                <a href="#" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem"> Samsung </li>
                </a>
            </ul>
        </div>

        <div class="dashboard-invoices" style="display: none; position: absolute; top: 100px;">
            <ul class="dashboard-sub-content list-unstyled">
                <a href="#" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem slidein" data-slidein-item="invoices"><i class="fas fa-arrow-circle-left"></i> Terug naar hoofdmenu </li>
                </a>
            </ul>
            <div class="devider"></div>
            <ul class="dashboard-sub-content list-unstyled">
                <div class="sidebar-sub-heading mt-3">
                    <h6 class="text-white">All invoices</h6>
                </div>
                <a href="invoices.html" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem">See all invoices </li>
                </a>

                <div class="sidebar-sub-heading mt-5">
                    <h6 class="text-white">Recent Invoices</h6>
                </div>

                <a href="#" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem"> Invoice #000001 </li>
                </a>
                <a href="#" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem"> Invoice #000002 </li>
                </a>
                <a href="#" class="dashboard-sidebar-link text-white">
                    <li class="dashboard-sidebar-listitem"> Invoice #000003 </li>
                </a>
            </ul>
        </div>


        <button id="dashboard-sidebar-toggle" class="btn btn-light btn-sm shadow dashboard-sidebar-toggle"><i class="fal fa-arrow-left"></i></button>
    </nav>


    <nav class="dashboard-sub-sidebar">
        <div class="dashboard-sub-sidebar-container">
            <div class="dashboard-sub-top-content text-center text-white">
                <div class="dashboard-sub-top-logo">
                    LOGO
                </div>

                <div class="sidebar-icon-box slideout mt-4" data-slideout-block="search">
                    <i id="dashboard-sub-search" class="fa fa-search dashboard-sub-search"></i>
                </div>

            </div>
            <div class="dashboard-sub-user-content text-center">

                <div class="sidebar-icon-box slideout mb-3" data-slideout-block="notification">
                    <div class="notification-dot"></div>
                    <i  id="dashboard-sub-notification" class="fa fa-bell dashboard-sub-notification"></i>
                </div>

                <div class="sidebar-icon-box mb-3">
                    <i  id="dashboard-sub-help" class="fa fa-question-circle dashboard-sub-help"></i>
                </div>

                <div class="btn-group dropright">
                    <img src="https://stockphoto.com/assets/landingpage/images/Depositphotos_149433254_m-2015.jpg" class="dashboard-sub-sidebar-user-image dropdown-toggle" alt="" width="40" height="40" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <div class="list-title">Rainier laan</div>
                            <li class="list-item"><a href="">Profiel</a></li>
                            <li class="list-item"><a href="">Account instellingen</a></li>
                            <li class="list-item"><a href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Uitloggen
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                            <div class="list-title">Admin options</div>
                            <li class="list-item"><a href="">Preferences</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="block-overlay"></div>

<div class="search-block slidein-block slidein-block-search slideout-block-search slideout-block">

    <div class="search-header">
        <div class="close-search-block slidein mr-4" data-slidein-block="search">
            <i class="fal fa-times close"></i>
        </div>
        <div class="search-form">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </div>
    <div class="slideout-block-content mt-5">
        <h6>Recent search history</h6>
        <ul class="list-unstyled search-history-list">
            <li style="height: 30px;display: flex;align-items: center; padding: 20px"><a href=""><i class="far fa-clock mr-3"></i> Bananen</a></li>
            <li style="height: 30px;display: flex;align-items: center; padding: 20px;"><a href=""><i class="far fa-clock mr-3"></i> Bananen</a></li>
            <li style="height: 30px;display: flex;align-items: center; padding: 20px"><a href=""><i class="far fa-clock mr-3"></i> Bananen</a></li>
        </ul>
    </div>
</div>

<div class="notification-block slideout-block slidein-block slideout-block-notification slidein-block-notification">
    <div class="notification-header">
        <div class="close-notification-block slidein mr-4" data-slidein-block="notification">
            <i class="fal fa-times close"></i>
        </div>
        <h3 class="m-0">Notifications</h3>
    </div>
    <div class="slideout-block-content mt-5">
        <h6>Recent notifications</h6>
    </div>
</div>

<div id="content-container" class="content-container">
    <div id="app">
        @yield('content')
    </div>
</div>


<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fontawesome.js') }}"></script>


</body>
</html>
