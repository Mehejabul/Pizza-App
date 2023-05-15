  <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
      <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                  <li class="nav-item">
                      <!-- parent pages-->
                      <a class="nav-link" href="{{ route('admin.index') }}">
                          <div class="d-flex align-items-center">
                              <div class="dropdown"></div>
                              <span class="nav-link-icon">
                                  <span data-feather="cast"></span>
                              </span>
                              <span class="nav-link-text">Dashboard</span>
                          </div>
                      </a>
                      <a class="nav-link" href="{{ route('user.index') }}">
                          <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon d-flex flex-center"></div><span
                                  class="nav-link-icon"><span data-feather="user"></span></span><span
                                  class="nav-link-text">users</span>
                          </div>
                      </a>
                      <a class="nav-link" href="{{ route('website.index') }}">
                          <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon d-flex flex-center"></div><span
                                  class="nav-link-icon"><span data-feather="globe"></span></span><span
                                  class="nav-link-text">website</span>
                          </div>
                      </a>
                      <ul class="nav collapse parent show" id="dashboard"> </ul>
                      <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0"
                              href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                  class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Sign
                                  out</span></a></div>
          </div>
          </li>
      </div>
  </nav>
