<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>

    </div>

    <div class="card" style="width: 65%">
        <div class=" card-body">


            <form method="post" action="<?= base_url('admin/potonganGaji/updateDataAksi') ?>">
                <?php foreach ($pot_gaji as $p) : ?>
                    <div class="form-group">
                        <label for="">Jenis Potongan</label>
                        <input type="hidden" name="id" class="form-control" value="<?= $p->id ?>">
                        <input type="text" name="potongan" class="form-control" value="<?= $p->potongan ?>">
                        <?= form_error('potongan') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Jumlah Potongan</label>
                        <input type="number" name="jml_potongan" class="form-control" value="<?= $p->jml_potongan ?>">
                        <?= form_error('jml_potongan') ?>
                    </div>
                <?php endforeach; ?>
                <button type="submit" class="btn btn-primary">Update</button>

            </form>

        </div>
    </div>

</div>