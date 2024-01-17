<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-ticket-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Ticket</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            <span class="ml-2">Dashboard</span>
        </a>
    </li>
    <!-- Nav Item - Members -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.members.list') }}">
            <i class="fas fa-users"></i>
            <span class="ml-2">Members</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="btn btn-link rounded-circle" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</ul>
