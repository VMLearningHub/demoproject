 <!-- header area -->
 <header>
    <!-- secondary menu -->
    <nav class="secondary-menu">
        <div class="container">
            <!-- secondary menu left link area -->
            <div class="sm-left">
                <strong>Phone</strong>:&nbsp; <a href="#">9999999999</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>E-mail</strong>:&nbsp; <a href="#">demo@demo.com</a>
            </div>
            <!-- secondary menu right link area -->
            <div class="sm-right">
                <!-- social link -->
                <div class="sm-social-link">
                    <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
    <!-- primary menu -->
    <nav class="navbar navbar-fixed-top navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">
                    <!-- logo image -->
                    <img class="img-responsive" src="{{ asset('public/assets/img/logo/logo.png') }}" alt="">
                </a>
                <!-- logo area -->
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    @guest
                    @if (Route::has('login'))
                        <li>
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else
                <li class="nav-item dropdown">
                    <li>
                        <a class="nav-link" href="javascript:void(0)">Hi. {{ Auth::user()->name }}</a>
                    </li>
                   

                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </li>
                @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<!--/ header end -->

<div class="nav-animate"></div>