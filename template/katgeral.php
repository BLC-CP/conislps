<div class="container">

    <?php
    $id = $_GET['id'];
    $query = mq("SELECT * FROM tb_aktividade WHERE id_kat_aktividade='$id'");
    $no = 1;
    while ($data = mfa($query)) {

    ?>

        <div class="row">
            <div class="col-md-6">

                <h3><?= $data['nrn_aktividade']; ?></h3>
                <hr>
                <img src="admin/imgs/<?= $data['images'] ?>" alt="" width="100%">


            </div>

            <div class="col-md-6">
                <p><?= $data['obs_aktividade']; ?> </p>
            </div>
        </div>
    <?php }; ?>
</div>