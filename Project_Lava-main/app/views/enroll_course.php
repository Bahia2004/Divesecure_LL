<?php
include APP_DIR.'views/templates/header.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Example form processing (you should validate and sanitize inputs)
    $diver_id = $_POST['diver_id'];
    $course_id = $_POST['course_id'];
    $course_schedule = $_POST['course_schedule']; // New field for selected course schedule

    // Save the course enrollment in the database (example)
    // Example SQL query: INSERT INTO enrollments (diver_id, course_id, course_schedule) VALUES (?, ?, ?)

    echo "<div class='alert alert-success'>Enrollment successful! Diver ID: $diver_id for Course ID: $course_id</div>";
}

// Fetch available courses from the database (example)
$courses = [
    ['id' => 1, 'name' => 'Open Water Diver', 'schedule' => ['2024-12-01', '2024-12-15']],
    ['id' => 2, 'name' => 'Advanced Diver', 'schedule' => ['2024-11-25', '2024-12-10']],
    ['id' => 3, 'name' => 'Rescue Diver', 'schedule' => ['2024-11-28', '2024-12-12']]
];
?>

<body>
    <div id="app">
    <?php
    include APP_DIR.'views/templates/nav.php';
    ?>  
    <main class="mt-3 pt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Course Enrollment</div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <!-- Diver ID Input -->
                                <div class="mb-3">
                                    <label for="diver_id" class="form-label">Diver ID</label>
                                    <input type="text" class="form-control" id="diver_id" name="diver_id" required>
                                </div>

                                <!-- Select Course -->
                                <div class="mb-3">
                                    <label for="course_id" class="form-label">Select Course</label>
                                    <select class="form-select" id="course_id" name="course_id" required>
                                        <?php foreach ($courses as $course): ?>
                                            <option value="<?= $course['id'] ?>"><?= $course['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Select Course Schedule -->
                                <div class="mb-3">
                                    <label for="course_schedule" class="form-label">Select Course Schedule</label>
                                    <select class="form-select" id="course_schedule" name="course_schedule" required>
                                        <?php
                                        // Populate schedule based on selected course
                                        if (isset($_POST['course_id'])) {
                                            $selected_course = $_POST['course_id'];
                                            foreach ($courses as $course) {
                                                if ($course['id'] == $selected_course) {
                                                    foreach ($course['schedule'] as $schedule) {
                                                        echo "<option value='$schedule'>$schedule</option>";
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Enroll</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>

    <script>
        // Update course schedule options based on selected course
        document.getElementById('course_id').addEventListener('change', function () {
            const courseId = this.value;
            const schedules = <?php echo json_encode($courses); ?>;
            const scheduleSelect = document.getElementById('course_schedule');

            // Clear current options
            scheduleSelect.innerHTML = '';

            // Populate new schedule options
            schedules.forEach(course => {
                if (course.id == courseId) {
                    course.schedule.forEach(schedule => {
                        const option = document.createElement('option');
                        option.value = schedule;
                        option.textContent = schedule;
                        scheduleSelect.appendChild(option);
                    });
                }
            });
        });
    </script>
</body>
</html>
