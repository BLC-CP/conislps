<?php

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'profile') {
        include 'template/profile.php';
    }

    if ($_GET['page'] == 'atividade') {
        include 'template/geral.php';
    }

    if ($_GET['page'] == 'katgeral') {
        include 'template/katgeral.php';
    }

    if ($_GET['page'] == 'kontaktu') {
        include 'template/kontaktus.php';
    }

    if ($_GET['page'] == 'galery') {
        include 'template/galery.php';
    }

    if ($_GET['page'] == 'home') {
        include 'template/slider.php';
    }
} else {
    include 'template/slider.php';
}
