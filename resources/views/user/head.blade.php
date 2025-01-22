
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme_color" content="#ffffff">   
  <meta name="google-site-verification" content="QQlFHuHFdZ-Lo_AjAaYiJCElYinurhfwQiBVsEG5Xjc" />
  <title>HDNVerse | Portal Masa Kini</title>
  <!-- Favicon -->
  <link href="/assets/icon/72x72.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Icons -->
  <link href="/assets/content/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/assets/content/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <link href="/assets/splash/vendor/select2/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="/assets/content/css/loading.css">
  <!-- CSS Files -->
  <link href="/assets/content/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

  <link href="{{ asset ('assets/content/css/nav-footer.css') }}" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

  <link rel="manifest" href="/manifest.json">

  <!-- ios support -->
  <link rel="apple-touch-icon" href="/assets/icon/96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#aa7700">

</head>
<style type="text/css">
  
  .swal-modal .swal-text {
      text-align: center;
  }

  
</style>
<body class="">
  <nav style="top: 0;width: 100%;z-index: 100;" class="navbar navbar-vertical navbar-expand-md navbar-light bg-survey" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      {{ csrf_field() }}
      <!-- <div align="left">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span style="color: white;" class="fa fa-bars"></span>
            </button>
          </div>
        
      </div> -->

      <div align="left">
        <a class="navbar-brand pt-0" href="/" style="color: white; font-size: 18px;">
          <img src="/assets/splash/images/hdnverse2.png" class="navbar-brand-img">
        </a>
        
      </div>
      
      <div align="right">
        <input type="hidden" id="welcome" value="{{ Auth::user()->welcome }}">
        <input type="hidden" id="tokens" value="{{ Auth::user()->fcm_token }}">
        <button class="navbar-toggler " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span style="color: white;" class="fa fa-user"></span>
        </button>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
          
          <a href="/rekapuser?month={{date('m')}}&tahun={{ date('Y') }}" class="dropdown-item">Rekap Absensi</a>
          
            <a href="/approvekaryawan" class="dropdown-item">Approve Karyawan</a>
            <a href="/karyawanuser" class="dropdown-item">Akun Karyawan</a>
         
          <a href="/slipgaji" class="dropdown-item">Slip Gaji</a>
          <a href="/profile2" class="dropdown-item">Profile Anda</a>
          <a href="/gantipassword" class="dropdown-item">Ganti Password</a>
          <a href="{{ route('logout') }}" class="dropdown-item menusxx"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">    
           Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
      <div class="loading" style="display: none;">Loading&#8230;</div>
    </div>
  </nav>
    <!-- <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-survey p-4">
        <h5 class="text-white h4">Menu</h5>
        <div>
          <a href="/"><span style="color: white;">Beranda</span></a>
        </div>
        <div>
          <a href="/"><span style="color: white;">Mulai Belajar</span></a>
        </div>
        <div>
          <a href="/"><span style="color: white;">Keranjang</span></a>
        </div>
        <div>
          <a href="/"><span style="color: white;">Paket Belajar Saya</span></a>
        </div>
      </div>
    </div> -->