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

                <a href="<?php echo site_url('admin/index/') ?>"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Silakan masukkan nama Anda" value="<?php echo $data->nama ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nama') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input class="form-control <?php echo form_error('jabatan') ? 'is-invalid' : '' ?>" type="text" name="jabatan" placeholder="Silakan masukkan jabatan Anda?" value="<?php echo $data->jabatan ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('jabatan') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ttl">TTL</label>
                        <input class="form-control<?php echo form_error('ttl') ? 'is-invalid' : '' ?>" type="date" name="ttl" value="<?php echo $data->ttl ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('ttl') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Silakan tulis alamat Anda..."><?php echo $data->alamat ?></textarea>
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