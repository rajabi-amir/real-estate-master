<div class="navbar-fixed">
    <nav class="indigo darken-4">
        <div class="container">
            <div class="nav-wrapper">

                <a href="{{ route('home') }}" class="brand-logo">
                    @if(isset($navbarsettings[0]) && $navbarsettings[0]['name'])
                        {{ $navbarsettings[0]['name'] }}
                    @else
                        املاک سیان
                    @endif
                    <!-- <i class="material-icons left">location_city</i> -->
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger" dir="rtl">
                    <i class="material-icons">menu</i>
                </a>
                
                <ul class="right hide-on-med-and-down" >
                @guest
                        <li style="float: right;"><a href="{{ route('login') }}"><i class="material-icons">input</i></a></li>
                        <li style="float: right;"><a href="{{ route('register') }}"><i class="material-icons">person_add</i></a></li>
                    @else
                        <li >
                            <a class="dropdown-trigger" href="#!" data-target="dropdown-auth-frontend">
                                {{ ucfirst(Auth::user()->username) }}
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                        <ul id="dropdown-auth-frontend" class="dropdown-content">
                            <li>
                                @if(Auth::user()->role->id == 1)
                                    <a href="{{ route('admin.dashboard') }}" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                @elseif(Auth::user()->role->id == 2)
                                    <a href="{{ route('agent.dashboard') }}" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                @elseif(Auth::user()->role->id == 3)
                                    <a href="{{ route('user.dashboard') }}" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                @endif
                            </li>
                            <li>
                                <a class="dropdownitem indigo-text" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="material-icons">power_settings_new</i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    @endguest
                    <li class="{{ Request::is('/') ? 'active' : '' }}" style="float: right;">
                        <a href="{{ route('home') }}">خانه</a>
                    </li>

                    <li class="{{ Request::is('property*') ? 'active' : '' }}" style="float: right;">
                        <a href="{{ route('property') }}">املاک</a>
                    </li>

                    <li class="{{ Request::is('agents*') ? 'active' : '' }}" style="float: right;">
                        <a href="{{ route('agents') }}">نمایندگان</a>
                    </li>

                    <li class="{{ Request::is('gallery') ? 'active' : '' }}" style="float: right;">
                        <a href="{{ route('gallery') }}">گالری</a>
                    </li>

                    <li class="{{ Request::is('blog*') ? 'active' : '' }}" style="float: right;">
                        <a href="{{ route('blog') }}">اخبار</a>
                    </li>

                    <li class="{{ Request::is('contact') ? 'active' : '' }}" style="float: right;">
                        <a href="{{ route('contact') }}">ارتباط با ما</a>
                    </li>

                
                </ul>
            </div>
        </div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('home') }}">خانه</a>
        </li>

        <li class="{{ Request::is('property*') ? 'active' : '' }}">
            <a href="{{ route('property') }}">املاک</a>
        </li>

        <li class="{{ Request::is('agents*') ? 'active' : '' }}">
            <a href="{{ route('agents') }}">نماینده</a>
        </li>

        <li class="{{ Request::is('gallery') ? 'active' : '' }}">
            <a href="{{ route('gallery') }}">گالری</a>
        </li>

        <li class="{{ Request::is('blog*') ? 'active' : '' }}">
            <a href="{{ route('blog') }}">اخبار</a>
        </li>

        <li class="{{ Request::is('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">ارتباط</a>
        </li>
    </ul>

</div>