<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{URL::to('/')}}" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="VGD Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{route('dashboard')}}" class="nav-link  {{ Route::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin.survey')}}" class="nav-link  {{ Route::is('admin.survey') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Survey
                        </p>
                    </a>
                </li> 
                <li class="nav-item {{ request()->is('admin/profile') || (request()->is('admin/site-setting')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ (request()->is('admin/profile')) ? 'active' : '' }}">
                            <a href="{{route('admin.profile')}}" class="nav-link {{ (request()->is('admin/profile')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->is('admin/site-setting')) ? 'active' : '' }}">
                            <a href="{{route('admin.site.setting')}}" class="nav-link {{ (request()->is('admin/site-setting')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Web Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>  
                </ul>
            </ul>
        </nav>
    </div>
</aside>