<body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4 bg-info">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="{{ url('/') }}">
                <img src="/images/psw.png" class="header-brand-img"><font size="5">SIPESU</font></a>
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-none d-md-flex">
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                      <div>
                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                        <div class="small text-muted">10 minutes ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                      <div>
                        <strong>Alice</strong> started new task: Tabler UI design.
                        <div class="small text-muted">1 hour ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                      <div>
                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                        <div class="small text-muted">2 hours ago</div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./images/user.png)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"> {{ Auth::user()->name }}</span>
                      <small class="text-muted d-block mt-1">User</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                      <i class="dropdown-icon fe fe-user"></i> Sunting Profile
                    </a>
                    <a class="dropdown-item" href="/changePassword">
                      <i class="dropdown-icon fe fe-settings"></i> Ubah Kata Sandi
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                      <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0 bg-light" id="headerMenuCollapse">
          <div class="container ">
            <div class="row align-items-center">
              

              
  
              <div class="col-lg order-lg-first ">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="{{ url('admin') }}" class="nav-link"><i class="fe fe-home"></i> Beranda </a>
                  </li>
                  
                  <li class="nav-item">
                    <a href="{{ url('lapmasuk') }}" class="nav-link"><i class="fe fe-inbox"></i> Laporan Surat Masuk</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('lapkeluar') }}" class="nav-link"><i class="fa fa-wpforms"></i>Laporan Surat Keluar</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>