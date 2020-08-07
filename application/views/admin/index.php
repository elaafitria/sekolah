<div class="row">
    <div class="col-lg-12">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data Sekolah</li>
        </ol>
    </div>
</div>

<div class="container">
    <center>
        <h3>Data Sekolah</h3>
    </center>
    <br>

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data destinasi<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Sekolah</button>
    <div class="row">
        <div class="col-lg-12">
            <div class="my-3">
                <div class="table-responsive mx-auto">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th colspan="2">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        foreach ($data as $dt) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $dt->nama ?></td>
                                <td><?php echo $dt->jabatan ?></td>
                                <td><?php echo $dt->ttl ?></td>
                                <td><?php echo $dt->alamat ?></td>
                                <td onclick="javascript: return confirm('Anda yakin ingin menghapus')"><?php echo anchor('data/hapus/' . $dt->id, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?>
                                </td>
                                <td>
                                    <?php echo anchor('data/edit_d/' . $dt->id, '<div class="btn btn-primary" class="btn-sm"><i class="fa fa-edit"></i></div>') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Sekolah</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php echo form_open_multipart('data/tambah_aksi'); ?>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control">
                        </div>

                        <div class="form-grup">
                            <label>TTL</label>
                            <input type="date" name="ttl" class="form-control">
                        </div>

                        <div class="form-grup">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>

                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>