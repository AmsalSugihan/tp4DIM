<!-- Main Sidebar Container -->
<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo '../'.$_SESSION['bagian_name'].'/index.php' ?>" class="brand-link">
        <img src="<?php echo '../assets/AdminLTE/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Thesisku</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?php echo '../assets/AdminLTE/dist/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['nama'] ?></a>
        </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <?php if($_SESSION['bagian'] == '9'){?>
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                        Home
                        <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                        Pesan Barang
                        <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                        Barang Baru
                        <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                <?php } ?>
            </li>
            <!-- 
            <li class="nav-header">LABELS</li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Important</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Warning</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Informational</p>
            </a>
            </li> -->
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
        
    </div>
    <div class="sidebar-custom">
        <!-- <a href="<?php echo 'auth/changePassword'; ?>" title="Ubah Kata Sandi" class="btn btn-link"><i class="fas fa-cogs"></i></a> -->
        <a href="<?php echo '../logout.php'; ?>" class="btn btn-danger hide-on-collapse pos-right"><ion-icon name="log-out-outline"></ion-icon> Log out</a>
    </div>
<!-- /.sidebar -->
</aside>