<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                <div class="form-group">
                    <label for="menu">Submenu</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $title['title']; ?>">
                    <?= form_error('submenu', '<small class="text-danger">', '</small>'); ?>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control" value="<?= $menu_id['menu_id']; ?>">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('submenu', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="url" name="url" value="<?= $url['url']; ?>">
                            <?= form_error('submenu', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" id="icon" name="icon" value="<?= $icon['icon']; ?>">
                                <?= form_error('submenu', '<small class="text-danger">', '</small>'); ?>
                            </div>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-fw fa-save"></i>
            </span>
            <span class="text">Simpan</span>
        </button>
    </div>
    </form>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->