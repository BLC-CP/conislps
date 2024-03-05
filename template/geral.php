<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php

            $id = $_GET['id'];

            $query = mq("SELECT * FROM tb_aktividade WHERE id_kat_aktividade='$id'");
            $no = 1;
            $data = mfa($query)

            ?>

            <h3><?= $data['nrn_aktividade']; ?></h3>
            <hr>
            <img src="admin/imgs/<?= $data['images'] ?>" alt="" width="100%">
            <p class="mt-2 text-justify"><?= $data['obs_aktividade']; ?></p>

        </div>


    </div>
</div>