<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a href=""><div class="sidebar-brand brand-logo text-white" href="">Roomie</div></a>

        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle" src="{{ auth()->check() ? asset('Profile_Images/' . auth()->user()->image) : '' }}" alt="missing">                  
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ auth()->check()? auth()->user()->name : ''}}</h5>
                  <span>{{ auth()->check()? auth()->user()->role : ''}}</span>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Here </span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('renter.dashboard') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li><br/>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('Room.Reservation.Trash') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Your Trash</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/')  }}" target="_blank">
            <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Go To Website</span>
            </a>
          </li>

        </ul>
      </nav>