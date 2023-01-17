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

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Akun User</h3>
                        </div>


                        <form method="post" action="<?php echo base_url('superadmin/update_tamu/?id_tamu=' . $edit['id_tamu']); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_tamu">Identitan Buku tamu</label>
                                    <input type="number" class="form-control" id="id_tamu" name="id_tamu" value="<?= $edit['id_tamu']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $edit['nama']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_identitas">nomor_identitas</label>
                                    <input type="number" class="form-control" id="nomor_identitas" name="nomor_identitas" value="<?= $edit['nomor_identitas']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Level Akun Users</label>
                                    <select class="form-control" name="jenis_identitas" id="jenis_identitas" required>
                                        <option value="" selected="" disabled="">--- PILIH ---</option>
                                        <option <?php if ($edit['jenis_identitas'] == "KARTU PELAJAR") {
                                                    echo 'selected';
                                                } ?> value="KARTU PELAJAR">KARTU PELAJAR</option>
                                        <option <?php if ($edit['jenis_identitas'] == "SIM") {
                                                    echo 'selected';
                                                } ?> value="SIM">SIM</option>
                                        <option <?php if ($edit['jenis_identitas'] == "E-KTP") {
                                                    echo 'selected';
                                                } ?> value="E-KTP">E-KTP</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="keperluan">Keperluan</label>
                                    <select class="form-control" name="keperluan" id="keperluan" required>
                                        <option value="" selected="" disabled="">--- PILIH ---</option>
                                        <option <?php if ($edit['keperluan'] == "Magang") {
                                                    echo 'selected';
                                                } ?> value="Magang">Magang</option>
                                        <option <?php if ($edit['keperluan'] == "Meminjam buku") {
                                                    echo 'selected';
                                                } ?> value="Meminjam buku">Meminjam buku</option>
                                        <option <?php if ($edit['keperluan'] == "Mengembalikan buku") {
                                                    echo 'selected';
                                                } ?> value="Mengembalikan buku">Mengembalikan buku</option>
                                        <option <?php if ($edit['keperluan'] == "Membaca") {
                                                    echo 'selected';
                                                } ?> value="Membaca">Membaca</option>
                                        <option <?php if ($edit['keperluan'] == "Kerja kelompok") {
                                                    echo 'selected';
                                                } ?> value="Kerja kelompok">Kerja kelompok</option>
                                        <option <?php if ($edit['keperluan'] == "Mengerjakan Tugas") {
                                                    echo 'selected';
                                                } ?> value="Mengerjakan Tugas">Mengerjakan Tugas</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="created_at">Tanggal Dibuat</label>
                                    <input type="text" class="form-control" id="created_at" name="created_at" value="<?= $edit['created_at']; ?>" readonly>
                                </div>

                                <div class="card-footer">
                                    <a type="button" href="<?php echo base_url('superadmin/tamu') ?>" class="btn btn-danger">Kembali</a>
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