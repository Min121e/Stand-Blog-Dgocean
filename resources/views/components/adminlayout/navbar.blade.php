<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
        <a class="navbar-brand brand-logo" href="index.html"><img src="/admin/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/admin/images/logo-mini.svg" alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-sort-variant"></span>
        </button>
      </div>  
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

      {{-- <ul class="navbar-nav mr-lg-4 w-100">
        <li class="nav-item nav-search d-none d-lg-block w-100">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="search">
                <i class="mdi mdi-magnify"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
          </div>
        </li>
      </ul> --}}

      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          @if (Route::has('login'))
              <div class="pb-2 border-red-600">
                  @auth
                    <x-app-layout>
                      
                    </x-app-layout>
                  {{-- @else
                      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                      @endif --}}
                  @endauth
              </div>
          @endif
        </li>
      </ul>

      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"     data-toggle="offcanvas">   
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>