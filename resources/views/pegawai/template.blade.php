<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>PT. PLN (Persero)</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/prism/prism.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/upload-preview/assets/css/application.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="shortcut icon" href="{{ asset('assets/img/pln_fav.png') }}">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">PLN</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
              class="fas fa-search"></i></a></li>
            </ul>
            <div class="search-element">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              <div class="search-backdrop"></div>
            </div>
          </form>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                      <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b>
                      <p>Hello, Bro!</p>
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="{{ asset('assets/img/avatar/avatar-2.png') }}" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Dedik Sugiharto</b>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="{{ asset('assets/img/avatar/avatar-3.png') }}" class="rounded-circle">
                      <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Agung Ardiansyah</b>
                      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="{{ asset('assets/img/avatar/avatar-4.png') }}" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Ardian Rahardiansyah</b>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                      <div class="time">16 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="{{ asset('assets/img/avatar/avatar-5.png') }}" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Alfa Zulkarnain</b>
                      <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer text-center">
                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">
                      <i class="fas fa-code"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Template update is available now!
                      <div class="time text-primary">2 Min Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                      <i class="far fa-user"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-success text-white">
                      <i class="fas fa-check"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-danger text-white">
                      <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Low disk space. Let's clean it!
                      <div class="time">17 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                      <i class="fas fa-bell"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Welcome to Stisla template!
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer text-center">
                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->nama }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0)"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('pegawai.logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </li>
      </ul>
    </nav>

    <nav class="navbar navbar-secondary navbar-expand-lg">
      <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item home">
            <a href="{{ url('/') }}" class="nav-link"><i
              class="fas fa-home"></i><span>Home</span></a>
            </li>
            <li class="nav-item layanan">
              <a href="{{ url('layanan') }}" class="nav-link"><i class="far fa-heart"></i><span>Layanan</span></a>
            </li>
            <li class="nav-item mentoring progres">
              <a href="{{ url('progres') }}" class="nav-link"><i
                class="fas fa-ellipsis-h"></i><span>Progres</span></a>
              </li>
              <li class="datakeluarga nav-item">
                <a href="{{ url('datakeluarga') }}" class="nav-link"><i
                  class="fas fa-users"></i><span>Data Keluarga</span></a>
                </li>
                <li class="nav-item kontak">
                  <a href="#" class="nav-link"><i
                    class="far far fa-envelope"></i><span>Kontak</span></a>
                  </li>
                </ul>
              </div>
            </nav>

            <!-- Main Content -->
            <div class="main-content">
              @yield('content')
            </div>
            <footer class="main-footer">
              <div class="footer-left">
              Copyright &copy; Karpten (KRP) 2019</a>
            </div>
            <div class="footer-right">

            </div>
          </footer>
        </div>
      </div>

      <!-- General JS Scripts -->
      <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/modules/popper.js') }}"></script>
      <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
      <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
      <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
      <script src="{{ asset('assets/js/stisla.js') }}"></script>

      <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
      <script src="{{ asset('assets/js/page/modules-toastr.js') }}"></script>
      @yield('js')
      
      <!-- JS Libraies -->
      <script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
      <script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
      <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
      <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
      <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

      <!-- Page Specific JS File -->
      <script src="{{ asset('assets/js/page/modules-datatables.js') }}"></script>
      <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
      <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>

      <!-- Template JS File -->
      <script src="{{ asset('assets/js/scripts.js') }}"></script>
      <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>

    </html>