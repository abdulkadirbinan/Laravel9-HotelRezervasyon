<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('assets')}}/admin/images/logo.svg" alt="logo"></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets')}}/admin/images/logo-mini.svg" alt="logo"></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{ asset('assets')}}/admin/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
            <a class="nav-link collapsed " data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-beach"></i>
              </span>
              <span class="menu-title">Rezervations</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">New Rezervation</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Accepted Rezervation</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Completed Rezervation</a></li>
              </ul>
            </div>
          </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/category">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Categories</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/hotel">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Hotels</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/comment">
              <span class="menu-icon">
                <i class="mdi mdi-comment-text"></i>
              </span>
                    <span class="menu-title">Comments</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin.faq.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-comment-question-outline"></i>
              </span>
                    <span class="menu-title">FAQ</span>
                </a>
            </li>
            <li class="nav-item menu-items ">
                <a class="nav-link" href="{{route('admin.message.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-email"></i>
              </span>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/user">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/social">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
                    <span class="menu-title">Social</span>
                </a>
            </li>

            <li class="nav-item nav-category">
                <span class="nav-link">Label</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/setting">
              <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
              </span>
                    <span class="menu-title">Settings</span>
                </a>
            </li>
        </ul>
      </nav>

