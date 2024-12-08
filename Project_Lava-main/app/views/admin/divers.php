<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="fas fa-swimming-pool"></i> Manage Divers</h2>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
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
                        <?php if (isset($divers) && !empty($divers)): ?>
                            <?php foreach ($divers as $diver): ?>
                            <tr>
                                <td><?php echo $diver['id']; ?></td>
                                <td><?php echo htmlspecialchars($diver['first_name'] . ' ' . $diver['last_name']); ?></td>
                                <td><?php echo htmlspecialchars($diver['contact_number']); ?></td>
                                <td><?php echo htmlspecialchars($diver['experience']); ?></td>
                                <td><?php echo htmlspecialchars($diver['diving_certification']); ?></td>
                                <td><?php echo htmlspecialchars($diver['preferred_diving_date']); ?></td>
                                <td><?php echo htmlspecialchars($diver['diving_spot']); ?></td>
                                <td>
    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewDiver<?php echo $diver['id']; ?>">
        <i class="fas fa-eye"></i> View
    </button>
</td>

                            </tr>

                            <!-- View Diver Modal -->
                            <div class="modal fade" id="viewDiver<?php echo $diver['id']; ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Diver Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Name:</strong> <?php echo htmlspecialchars($diver['first_name'] . ' ' . $diver['middle_name'] . ' ' . $diver['last_name']); ?></p>
                                            <p><strong>Date of Birth:</strong> <?php echo $diver['dob']; ?></p>
                                            <p><strong>Gender:</strong> <?php echo $diver['gender']; ?></p>
                                            <p><strong>Address:</strong> <?php echo htmlspecialchars($diver['address']); ?></p>
                                            <p><strong>Contact:</strong> <?php echo htmlspecialchars($diver['contact_number']); ?></p>
                                            <p><strong>Emergency Contact:</strong> <?php echo htmlspecialchars($diver['emergency_contact_number']); ?></p>
                                            <p><strong>Emergency Contact Person:</strong> <?php echo htmlspecialchars($diver['emergency_contact_person']); ?></p>
                                            <p><strong>Experience:</strong> <?php echo htmlspecialchars($diver['experience']); ?></p>
                                            <p><strong>Certification:</strong> <?php echo htmlspecialchars($diver['diving_certification']); ?></p>
                                            <p><strong>Preferred Date Time:</strong> <?php echo htmlspecialchars($diver['preferred_diving_date']); ?></p>
                                            <p><strong>Diving Spot:</strong> <?php echo htmlspecialchars($diver['diving_spot']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">No divers found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
