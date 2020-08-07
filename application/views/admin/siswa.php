<div class="row">
    <div class="col-lg-12">

        <!--breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data Siswa</li>
        </ol>
    </div>
</div>

<div class="container">
    <center>
        <h3>Data Siswa</h3>
        <br>
    </center>

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Siswa<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Siswa</button>
    <div class="row">
        <div class="col-lg-12">
            <div class="my-3">
                <div class="table-responsive mx-auto">
                    <table class="table table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th colspan="2">Aksi</th>
                        </tr>

                        <?php
                        $no = 1;
                        foreach ($siswa as $sw) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $sw->nis ?></td>
                                <td><?php echo $sw->nama ?></td>
                                <td><?php echo $sw->kelas ?></td>
                                <td><?php echo $sw->jurusan ?></td>
                                <td><?php echo $sw->ttl ?></td>
                                <td><?php echo $sw->alamat ?></td>
                                <td onclick="javascript: return confirm('Anda yakin ingin menghapus')"><?php echo anchor('siswa/hapus/' . $sw->nis, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?>
                                </td>
                                <td>
                                    <?php echo anchor('siswa/edit/' . $sw->nis, '<div class="btn btn-primary" class="btn-sm"><i class="fa fa-edit"></i></div>') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <!--Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Siswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php echo form_open_multipart('siswa/tambah_aksi'); ?>
                        <div class="form-grup">
                            <label>NIS</label>
                            <input type="text" name="nis" class="form-control">
                        </div>

                        <div class="form-grup">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas">
                                <option>X</option>
                                <option>XI</option>
                                <option>XII</option>
                            </select>
                        </div>

                        <div class="form-grup">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>

                        <div class="form-grup">
                            <label>TTL</label>
                            <input type="date" name="ttl" class="form-control">
                        </div>

                        <div class="form-grup">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <br>

                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>