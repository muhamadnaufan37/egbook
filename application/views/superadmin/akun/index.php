<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $page_title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('superadmin') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $page_title ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel <?php echo $page_title ?></h3>
                <a style="float: right;" href="<?php echo base_url('superadmin/add_akun') ?>" class="btn btn-sm btn-success">Tambah data</a>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Level Akun</th>
                            <th>Status Akun</th>
                            <th>Tanggal Dibuat</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($alluser as $user) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $user['nama']; ?></td>
                                <td>
                                    <span>
                                        <?php if ($user['role_id'] == '1') { ?>
                                            <div type="button" class="btn btn-block btn-danger btn-sm disabled">Superadmin</div>
                                        <?php } ?>
                                    </span>
                                    <span>
                                        <?php if ($user['role_id'] == '2') { ?>
                                            <div type="button" class="btn btn-block btn-warning btn-sm disabled">Admin Koordinator</div>
                                        <?php } ?>
                                    </span>
                                    <span>
                                        <?php if ($user['role_id'] == '3') { ?>
                                            <div type="button" class="btn btn-block btn-success btn-sm disabled">Masyarakat</div>
                                        <?php } ?>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <?php if ($user['is_active'] == '0') { ?>
                                            <div type="button" class="btn btn-block btn-secondary btn-sm disabled">Akun Tidak Aktif</div>
                                        <?php } ?>
                                    </span>
                                    <span>
                                        <?php if ($user['is_active'] == '1') { ?>
                                            <div type="button" class="btn btn-block btn-outline-success btn-sm disabled">Akun Aktif</div>
                                        <?php } ?>
                                    </span>
                                </td>
                                <td><?= $user['created_at']; ?></td>
                                <td>
                                    <a type="button" href="<?= base_url('superadmin/edit_akun/?id='.$user['id']) ?>" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span></a>
                                    <a type="button" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('superadmin/delete_akun/' . $user['id']) ?>" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Level Akun</th>
                            <th>Status Akun</th>
                            <th>Tanggal Dibuat</th>
                            <th>Option</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>


</div>

</section>

</div>