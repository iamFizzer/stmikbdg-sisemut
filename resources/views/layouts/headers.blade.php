<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
      <div class="me-3">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
      </div>
      <div>
        <a class="navbar-brand brand-logo" href="/dashboard">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJI5jc_a0qQLImJXlrDQ1B5A5J1lRzehBCbqSwpt364g&s" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="/dashboard">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJI5jc_a0qQLImJXlrDQ1B5A5J1lRzehBCbqSwpt364g&s" alt="logo" />
        </a>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
      <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
          <h1 class="welcome-text">Selamat datang, <span class="text-black fw-bold">{{auth()->user()->name}}</span></h1>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
          <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="{{asset('src')}}/assets/images/faces/face8.jpg" alt="Profile image"> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img class="img-md rounded-circle" src="{{asset('src')}}/assets/images/faces/face8.jpg" alt="Profile image">
              <p class="mb-1 mt-3 font-weight-semibold"></p>
              <p class="fw-light text-muted mb-0">{{auth()->user()->email}}</p>
            </div>
             
    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>
     {{ __('Logout') }}
 </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
 </form>
          </div>
        </li>
      </ul>
    </div>
  
  </nav>