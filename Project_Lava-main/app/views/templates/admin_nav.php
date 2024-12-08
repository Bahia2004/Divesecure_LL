<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo segment(2) == 'dashboard' ? 'active' : ''; ?>" href="<?php echo site_url('admin/dashboard'); ?>">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo segment(2) == 'divers' ? 'active' : ''; ?>" href="<?php echo site_url('admin/divers'); ?>">
                        <i class="fas fa-swimming-pool"></i> Manage Divers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo segment(2) == 'users' ? 'active' : ''; ?>" href="<?php echo site_url('admin/users'); ?>">
                        <i class="fas fa-users"></i> Manage Users
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
