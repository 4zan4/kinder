<?php
session_start();
include "../../../config/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $first_name = mysqli_real_escape_string($koneksi, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($koneksi, $_POST['last_name']);
    $date_of_birth = mysqli_real_escape_string($koneksi, $_POST['date_of_birth']);
    $address = mysqli_real_escape_string($koneksi, $_POST['address']);
    $parent_name = mysqli_real_escape_string($koneksi, $_POST['parent_name']);
    $parent_contact = mysqli_real_escape_string($koneksi, $_POST['parent_contact']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $enrollment_date = mysqli_real_escape_string($koneksi, $_POST['enrollment_date']);

    if ($action == 'create') {
        $query = "INSERT INTO students (first_name, last_name, date_of_birth, address, parent_name, parent_contact, email, enrollment_date) 
                  VALUES ('$first_name', '$last_name', '$date_of_birth', '$address', '$parent_name', '$parent_contact', '$email', '$enrollment_date')";

        if (mysqli_query($koneksi, $query)) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        } else {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    } elseif ($action == 'update') {
        $student_id = mysqli_real_escape_string($koneksi, $_POST['student_id']);
        $query = "UPDATE students SET first_name='$first_name', last_name='$last_name', date_of_birth='$date_of_birth', address='$address', 
                  parent_name='$parent_name', parent_contact='$parent_contact', email='$email', enrollment_date='$enrollment_date' WHERE student_id='$student_id'";

        if (mysqli_query($koneksi, $query)) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        } else {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    }

    mysqli_close($koneksi);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['delete_id'])) {
    $student_id = mysqli_real_escape_string($koneksi, $_GET['delete_id']);
    $query = "DELETE FROM students WHERE student_id='$student_id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    mysqli_close($koneksi);
}
?>
