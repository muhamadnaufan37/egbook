<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/template/dist/img/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['nama']; ?></a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">CORE</li>
                <li class="nav-item">
                    <?php if ($user['role_id'] == '1') { ?>
                        <a href="<?php echo base_url('petugas') ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    <?php } ?>
                    <?php if ($user['role_id'] == '2') { ?>
                        <a href="<?php echo base_url('admin') ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    <?php } ?>
                </li>
                <br>
                <?php if ($user['role_id'] == '1') { ?>
                    <li class="nav-header">USER MANAGEMENT</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('petugas/akun') ?>" class="nav-link">
                            <i class="nav-icon fas fa-fw fa-user"></i>
                            <p>
                                Pengguna
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($user['role_id'] == '1') { ?>
                    <li class="nav-header">ADDONS</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('petugas/tamu') ?>" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Kelola Tamu
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($user['role_id'] == '2') { ?>
                    <li class="nav-header">ADDONS</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('admin/tamu') ?>" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Kelola Tamu
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <br>
                <li class="nav-item">
                    <a href="<?php echo base_url('landing/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                        <p>
                            Logout
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>