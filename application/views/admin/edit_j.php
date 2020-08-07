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

                <a href="<?php echo site_url('admin/jurusan/') ?>"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo $jurusan->id ?>" />

                    <div class="form-group">
                        <label for="jurusan">Nama Jurusan</label>
                        <input class="form-control <?php echo form_error('jurusan') ? 'is-invalid' : '' ?>" type="text" name="jurusan" placeholder="Silakan masukkan nama jurusan" value="<?php echo $jurusan->jurusan ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('jurusan') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nmkakom">Nama Kepala Kompetensi</label>
                        <input class="form-control <?php echo form_error('nmkakom') ? 'is-invalid' : '' ?>" type="text" name="nmkakom" placeholder="Silakan masukkan nama Kepala Kompetensi" value="<?php echo $jurusan->nmkakom ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nmkakom') ?>
                        </div>
                    </div>

                    <input class="btn btn-success" type="submit" name="btn" value="Save" />
                </form>

            </div>

            <div class="card-footer small text-muted">

            </div>
    </section>
</div>