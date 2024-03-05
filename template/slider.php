<div class="container-fluid">
    <div class="row">

        <div class="col-md-6 tn-left">
            <div class="row tn-slider">
                <?php

                $query = mq("SELECT * FROM tb_aktividade, tb_kat_aktividade WHERE tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade ORDER BY id_aktividade DESC LIMIT 4");
                $no = 1;
                while ($data = mfa($query)) {

                ?>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="admin/imgs/<?= $data['images'] ?>" width="100%" />
                            <div class="tn-title">

                                <a href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>" class="btn btn-warning"><small>Data: <?= $data['data_publika'] ?> & <?= $data['nrn_kat_aktividade']; ?></small></a>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>



        <div class="col-md-6 tn-right">
            <div class="row">
                <?php

                $query = mq("SELECT * FROM tb_aktividade, tb_kat_aktividade WHERE tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade LIMIT 4");
                $no = 1;
                while ($data = mfa($query)) {

                ?>
                    <div class="col-md-5 m-2">
                        <div class="tn-img">
                            <img src="admin/imgs/<?= $data['images'] ?>" width="100%" />
                            <div class="tn-title">
                                <a href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>">Data: <?= $data['data_publika'] ?> <small><?= $data['nrn_kat_aktividade']; ?> </small></a>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>
</div>