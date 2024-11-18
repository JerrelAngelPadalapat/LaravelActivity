<!-- ========== Left Sidebar Start ========== -->
<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="{{ url('admin/dashboard') }}" class="logo-light">
            <img src="{{ asset('template/images/logo-light.png') }}" alt="logo" class="logo-lg">
            <img src="{{ asset('template/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{ url('admin/dashboard') }}" class="logo-dark">
            <img src="{{ asset('template/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
            <img src="{{ asset('template/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
        </a>
    </div>

    <!--- Menu -->
    <div class="scrollbar">
        <ul class="menu">
            <li class="menu-item">
                <a href="{{ url('admin/dashboard') }}" class="menu-link mx-4">
                    <span class="menu-icon"><i data-feather="airplay"></i></span>
                    <span class="menu-text"> Dashboards </span>
                </a>
            </li>
        </ul>
    </div>
    <!--- End Menu -->
</div>
<!-- ========== Left Sidebar End ========== -->