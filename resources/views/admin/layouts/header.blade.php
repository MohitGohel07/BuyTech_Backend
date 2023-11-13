<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <div class="logo-area">
                <a class="navbar-brand" href="{{ URL::to('admin') }}">
                    <h2>Buy Tech</h2>
                    {{-- <img class="dark" src="{{ URL::to('/images/logo_white_background.jpg') }}" alt="logo">
                    <img class="light" src="{{ URL::to('/images/logo_white_background.jpg') }}" alt="logo"> --}}
                </a>
                <a href="#" class="sidebar-toggle">
                    <img class="svg" src="{{ URL::to('public/backend/img/svg/align-center-alt.svg') }}"
                        alt="img"></a>
            </div>
        </div>
        <!-- ends: navbar-left -->
        <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-search">
                    <a href="#" class="search-toggle">
                        <i class="uil uil-search"></i>
                        <i class="uil uil-times"></i>
                    </a>
                    <form action="/" class="search-form-topMenu">
                        <span class="search-icon uil uil-search"></span>
                        <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                            aria-label="Search">
                    </form>
                </li>
                <li class="nav-message">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle icon-active">
                            <img class="svg" src="{{ URL::to('public/backend/img/svg/message.svg') }}"
                                alt="img">
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Messages <span
                                        class="badge-circle badge-success ms-1">2</span></h2>
                                <ul>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="{{ URL::to('public/backend/img/team-1.png') }}" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                                    ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="" class="dropdown-wrapper__more">See All Message</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ends: nav-message -->
                <li class="nav-notification">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle icon-active">
                            <img class="svg" src="{{ URL::to('public/backend/img/svg/alarm.svg') }}" alt="img">
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Notifications <span
                                        class="badge-circle badge-warning ms-1">4</span></h2>
                                <ul>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--primary">
                                            <img class="svg" src="{{ URL::to('public/backend/img/svg/inbox.svg') }}"
                                                alt="inbox">
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ends: .nav-notification -->
                <li class="nav-settings">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle">
                            <img src="{{ URL::to('public/backend/img/setting.png') }}" alt="setting">
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper dropdown-wrapper--large">
                                <ul class="list-settings">
                                    <li class="d-flex">
                                        <div class="me-3"><img src="{{ URL::to('public/backend/img/mail.png') }}"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="" class="stretched-link">All Features</a>
                                            </h6>
                                            <p>Introducing Increment subscriptions </p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="me-3"><img
                                                src="{{ URL::to('public/backend/img/color-palette.png') }}"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="" class="stretched-link">Themes</a>
                                            </h6>
                                            <p>Third party themes that are compatible</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ends: .nav-support -->
                <li class="nav-flag-select">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><img
                                src="{{ URL::to('public/backend/img/flag.png') }}" alt=""
                                class="rounded-circle"></a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper dropdown-wrapper--small">
                                <a href=""><img src="{{ URL::to('public/backend/img/eng.png') }}"
                                        alt=""> English</a>
                                <a href=""><img src="{{ URL::to('public/backend/img/ger.png') }}"
                                        alt=""> German</a>
                                <a href=""><img src="{{ URL::to('public/backend/img/spa.png') }}"
                                        alt=""> Spanish</a>
                                <a href=""><img src="{{ URL::to('public/backend/img/tur.png') }}"
                                        alt=""> Turkish</a>
                                <a href=""><img src="{{ URL::to('public/backend/img/iraq.png') }}"
                                        alt=""> Arabic</a>
                            </div>
                        </div>

                    </div>
                </li>
                <!-- ends: .nav-flag-select -->
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><img
                                src="{{ URL::to('public/backend/img/author-nav.jpg') }}" alt=""
                                class="rounded-circle">
                            <span class="nav-item__title">{{!empty(Auth::user()->firstname) ? Auth::user()->firstname : '' }}<i
                                    class="las la-angle-down nav-item__arrow"></i></span>
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="{{ URL::to('public/backend/img/author-nav.jpg') }}" alt=""
                                            class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>Rabbi Islam Rony</h6>
                                        <span>UI Designer</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="uil uil-user"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="uil uil-setting"></i>
                                                Settings</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="uil uil-key-skeleton"></i> Billing</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="uil uil-users-alt"></i> Activity</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="uil uil-bell"></i> Help</a>
                                        </li>
                                    </ul>
                                    <a href="{{URL::to('admin/signOut')}}" class="nav-author__signout" >
                                        <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </div>
                </li>
                <!-- ends: .nav-author -->
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
                <a href="#" class="btn-search">
                    <img src="{{ URL::to('public/backend/img/svg/search.svg') }}" alt="search"
                        class="svg feather-search">
                    <img src="{{ URL::to('public/backend/img/svg/x.svg') }}" alt="x"
                        class="svg feather-x"></a>
                <a href="#" class="btn-author-action">
                    <img class="svg" src="{{ URL::to('public/backend/img/svg/more-vertical.svg') }}"
                        alt="more-vertical"></a>
            </div>
        </div>
        <!-- ends: .navbar-right -->
    </nav>
</header>
