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

                <a href="<?php echo site_url('admin/guru/') ?>"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input class="form-control <?php echo form_error('nip') ? 'is-invalid' : '' ?>" type="text" name="nip" placeholder="Silakan masukkan NIP Anda" value="<?php echo $guru->nip ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nip') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nmguru">Nama Guru</label>
                        <input class="form-control <?php echo form_error('nmguru') ? 'is-invalid' : '' ?>" type="text" name="nmguru" placeholder="Siapa nama Anda?" value="<?php echo $guru->nmguru ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nmguru') ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="mapel">Mata Pelajaran</label>
                        <input class="form-control<?php echo form_error('mapel') ? 'is-invalid' : '' ?>" type="text" name="mapel" value="<?php echo $guru->mapel ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('mapel') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ttl">TTL</label>
                        <input class="form-control<?php echo form_error('ttl') ? 'is-invalid' : '' ?>" type="date" name="ttl" value="<?php echo $guru->ttl ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('ttl') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Silakan tulis alamat Anda..."><?php echo $guru->alamat ?></textarea>
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