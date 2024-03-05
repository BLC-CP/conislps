<div class="container-fluid mt-4">
    <h2>INFORMASAUN</h2>
    <div class="row">


        <?php
        $query = mq("SELECT * FROM tb_aktividade , tb_kat_aktividade WHERE tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade");
        while ($data = mfa($query)) {

        ?>

            <div class="col-md-4">
                <img src="admin/imgs/<?= $data['images'] ?>" width="100%" />
                <div class="ohk">
                    <a href="#" class="btn btn-info btn-sm my-2"><?= $data['data_publika']; ?></a>
                    <a href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>" class="btn btn-success btn-sm my-2"><?= $data['nrn_kat_aktividade']; ?></a>
                </div>
                <h4><a href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>" class="btn btn-success btn-sm my-2"><?= $data['nrn_aktividade']; ?></a></h4>
            </div>

        <?php }; ?>

    </div>
</div>