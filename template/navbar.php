<div class="container">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a href="#" class="navbar-brand">MENU</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto">
                <a href="?page=home" class="nav-item nav-link">Baranda</a>
                <a href="?page=profile" class="nav-item nav-link">Profile</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasaun</a>
                    <div class="dropdown-menu">
                        <?php

                        $query = mq("SELECT * FROM tb_kat_aktividade");
                        $no = 1;
                        while ($data = mfa($query)) {

                        ?>
                            <a href="?page=katgeral&id=<?= $data['id_kat_aktividade']; ?>" class="dropdown-item"><?= $data['nrn_kat_aktividade']; ?></a>
                        <?php }; ?>
                    </div>
                </div>
                <a href="?page=galery" class="nav-item nav-link">Galery</a>
                <a href="?page=kontaktu" class="nav-item nav-link">Kontaktu</a>
            </div>
            <div class="social ml-auto">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>
</div>