<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Work Log <sup>UI</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="search.html">
            <i class="fas fa-fw fa-search"></i>
            <span>Search</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Work Log Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWorkLog" aria-expanded="true" aria-controls="collapseWorkLog">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Work Log</span>
        </a>
        <div id="collapseWorkLog" class="collapse" aria-labelledby="headingWorkLog" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Log Actions</h6>
                <a class="collapse-item" href="index.html"><i class="fas fa-fw fa-table"></i> View All</a>
                <a class="collapse-item" href="new-log.html"><i class="fas fa-fw fa-plus"></i> Add One</a>

                <h6 class="collapse-header">Settings</h6>
                <a class="collapse-item" href="{{ route('tag.index') }}">
                    <i class="fas fa-fw fa-tags"></i> Manage Tags
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Profile Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
        <div id="collapseSettings" class="collapse" aria-labelledby="headingSettings" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Profile Actions</h6>
                <a class="collapse-item" href="profile.html">
                    <i class="fas fa-fw fa-eye"></i> View / Edit
                </a>
                <a class="collapse-item" href="activity-log.html">
                    <i class="fas fa-fw fa-chart-area"></i> Activity Log
                </a>

                <h6 class="collapse-header">Account Actions</h6>
                <a class="collapse-item" href="{{ url('/logout') }}">
                    <i class="fas fa-fw fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Admin Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Admin</span>
        </a>
        <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Database</h6>
                <a class="collapse-item" href="db-log.html">
                    <i class="fas fa-fw fa-database"></i> View DB Logs
                </a>
                <a class="collapse-item" href="admin-settings.html">
                    <i class="fas fa-fw fa-cogs"></i> Admin Settings
                </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
