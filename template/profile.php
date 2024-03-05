<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/logo.jpg" width="100%" class="mb-2">
        </div>
        <?php
        $query = mq("SELECT * FROM tb_profile");
        while ($data = mfa($query)) {

        ?>
            <div class="col-md-6 mt-2">
                <h3 class="display-6"><?= $data['nrn_profile'] ?></h3>
                <hr>
                <p class="text-justify"><?= $data['content_profile'] ?></p>
            </div>
        <?php } ?>
    </div>
</div>