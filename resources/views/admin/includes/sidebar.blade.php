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
                              <div class="dropdown-indicator-icon d-flex flex-center"></div>
                              <span class="nav-link-icon">
                                  <span data-feather="user"></span>
                              </span>
                              <span class="nav-link-text">users</span>
                          </div>
                      </a>

                       <a class="nav-link" href="{{ route('crust.index') }}">
                          <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon d-flex flex-center"></div>
                              <span class="nav-link-icon">
                                  <span data-feather="food"></span>
                              </span>
                              <span class="nav-link-text">pizzacrust</span>
                          </div>
                      </a>

                        <a class="nav-link" href="{{ route('size.index') }}">
                          <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon d-flex flex-center"></div>
                              <span class="nav-link-icon">
                                  <span data-feather="food"></span>
                              </span>
                              <span class="nav-link-text">PizzaSize</span>
                          </div>
                      </a>

                      <a class="nav-link" href="{{ route('website.index') }}">
                          <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon d-flex flex-center"></div>
                              <span class="nav-link-icon">
                                  <span data-feather="globe"></span>
                              </span>
                              <span class="nav-link-text">website</span>
                          </div>
                      </a>

                      <a class="nav-link dropdown-indicator" href="#customization" role="button"
                          data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                          <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon d-flex flex-center">
                                  <span class="fas fa-caret-right fs-0"></span>
                              </div>
                              <span class="nav-link-icon">
                                  <span data-feather="settings"></span>
                              </span>
                              <span class="nav-link-text">Setting</span>
                          </div>
                      </a>
                      <ul class="nav collapse parent" id="customization">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('sm.index') }}" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center">
                                      <span class="nav-link-text">SocialSetting</span>
                                  </div>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('basic.index') }}" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center">
                                      <span class="nav-link-text">BasicSetting</span>
                                  </div>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('cont.index') }}" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center">
                                      <span class="nav-link-text">SocialInfo</span>
                                  </div>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav collapse parent show" id="dashboard"></ul>
                      <div class="navbar-vertical-footer">
                          <a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <span class="navbar-vertical-footer-icon" data-feather="log-out"></span>
                              <span>Signout</span>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
