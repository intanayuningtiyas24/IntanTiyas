<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <h5>role: <?= $role['role'] ?></h5>
    <div class="row">
        <div class="col-lg-6">

            <!-- pesan error -->
            <?= $this->session->flashdata('message'); ?>

            <!-- akhir pesan error -->
            <h5>role: <?= $role['role'] ?></h5>

            <!-- tombol tambah -->
            <a href="" class="btn btn-primary mb-3" class="btn btn-primry" data-toggle="modal" data-target="#Addnewrole">Add New Role</a>

            <!-- Tabel -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <input type="checkbox" class="form-check-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id'] ?>" data-menu=<?= $m['id'] ?>"></ input>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- akhir table -->

        </div>
    </div>