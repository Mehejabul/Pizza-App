  <nav class="navbar navbar-light navbar-top navbar-expand vertical-navbar">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
              <span class="navbar-toggle-icon">
                <span class="toggle-line"></span>
              </span>
            </button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <img src="{{('contents/admin')}}/assets/img/icons/logo.png" alt="phoenix" width="32" />
                  <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                </div>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse">
            <div class="search-box d-none d-lg-block" style="width:25rem;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                <input class="form-control search-input search min-h-auto form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l ">
                    <img class="rounded-circle" src="{{('contents/admin')}}/assets/img/team/57.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                          <img class="rounded-circle" src="{{('contents/admin')}}/assets/img/team/57.png" alt="" />
                        </div>
                        <h6 class="mt-2">Jerry Seinfield</h6>
                      </div>
                      <div class="mb-3 mx-3">
                        <input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" />
                      </div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;"></div>
                    <div class="card-footer p-0 border-top">
                      <div class="px-3">
                        <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <span class="me-2" data-feather="log-out"></span>Sign out </a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>

