<div class="container-fluid mb-4">
    <h2>Galery</h2>
    <hr>
    <div class="row">


        <?php
        $query = mq("SELECT * FROM tb_aktividade");
        while ($data = mfa($query)) {

        ?>

            <div class="col-md-4">
                <img src="admin/imgs/<?= $data['images'] ?>" width="100%" />
            </div>

        <?php }; ?>

    </div>
</div>