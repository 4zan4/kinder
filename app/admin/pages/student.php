<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="text-end mb-4">
                    <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#modalTambahStudent">
                        <i class="bi bi-plus"></i>Add Student
                    </button>
                </div>
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Student Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Address</th>
                            <th scope="col">Parent's Name</th>
                            <th scope="col">Parent's Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Enrollment Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../../config/koneksi.php";
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM students");
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $row['student_id']; ?></td>
                                <td><?= $row['first_name']; ?></td>
                                <td><?= $row['last_name']; ?></td>
                                <td><?= $row['date_of_birth']; ?></td>
                                <td><?= $row['address']; ?></td>
                                <td><?= $row['parent_name']; ?></td>
                                <td><?= $row['parent_contact']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['enrollment_date']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-sm-square btn-outline-primary m-2" data-bs-toggle="modal" data-bs-target="#modalUpdateStudent<?= $row['student_id']; ?>"><i class="bi bi-pencil-square"></i></button>
                                    <a href="#" onclick="deleteStudent(<?= $row['student_id']; ?>)" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                            <!-- Modal Update Start -->
                            <div class="modal fade" id="modalUpdateStudent<?= $row['student_id']; ?>" tabindex="-1" aria-labelledby="modalUpdateStudentLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalUpdateStudentLabel">Update Student</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form for updating student -->
                                            <form action="func/student.php" method="POST">
                                                <input type="hidden" name="action" value="update">
                                                <input type="hidden" name="student_id" value="<?= $row['student_id']; ?>">
                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $row['first_name']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="last_name" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $row['last_name']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?= $row['date_of_birth']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" value="<?= $row['address']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="parent_name" class="form-label">Parent's Name</label>
                                                    <input type="text" class="form-control" id="parent_name" name="parent_name" value="<?= $row['parent_name']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="parent_contact" class="form-label">Parent's Contact</label>
                                                    <input type="text" class="form-control" id="parent_contact" name="parent_contact" value="<?= $row['parent_contact']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="<?= $row['email']; ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="enrollment_date" class="form-label">Enrollment Date</label>
                                                    <input type="date" class="form-control" id="enrollment_date" name="enrollment_date" value="<?= $row['enrollment_date']; ?>" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Update End -->

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->

<!-- Modal Start -->
<div class="modal fade" id="modalTambahStudent" tabindex="-1" aria-labelledby="modalTambahStudentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahStudentLabel">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for adding new student -->
                <form action="func/student.php" method="POST">
                    <input type="hidden" name="action" value="create">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent_name" class="form-label">Parent's Name</label>
                        <input type="text" class="form-control" id="parent_name" name="parent_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent_contact" class="form-label">Parent's Contact</label>
                        <input type="text" class="form-control" id="parent_contact" name="parent_contact" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="enrollment_date" class="form-label">Enrollment Date</label>
                        <input type="date" class="form-control" id="enrollment_date" name="enrollment_date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- SweetAlert Script -->
<script>
    function deleteStudent(studentId) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `func/student.php?delete_id=${studentId}`;
            }
        });
    }
</script>
<!-- SweetAlert Script -->
<script>
    <?php if (isset($_SESSION['success']) && $_SESSION['success'] != ''): ?>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '<?php echo $_SESSION['success']; ?>'
        });
        <?php unset($_SESSION['success']); ?> // Clear session after displaying
    <?php endif; ?>

    <?php if (isset($_SESSION['fail']) && $_SESSION['fail'] != ''): ?>
        Swal.fire({
            icon: 'error',
            title: 'Fail',
            text: '<?php echo $_SESSION['fail']; ?>'
        });
        <?php unset($_SESSION['fail']); ?> // Clear session after displaying
    <?php endif; ?>
</script>
<!-- SweetAlert Script -->


