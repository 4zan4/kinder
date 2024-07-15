<!DOCTYPE html>
<html lang="en">

<head>
    <?php @include('head.php'); ?>

</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">

        <!-- Sidebar Start -->
        <?php @include('navbar.php'); ?>

        <!-- Sidebar End -->
        <?php
        if (isset($_GET['page'])) {
            $page = basename($_GET['page']); // Mengambil nama file tanpa path traversal
            $file = 'pages/' . $page . '.php';

            if (file_exists($file)) {
                @include($file);
            } else {
                echo "Halaman tidak ditemukan.";
            }
        } else {
            @include('pages/dasboard.php'); // Halaman default
        }
        ?>
        <!-- Footer Start -->
        <?php @include('footer.php'); ?>
</body>

</html>