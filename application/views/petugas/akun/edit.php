<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $page_title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('petugas') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $page_title ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Akun User</h3>
                            <a style="float: right;">
                                <span>
                                    <?php if ($edit['role_id'] == '1') { ?>
                                        <div type="button" class="btn btn-block btn-danger btn-sm disabled">petugas</div>
                                    <?php } ?>
                                    <?php if ($edit['role_id'] == '2') { ?>
                                        <div type="button" class="btn btn-block btn-warning btn-sm disabled">Admin Koordinator</div>
                                    <?php } ?>
                                    <?php if ($edit['role_id'] == '3') { ?>
                                        <div type="button" class="btn btn-block btn-secondary btn-sm disabled">Pengurus</div>
                                    <?php } ?>
                                </span>
                            </a>
                        </div>


                        <form method="post" action="<?php echo base_url('petugas/update_akun/?id=' . $edit['id']); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">Identitan Akun Users</label>
                                    <input type="number" class="form-control" id="id" name="id" value="<?= $edit['id']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $edit['nama']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $edit['email']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nip">Nomor Induk Pegawai (NIP)</label>
                                    <input type="number" class="form-control" id="nip" name="nip" value="<?= $edit['nip']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="<?= $edit['password']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Level Akun Users</label>
                                    <select class="form-control" name="role_id" id="role_id">
                                        <option value="" selected="" disabled="">--- PILIH ---</option>
                                        <option <?php if ($edit['role_id'] == "1") {
                                                    echo 'selected';
                                                } ?> value="1">petugas</option>
                                        <option <?php if ($edit['role_id'] == "2") {
                                                    echo 'selected';
                                                } ?> value="2">Admin Koordinator</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Akun Users</label>
                                    <select class="form-control" name="is_active" id="is_active">
                                        <option value="" selected="" disabled="">--- PILIH ---</option>
                                        <option <?php if ($edit['is_active'] == "1") {
                                                    echo 'selected';
                                                } ?> value="1">Akun Aktif</option>
                                        <option <?php if ($edit['is_active'] == "0") {
                                                    echo 'selected';
                                                } ?> value="0">Akun Nonaktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="created_at">Tanggal Dibuat</label>
                                    <input type="text" class="form-control" id="created_at" name="created_at" value="<?= $edit['created_at']; ?>" disabled>
                                </div>

                                <div class="card-footer">
                                    <a type="button" href="<?php echo base_url('petugas/akun') ?>" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

</section>

</div>