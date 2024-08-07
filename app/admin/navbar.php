<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
<div class="sidebar pe-4 pb-3">
<nav class="navbar bg-light navbar-light">
    <a href="index.php?page=dasboard" class="navbar-brand mx-4 mb-3">
        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN</h3>
    </a>
    <div class="d-flex align-items-center ms-4 mb-4">
        <div class="position-relative">
            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
        </div>
        <div class="ms-3">
            <h6 class="mb-0">Jhon Doe</h6>
            <span>Admin</span>
        </div>
    </div>
    <div class="navbar-nav w-100">
        <a href="index.php?page=dasboard" class="nav-item nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'dasboard' ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle <?php echo isset($_GET['page']) && ($_GET['page'] == 'student' || $_GET['page'] == 'student_activities' || $_GET['page'] == 'student_classes') ? 'active' : ''; ?>" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i>Data Students</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="index.php?page=student" class="dropdown-item <?php echo isset($_GET['page']) && $_GET['page'] == 'student' ? 'active' : ''; ?>">Students</a>
                <a href="index.php?page=student_activities" class="dropdown-item <?php echo isset($_GET['page']) && $_GET['page'] == 'student_activities' ? 'active' : ''; ?>">Student Activities</a>
                <a href="index.php?page=student_classes" class="dropdown-item <?php echo isset($_GET['page']) && $_GET['page'] == 'student_classes' ? 'active' : ''; ?>">Student Classes</a>
            </div>
        </div>
        <a href="index.php?page=teacher" class="nav-item nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'teacher' ? 'active' : ''; ?>"><i class="bi bi-person-lines-fill"></i>Teachers</a>
        <a href="index.php?page=activities" class="nav-item nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'activities' ? 'active' : ''; ?>"><i class="bi bi-calendar-check-fill"></i>Activities</a>
        <a href="index.php?page=classes" class="nav-item nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'classes' ? 'active' : ''; ?>"><i class="bi bi-person-square"></i>Classes</a>
    </div>
</nav>


</div>
<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control border-0" type="search" placeholder="Search">
        </form>

        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Message</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all message</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bell me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Notificatin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Profile updated</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">New user added</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Password changed</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all notifications</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">John Doe</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">My Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->