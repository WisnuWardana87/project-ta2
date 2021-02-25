<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" action="<?= site_url('PrestasiFIP/save_register_prestasi'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Jenis Prestasi</label>
                                                <select class="form-control" name="id_jenis">
                                                    <?php
                                                    foreach ($nama_jenis as $val) { ?>
                                                        <option value="<?= $val['id_jenis']; ?>"><?= $val['nama_jenis']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Tingkat Prestasi</label>
                                                <select class="form-control" name="id_tingkat">
                                                    <?php
                                                    foreach ($nama_tingkat as $val) { ?>
                                                        <option value="<?= $val['id_tingkat']; ?>"><?= $val['nama_tingkat']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Jenis Juara</label>
                                                <select class="form-control" name="id_jenis_juara">
                                                    <?php
                                                    foreach ($nama_jenis_juara as $val) { ?>
                                                        <option value="<?= $val['id_jenis_juara']; ?>"><?= $val['nama_jenis_juara']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Mulai</label>
                                                <input type="date" name="tgl_mulai" class="form-control" id="tgl_mulai" placeholder="Masukan Tanggal Mulai">
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Selesai</label>
                                                <input type="date" name="tgl_selesai" class="form-control" id="tgl_selesai" placeholder="Masukan Tanggal Selesai">
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Kegiatan</label>
                                                <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" placeholder="Masukan Nama Kegiatan">
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kota Kegiatan</label>
                                                <input type="text" name="kota" class="form-control" id="kota" placeholder="Masukan Kota Kegiatan">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jumlah Dana</label>
                                                <input type="text" name="jml_dana" class="form-control" id="jml_dana" placeholder="Masukan Jumlah Dana Kegiatan">
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Nama Mahasiswa</label>
                                                <select class="form-control" name="name">
                                                    <?php
                                                    foreach ($name as $val) { ?>
                                                        <option value="<?= $val['name']; ?>"><?= $val['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Nama Fakultas</label>
                                                <select class="form-control" name="nama_fakultas">
                                                    <?php
                                                    foreach ($nama_fakultas as $val) { ?>
                                                        <option value="<?= $val['nama_fakultas']; ?>"><?= $val['nama_fakultas']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Keterangan Prestasi</label>
                                                <input type="text" name="ket_prestasi" class="form-control" id="ket_prestasi" placeholder="Masukan Keterangan Prestasi">
                                            </div>
                                        </div>



                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Masukan Foto</label>

                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file_prestasi" name="file_prestasi">
                                                    <label class="custom-file-label" for="file_prestasi">Choose file</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Nama Pembimbing</label>
                                                <select class="form-control" name="id_pembimbing">
                                                    <?php
                                                    foreach ($nama_pembimbing as $val) { ?>
                                                        <option value="<?= $val['id_pembimbing']; ?>"><?= $val['nama_pembimbing']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tahun</label>
                                                <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Masukan Tahun Kegiatan">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- /.card -->