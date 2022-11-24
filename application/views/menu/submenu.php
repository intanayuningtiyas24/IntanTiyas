<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg">

            <!-- pesan error -->
            <?php if (validation_errors()) : ?>
                <div class="alert alert-success" role="alert">
                    <?php validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>

            <!-- akhir pesan error -->

            <!-- tombol tambah -->
            <a href="" class="btn btn-primary mb-3" class="btn btn primary" data-toggle="modal" data-target="#submenuModal">Add Sub Menu</a>
            <!-- Tabel -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td><?= $sm['icon']; ?></td>
                            <td><?= $sm['is_active']; ?></td>
                            <td>
                                <a href="" class="badge badge-success" button-toggle="modal" data-target="#examplesubModal<?= $sm['id']; ?>">Edit</a>
                                <a href="<?= base_url('menu/hapus/') . $sm['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin akan dihapus?');">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- akhir table -->

        </div>
    </div>

</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->


<!-- Modal -->

<div class="modal fade" id="submenuModal" tabindex="-1" aria-labelledby="submenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submenuModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="" class="value">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?> "><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-chech-input" type="checkbox" value="1" name="is_active" id="is_active" aria-label="Checkbox for following text input" checked>
                            <label for="is_active" class="form_check_label">Active?</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal edit -->
<?php foreach ($subMenu as $sm) : ?>

    <div class="modal fade" id="examplesubModal<?= $sm['id']; ?>" tabindex="-1" aria-labelledby="examplesubModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examplesubModalLabel">Edit submenu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Clode"></button>
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('menu/submenuedit'); ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id" value="<?= $sm['id'] ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title" value="<?= $sm['title'] ?>">
                        </div>
                        <div class="form-group">
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="" class="value">Select Menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?> "><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url'] ?> " placeholder=" Submenu url">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon'] ?>" placeholder=" Submenu icon">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-chech-input" type="checkbox" value="1" name="is_active" id="is_active" aria-label="Checkbox for following text input" checked>
                                <label for="is_active" class="form_check_label">Active?</label>
                            </div>
                        </div>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">closse</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>