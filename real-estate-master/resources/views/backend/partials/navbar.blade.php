    <nav class="navbar" >
        <div class="container-fluid">

            <div class="navbar-header" dir="rtl" style="float:right;">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" style="font-size:25px ; font-family:nazanin; font-weight:bold" href="{{ route('admin.dashboard') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;مشاور املاک سیان</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse" dir="rtl" style="float:left;" >
                <ul class="nav navbar-nav navbar-right">

                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->

                    <!-- Notifications -->
                    <li class="dropdown" style="margin-left: 100px">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">{{ $countmessages }}</span>
                        </a>
                        <ul class="dropdown-menu" >
                            <li class="header" style="float:right;">پیام ها</li>
                            <li class="body" style="float:right;">
                                <ul class="menu">
                                    @foreach($navbarmessages as $message)
                                    <li>
                                        <a href="{{route('admin.message.read',$message->id)}}">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">message</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>{{ str_limit($message->message,30) }}</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i>
                                                    {{ $message->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="footer" style="float:right;">
                                <a href="{{ route('admin.message') }}">پیغام ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
       
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="{{Storage::url('users/'.auth()->user()->image)}}" alt="{{ auth()->user()->name }}" width="24" height="24">
                            <!-- <span class="label uppercase">{{ strtok(Auth::user()->name, " ") }}</span> -->
                        </a>
                        <ul class="dropdown-menu pull-right" dir="rtl" style="float:right;">
                            <li style="float:right;">
                                <a href="{{route('admin.profile')}}" ><i class="material-icons"></i>پروفایل</a>
                            </li>

                            <li role="seperator" class="divider" style="float:right;"></li>
                            <li style="float:right;">
                                <a href="{{ route('admin.message') }}"><i class="material-icons"></i>پیام ها</a>
                            </li>
                            <li style="float:right;">
                                <a href="{{ route('admin.changepassword') }}"><i class="material-icons">lock</i>پسورد</a>
                            </li>
                            <li style="float:right;">
                                <a href="{{ route('home') }}" target="_blank"><i class="material-icons"></i>نمایش سایت</a>
                            </li>
                            <li role="seperator" class="divider"></li>

                            <li style="float:right;">
                                <a class="dropdownitem" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i> {{ __('Sign Out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>