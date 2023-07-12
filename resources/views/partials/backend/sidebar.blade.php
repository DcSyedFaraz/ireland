<style>
    .sidebar .nav-link p{
        margin-bottom: 0px;
    }

    .sidebar{
        box-shadow: 0px 0px 20px rgb(1 41 112 / 50%);
    }
    
   
</style>
  
  
  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    @if ( auth()->user()->hasRoleId(2) )
    <ul class="sidebar-nav" id="sidebar-nav">
         <li class="nav-item">
            <a href="{{ route('customer.home') }}" class="nav-link {{ request()->routeIs('customer.home') ? 'active' : '' }}">
                <i class="fas fa-fw fa-tachometer-alt nav-icon"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <li class="nav-header">ORDERS</li>

        <li class="nav-item">
            <a href="{{ route('customer.orders.index') }}" class="nav-link {{ request()->routeIs('customer.orders.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-copy"></i>

                <p>Orders</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('customer.invoices.index') }}" class="nav-link {{ request()->routeIs('customer.invoices.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-receipt"></i>
                <p>Invoices</p>
            </a>
        </li>
        <li class="nav-header">PROFILE</li>

        <li class="nav-item">
            <a href="{{route('customer.profile.index')}}" class="nav-link {{ request()->routeIs('customer.profile.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>Profile</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('customer.profile.change-password')}}" class="nav-link {{ request()->routeIs('customer.profile.change-password') ? 'active' : '' }}">
                <i class="nav-icon fas fa-unlock"></i>
                <p>Change Password</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <p>
                    <i class="fas fa-fw fa-sign-out-alt nav-icon">

                    </i>
                    <p>{{ trans('global.logout') }}</p>
                </p>
            </a>
        </li>
    </ul>
    @else
     <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('admin.home')  ? "active" : "" }}" href="{{route('admin.home')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('admin.order.query*')  ? "active" : "" }}" href="{{route('admin.order.query')}}">
                <i class="bi bi-question-square"></i>
                <span>Order Queries</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('admin.orders.*')  ? "active" : "" }}" href="{{route('admin.orders.index')}}">
                <i class="bi bi-menu-button-wide"></i>
                <span>Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('admin.contacts.*')  ? "active" : "" }}" href="{{route('admin.contacts.index')}}">
                <i class="bi bi-journal-text"></i>
                <span>Contact</span>
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/services/*') ? '' : 'collapsed' }}" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text-fill"></i><span>Services Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="service-nav" class="nav-content collapse {{ request()->routeIs('admin.services.*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a class="{{request()->routeIs('admin.services.*')  ? "active" : "" }}" href="{{route('admin.services.index')}}">
                    <i class="bi bi-circle"></i>
                    <span>Services</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
         <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/blogs/*') ? '' : 'collapsed' }}" data-bs-target="#access-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Blogs Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="access-nav" class="nav-content collapse {{ request()->routeIs('admin.categories.*') || request()->routeIs('admin.tags.*') || request()->routeIs('admin.blogs.*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a class="{{request()->routeIs('admin.categories.*')  ? "active" : "" }}" href="{{route('admin.categories.index')}}">
                        <i class="bi bi-circle"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{request()->routeIs('admin.tags.*')  ? "active" : "" }}" href="{{route('admin.tags.index')}}">
                    <i class="bi bi-circle"></i>
                    <span>Tags</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{request()->routeIs('admin.blogs.*')  ? "active" : "" }}" href="{{route('admin.blogs.index')}}">
                    <i class="bi bi-circle"></i>
                    <span>Blogs</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
         <li class="nav-item">
            <a class="nav-link {{request()->routeIs('admin.fare.index')  ? "active" : "" }}" href="{{route('admin.fare.index')}}">
                <i class="bi bi-bar-chart"></i>
                <span>Fare List</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('admin.web-setting.index')  ? "active" : "" }}" href="{{route('admin.web-setting.index')}}">
                <i class="bi bi-gear"></i>
                <span>Website Setting</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('admin.menus.index')  ? "active" : "" }}" href="{{route('admin.menus.index')}}">
                <i class="bi bi-bar-chart-steps"></i>
                <span>Menus</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('admin.pages.index')  ? "active" : "" }}" href="{{route('admin.pages.index')}}">
                <i class="bi bi-file-break"></i>
                <span>Pages</span>
            </a>
        </li>
    </ul>
     @endif


    

  </aside><!-- End Sidebar-->
