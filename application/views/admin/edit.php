<div class="content-wrapper">
    <section class="content">
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <!-- Card  -->
        <div class="card mb-3">
            <div class="card-header">

                <a href="<?php echo site_url('admin/siswa/') ?>"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input class="form-control <?php echo form_error('nis') ? 'is-invalid' : '' ?>" type="text" name="nis" placeholder="Silakan masukkan NIS Anda" value="<?php echo $siswa->nis ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nis') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Siapa nama Anda?" value="<?php echo $siswa->nama ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nama') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" type="text" name="kelas" placeholder="Kelas berapa Anda?" value="<?php echo $siswa->kelas ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('kelas') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input class="form-control <?php echo form_error('jurusan') ? 'is-invalid' : '' ?>" type="text" name="jurusan" placeholder="Siapa nama Anda?" value="<?php echo $siswa->jurusan ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('jurusan') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ttl">TTL</label>
                        <input class="form-control<?php echo form_error('ttl') ? 'is-invalid' : '' ?>" type="date" name="ttl" value="<?php echo $siswa->ttl ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('ttl') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Silakan tulis alamat Anda..."><?php echo $siswa->alamat ?></textarea>
                        <div class="invalid-feedback">
                            <?php echo form_error('alamat') ?>
                        </div>
                    </div>

                    <input class="btn btn-success" type="submit" name="btn" value="Save" />
                </form>

            </div>

            <div class="card-footer small text-muted">

            </div>
    </section>
</div>