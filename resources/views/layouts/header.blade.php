<nav class="navbar navbar-expand-lg bg-img">
    <div class="container ">
        <a class="navbar-brand me-lg-5 me-0" href="index.html">
            {{-- <img src="{{URL::to('public/assets/images/pod-talk-logo.png')}}" class="logo-image img-fluid" alt="templatemo pod talk"> --}}
            <h3>Buy Tech</h3>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link  @if(Request::is('/')) active @endif " href="{{URL::to('/')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  @if(Request::is('about')) active @endif " href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @if(Request::is('shopping')) active @endif " href="{{URL::to('shopping')}}">Shopping</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link " href="{{URL::to('register')}}">Register</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link  @if(Request::is('contact')) active @endif " href="#">Contact</a>
                </li>
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link  @if(Request::is('order')) active @endif "  href="{{URL::to('order')}}">orders</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link  @if(Request::is('cart')) active @endif " href="{{URL::to('cart')}}"><i class="fa-solid fa-cart-shopping fa-1x"></i></a>
                </li>               
            </ul>

            <div class="ms-4">
                @if(Auth::user())
                <a href="{{URL::to('logout')}}" class="btn custom-btn custom-border-btn smoothscroll">Logout</a>
                @else
                <a href="{{URL::to('login')}}" class="btn custom-btn custom-border-btn smoothscroll">SignIn</a>
                @endif
            </div>
           
        </div>
    </div>
</nav>