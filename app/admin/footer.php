<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a href="https://htmlcodex.com">HTML Codex</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/admin/lib/chart/chart.min.js"></script>
<script src="../../assets/admin/lib/easing/easing.min.js"></script>
<script src="../../assets/admin/lib/waypoints/waypoints.min.js"></script>
<script src="../../assets/admin/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../assets/admin/lib/tempusdominus/js/moment.min.js"></script>
<script src="../../assets/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../../assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="../../assets/admin/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example1');
    new DataTable('#example2');
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

</body>