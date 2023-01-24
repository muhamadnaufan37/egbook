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
                            <h3 class="card-title"><?php echo $page_title ?></h3>
                        </div>

                        <form method="post" action="<?php echo base_url('petugas/add_akun'); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="nip">Nomor Induk Pegawai (NIP)</label>
                                    <input type="number" class="form-control" id="nip" name="nip" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Level Akun Users</label>
                                    <select class="form-control" name="role_id" id="role_id" required>
                                        <option value="" selected="" disabled="">--- PILIH ---</option>
                                        <option value="1">petugas</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Akun Users</label>
                                    <select class="form-control" name="is_active" id="is_active" required>
                                        <option value="" selected="" disabled="">--- PILIH ---</option>
                                        <option value="1">Akun Aktif</option>
                                        <option value="0">Akun Nonaktif</option>
                                    </select>
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