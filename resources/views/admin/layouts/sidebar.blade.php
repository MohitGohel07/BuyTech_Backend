<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="has-child @if (Request::is('admin')) open @endif">
                    <a href="#" class="@if (Request::is('admin')) active @endif">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul id="nav">
                        <li class=" @if (Request::is('admin')) active @endif ">
                            <a href="{{ URL::to('admin') }}" class="dashboard">Dashboard</a>
                        </li>
                    </ul>
                </li>
                @if(Auth::user()->role == 1)
                <li class="@if (Request::is('admin/users')) active @endif  ">
                    <a href="{{ URL::to('admin/users') }}">
                        <span class="nav-icon uil uil-users-alt"></span>
                        <span class="menu-text">Users</span>
                    </a>
                </li>

                <li class="@if (Request::is('store/users')) active @endif  ">
                    <a href="{{ URL::to('store/users') }}">
                        <span class="nav-icon uil uil-users-alt"></span>
                        <span class="menu-text">Store Users</span>
                    </a>
                </li>

                @endif
                <li class="@if (Request::is('admin/category/*') || Request::is('admin/category')) active @endif  ">
                    <a href="{{ URL::to('admin/category') }}">
                        <span class="nav-icon uil uil-window"></span>
                        <span class="menu-text">category</span>
                    </a>
                </li>
                <li class="@if (Request::is('admin/Products/*') || Request::is('admin/Products')) active @endif  ">
                    <a href="{{ URL::to('admin/Products') }}">
                        <span class="nav-icon uil uil-window"></span>
                        <span class="menu-text">Products</span>
                    </a>
                </li>
                <li class="@if (Request::is('admin/orders') || Request::is('admin/orders')) active @endif  ">
                    <a href="{{ URL::to('admin/orders') }}">
                        <span class="nav-icon uil uil-window"></span>
                        <span class="menu-text">Orders</span>
                    </a>
                </li>
                </li>
                <li class="@if (Request::is('admin/orders/complated') || Request::is('admin/orders/complated')) active @endif  ">
                    <a href="{{ URL::to('admin/orders/complated') }}">
                        <span class="nav-icon uil uil-window"></span>
                        <span class="menu-text">Complated Orders</span>
                    </a>
                </li>
                <li class="@if (Request::is('admin/csv') || Request::is('admin/csv')) active @endif  ">
                    <a href="{{ URL::to('admin/csv') }}">
                        <span class="nav-icon uil uil-window"></span>
                        <span class="menu-text">Csv</span>
                    </a>
                </li>
                {{-- <li class="@if (Request::is('admin/sets/*') || Request::is('admin/sets')) active @endif  ">
                     <a href="{{ URL::to('admin/sets') }}">
                        <span class="nav-icon uil uil-window"></span>
                        <span class="menu-text">Set Names</span>
                     </a>
                </li>
                <li class="@if (Request::is('admin/cards/*') || Request::is('admin/cards')) active @endif  ">
                    <a href="{{ URL::to('admin/cards') }}">
                       <span class="nav-icon uil uil-window"></span>
                       <span class="menu-text">Cards</span>
                    </a>
               </li>
                <li class="@if (Request::is('admin/settings/*') || Request::is('admin/settings')) active @endif  ">
                     <a href="{{ URL::to('admin/settings') }}">
                        <span class="nav-icon fas fa-bahai"></span>
                        <span class="menu-text">Settings</span>
                     </a>
                </li>
                <li class="@if (Request::is('admin/csv/*') || Request::is('admin/csv')) active @endif  ">
                     <a href="{{ URL::to('admin/csv') }}">
                        <span class=" nav-icon fa-solid fa-file-csv"></span>
                        <span class="menu-text">csv</span>
                     </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
