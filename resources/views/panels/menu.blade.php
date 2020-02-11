<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template-dark/index.html">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vastu Connect</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ Route::is('admin.home') ? 'active' : '' }} nav-item'"><a href="{{ route('admin.home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span>Properties</span>
            </li>
            <li class="{{ Route::is('admin.property.index') ? 'active' : '' }} nav-item"><a href="#"><i class="feather icon-map-pin"></i><span class="menu-title">Properties</span></a>
            </li>
            <li class="{{ Route::is('admin.property.create') ? 'active' : '' }} nav-item"><a href="{{ route('admin.property.add') }}"><i class="feather icon-plus-square"></i><span class="menu-title">New Property</span></a>
            </li>
            <li class="{{ Route::is('admin.property.booked') ? 'active' : '' }} nav-item"><a href="#"><i class="feather icon-trending-up"></i><span class="menu-title">Booked Properties</span></a>
            </li>
            <li class=" navigation-header"><span>Agents</span>
            </li>
            <li class="{{ Route::is('admin.agent.index') ? 'active' : '' }} nav-item"><a href="{{ route('admin.agent.index') }}"><i class="feather icon-users"></i><span class="menu-title">Agents</span></a>
            </li>
            <li class="{{ Route::is('admin.agent.create') ? 'active' : '' }} nav-item"><a href="{{ route('admin.agent.create') }}"><i class="feather icon-user-plus"></i><span class="menu-title">New Agent</span></a>
            </li>
        </ul>
    </div>
</div>
