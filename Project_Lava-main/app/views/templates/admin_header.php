<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Diving School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <style>
        .admin-header {
            background-color: #1a237e;
            color: white;
            padding: 1rem;
        }
        .admin-header h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        .admin-user-info {
            text-align: right;
        }
        .content-wrapper {
            padding: 20px;
        }
        .nav-link.active {
            background-color: rgba(255,255,255,0.1);
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>
                        <i class="fas fa-user-shield me-2"></i>
                        Diving School Admin Panel
                    </h1>
                </div>
                <div class="col-md-6 admin-user-info">
                    <?php if (isset($user) && isset($user['username'])): ?>
                        <span>
                            <i class="fas fa-user me-1"></i>
                            Welcome, <?php echo htmlspecialchars($user['username']); ?>
                            <span class="badge bg-light text-primary ms-1">
                                <?php echo ucfirst($user['user_role']); ?>
                            </span>
                        </span>
                        <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-outline-light btn-sm ms-2">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($alert)): ?>
    <div class="container mt-3">
        <div class="alert alert-<?php echo $alert['type']; ?> alert-dismissible fade show">
            <?php echo $alert['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
