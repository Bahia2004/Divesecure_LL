<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-users"></i> Total Users
                    </h5>
                    <h2 class="display-4"><?php echo isset($total_users) ? $total_users : '0'; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-swimming-pool"></i> Total Divers
                    </h5>
                    <h2 class="display-4"><?php echo isset($total_divers) ? $total_divers : '0'; ?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-clock"></i> Recent Divers
                    </h5>
                </div>
                <div class="card-body">
                    <?php if (isset($recent_divers) && !empty($recent_divers)): ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Experience</th>
                                        <th>Certification</th>
                                        <th>Preferred Diving Date</th>
                                        <th>Diving Spot</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($recent_divers as $diver): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($diver['first_name'] . ' ' . $diver['last_name']); ?></td>
                                            <td><?php echo htmlspecialchars($diver['contact_number']); ?></td>
                                            <td><?php echo htmlspecialchars($diver['experience']); ?></td>
                                            <td><?php echo htmlspecialchars($diver['diving_certification']); ?></td>
                                            <td><?php echo htmlspecialchars($diver['preferred_diving_date']); ?></td>
                                            <td><?php echo htmlspecialchars($diver['diving_spot']); ?></td>
                                            <td>
                                                <a href="<?php echo site_url('admin/divers#diver' . $diver['id']); ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <p class="text-muted mb-0">No recent divers found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-cog"></i> Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="<?php echo site_url('admin/users'); ?>" class="btn btn-primary">
                            <i class="fas fa-users"></i> Manage Users
                        </a>
                        <a href="<?php echo site_url('admin/divers'); ?>" class="btn btn-success">
                            <i class="fas fa-swimming-pool"></i> Manage Divers
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dashboard loaded');
});
</script>
