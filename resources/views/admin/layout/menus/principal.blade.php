<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading {!! (Request::is('admin') ? 'active' : '') !!}">{{ trans("admin.navbar.core") }}</div>
            <a class="nav-link" href="{!! URL::route('dashboard') !!}" ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a >
            <div class="sb-sidenav-menu-heading">{{ trans("admin.navbar.modules") }}</div>

            @if(Sentinel::getUser()->role_id == 1)
                {{-- Users --}}
                @php
                    $route_module = 'users';
                    $route_title = trans('module_'.$route_module.'.module_title_s');
                    $route_title_plural = trans('module_'.$route_module.'.module_title');
                    $route_font_awesome = 'user';

                    if( Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ) {
                      $nav_class = "active";
                      $aria_expanded = "true";
                      $accordion = "show";
                    } else {
                      $nav_class = "collapsed";
                      $aria_expanded = "false";
                      $accordion = "";
                    }
                @endphp

                <a class="nav-link {{ $nav_class }}" href="#" data-toggle="collapse" data-target="#collapse{{ $route_module }}" aria-expanded="{{ $aria_expanded }}" aria-controls="collapse{{ $route_module }}">
                  <div class="sb-nav-link-icon"><i class="fas fa-{{ $route_font_awesome }}"></i></div>
                  {{ $route_title }}
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ $accordion }}" id="collapse{{ $route_module }}" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{!! URL::route($route_module) !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                    <a class="nav-link" href="{!! URL::route($route_module.'.create') !!}">{{ trans('strings.crud.add') }} {{ $route_title }}</a>
                    <a class="nav-link" href="{!! URL::route($route_module.'.deleted') !!}">{{ trans('strings.crud.restore') }} {{ $route_title }}</a>
                  </nav>
                </div>
            @endif

            @if(Sentinel::getUser()->role_id <= 2)
                {{-- Microchips --}}
                @php
                    $route_module = 'microchips';
                    $route_title = "Microchips";
                    $route_title_plural = "Microchips";
                    $route_font_awesome = 'envelope';

                    if( Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ) {
                      $nav_class = "active";
                      $aria_expanded = "true";
                      $accordion = "show";
                    } else {
                      $nav_class = "collapsed";
                      $aria_expanded = "false";
                      $accordion = "";
                    }
                @endphp

                <a class="nav-link {{ $nav_class }}" href="#" data-toggle="collapse" data-target="#collapse{{ $route_module }}" aria-expanded="{{ $aria_expanded }}" aria-controls="collapse{{ $route_module }}">
                  <div class="sb-nav-link-icon"><i class="fas fa-{{ $route_font_awesome }}"></i></div>
                  {{ $route_title }}
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ $accordion }}" id="collapse{{ $route_module }}" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{!! URL::route($route_module) !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                    @if (Sentinel::getUser()->role_id == 1)
                      <a class="nav-link" href="{!! URL::route($route_module.'.create') !!}">{{ trans('strings.crud.add') }} {{ $route_title }}</a>
                      <a class="nav-link" href="{!! URL::route($route_module.'.deleted') !!}">{{ trans('strings.crud.restore') }} {{ $route_title }}</a>
                    @endif
                    
                  </nav>
                </div>
            @endif

            @if(Sentinel::getUser()->role_id <= 2)
                {{-- Pets --}}
                @php
                    $route_module = 'pets';
                    $route_title = "Mascotas";
                    $route_title_plural = "Mascotas";
                    $route_font_awesome = 'dog';

                    if( Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ) {
                      $nav_class = "active";
                      $aria_expanded = "true";
                      $accordion = "show";
                    } else {
                      $nav_class = "collapsed";
                      $aria_expanded = "false";
                      $accordion = "";
                    }
                @endphp

                <a class="nav-link {{ $nav_class }}" href="#" data-toggle="collapse" data-target="#collapse{{ $route_module }}" aria-expanded="{{ $aria_expanded }}" aria-controls="collapse{{ $route_module }}">
                  <div class="sb-nav-link-icon"><i class="fas fa-{{ $route_font_awesome }}"></i></div>
                  {{ $route_title }}
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ $accordion }}" id="collapse{{ $route_module }}" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{!! URL::route($route_module) !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                    <a class="nav-link" href="{!! URL::route($route_module.'.create') !!}">{{ trans('strings.crud.add') }} {{ $route_title }}</a>
                    <a class="nav-link" href="{!! URL::route($route_module.'.deleted') !!}">{{ trans('strings.crud.restore') }} {{ $route_title }}</a>
             
                    
                  </nav>
                </div>
            @endif



            



        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">{{ trans("admin.navbar.loggedin") }}:</div>
        {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}
    </div>
</nav>
