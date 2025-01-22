<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Admin SEWA MOBIL | Dashboard Admin SEWA MOBIL
  </title>
  <!-- Favicon -->
  <link href="/assets/icon/72x72.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/assets/content/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/assets/content/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="/assets/content/css/loading.css">
  <!-- CSS Files -->
  <link href="/assets/content/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="/home">
        <!-- <img src="/assets/splash/images/newtom.png" class="navbar-brand-img" alt="..."> -->
        APP SEWA MOBIL
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <i class="fa fa-user"></i>
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            @if(Auth::user()->role_id == 1)
            <a href="/home" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              Masuk Sebagai Superadmin
            </a>
            @endif
            <a href="{{ route('logout') }}" class="dropdown-item menusxx"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">    
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/home">
                <img src="/assets/splash/images/icons/favicon.ico">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>

        @php
        date_default_timezone_set('Asia/Jakarta');
        $m = date('m');
        $query_date = date('Y'.$m.'01');
        $awal = date('Y-m-01', strtotime($query_date));
        $akhir = date('Y-m-t', strtotime($query_date));

        @endphp

        <div class="row" id="body-row">
          <div class="col-12">
          <!-- Sidebar -->
          <div id="sidebar-container" class="sidebar-expanded "><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
              <!-- Bootstrap List Group -->
              <ul class="list-group">

                
                    <a href="/users" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-users  mr-3 text-red"></span>
                            <span class="menu-collapsed">Data Users</span>
                        </div>
                    </a>

                    <a href="/sewakendaraan" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-address-book  mr-3 text-red"></span>
                            <span class="menu-collapsed">Data Pelatihan Users</span>
                        </div>
                    </a> 

                    <a href="/datapelatihan" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-bars  mr-3 text-red"></span>
                            <span class="menu-collapsed">Data Pelatihan</span>
                        </div>
                    </a> 

                    <a href="/sewakendaraan" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-th-large  mr-3 text-red"></span>
                            <span class="menu-collapsed">Data Pelatihan Details</span>
                        </div>
                    </a>

                    <a href="/sewakendaraan" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-file  mr-3 text-red"></span>
                            <span class="menu-collapsed">Data Materi</span>
                        </div>
                    </a>   


                    <a href="/sewakendaraan" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-question  mr-3 text-red"></span>
                            <span class="menu-collapsed">Data Modul Pertanyaan</span>
                        </div>
                    </a> 

                    <a href="/sewakendaraan" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-exclamation  mr-3 text-red"></span>
                            <span class="menu-collapsed">Data Modul Jawaban</span>
                        </div>
                    </a> 

              </ul><!-- List Group END-->
          </div>
        </div>
        </div>
      </div>
    </div>
  </nav>
  
  <div class="main-content">
    <!-- Navbar -->
    <div class="loading" style="display: none;">Loading&#8230;</div>
     {{ csrf_field() }}
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#"></a>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <i class="fa fa-user"></i>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              
              <div class="dropdown-divider"></div>
              @if(Auth::user()->role_id == 1)
              <a href="/home" class="dropdown-item">Masuk Sebagai Manager</a>
              @endif
              <a href="{{ route('logout') }}" class="dropdown-item menusxx"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">    
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->