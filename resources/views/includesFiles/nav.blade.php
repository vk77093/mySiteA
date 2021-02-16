
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mt-1">
  <a class="navbar-brand" href="/"><img src="{{asset('assets/images/FirstPage/AARIALOGO_liteBrown.png')}}" class="img-fluid nav-image"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
      <ul class="navbar-nav">
          <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
          <li class="nav-item"><a href="#" class="nav-link">ABOUT US</a></li>
          <li class="nav-item"><a href="#" class="nav-link">OUR PROCESS</a></li>
        <!-- Level one dropdown -->
        <li class="nav-item dropdown">
          <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">OUR PRODUCT</a>
          <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
              {{-- <li class="dropdown-divider"></li> --}}

            <!-- Level two dropdown-->
            <li class="dropdown-submenu">
              <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Chocolates</a>
              <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">Dark Chocolates</a></li>
                    <li><a href="#" class="dropdown-item">White Chocolates</a></li>
                     <li><a href="#" class="dropdown-item">Milk Chocolates</a></li>
                  <!-- Level three dropdown-->
                {{-- <li class="dropdown-submenu">
                  <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Chocolates</a>
                  <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">Dark Chocolates</a></li>
                    <li><a href="#" class="dropdown-item">White Chocolates</a></li>
                     <li><a href="#" class="dropdown-item">Milk Chocolates</a></li>
                  </ul>
                </li> --}}
                <!-- End Level three -->
                {{-- <li>
                  <a tabindex="-1" href="#" class="dropdown-item"></a>
                </li>
                <li><a href="#" class="dropdown-item">Fillings</a></li>
                <li><a href="#" class="dropdown-item">Pastes</a></li> --}}
              </ul>
            </li>
            <!-- End Level two -->
            <li><a href="#" class="dropdown-item">Fillings</a></li>
             <li><a href="#" class="dropdown-item">Pastes</a></li>
          </ul>
        </li>
        <!-- End Level one -->

        <li class="nav-item"><a href="#" class="nav-link">CONTACT US</a></li>

<li class="nav-item"><a href="/" class="nav-link"><i class="fa fa-search" aria-hidden="true"></i></a></li>
      </ul>

    </div>
    </div>

</nav>
