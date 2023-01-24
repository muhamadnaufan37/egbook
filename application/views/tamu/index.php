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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel <?php echo $page_title ?></h3>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama Tamu</th>
                            <th>Jenis Identitas</th>
                            <th>Nomor Identitas</th>
                            <th>Keperluan Tamu</th>
                            <th>Tanggal Dibuat</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($alltamu as $user) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $user['nama']; ?></td>
                                <td><?= $user['jenis_identitas']; ?></td>
                                <td><?= $user['nomor_identitas']; ?></td>
                                <td><?= $user['keperluan']; ?></td>
                                <td><?= $user['created_at']; ?></td>
                                <td>
                                    <a type="button" href="<?= base_url('petugas/edit_tamu/?id_tamu='.$user['id_tamu']) ?>" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span></a>
                                    <a type="button" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('petugas/delete_tamu/' . $user['id_tamu']) ?>" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama Tamu</th>
                            <th>Jenis Identitas</th>
                            <th>Nomor Identitas</th>
                            <th>Keperluan Tamu</th>
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