<?php
// Titre, Menu, Boutons
require_once __DIR__ . '/lang.php';
require_once __DIR__ . '/db.php';
$autre_langue = ($lang == 'fr') ? 'en' : 'fr';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= t('titre_site') ?></title>
    <link rel="stylesheet" href="css/style.css">
    <?= $head_sup ?? '' ?>
    <script src="js/script.js"></script>
</head>
<body>
<header>
    <div class="barre">
        <h1>MASO</h1>
        <button id="bouton-menu" type="button" aria-label="<?= t('bouton_menu') ?>">&#9776;</button>
    </div>
    <!-- mode mobile -->
    <div id="tiroir">
        <nav>
            <a href="index.php"><?= t('menu_accueil') ?></a>
            <a href="missions.php"><?= t('menu_missions') ?></a>
            <a href="systemes.php"><?= t('menu_systemes') ?></a>
            <a href="carte.php"><?= t('menu_carte') ?></a>
        </nav>
        <div class="boutons">
            <a href="?lang=<?= $autre_langue ?>" class="bouton"><?= t('bouton_lang') ?></a>
            <button id="bouton-theme" type="button"><?= t('bouton_theme') ?></button>
            <button id="bouton-mode" type="button"><?= t('bouton_mode') ?></button>
        </div>
    </div>
</header>
<main>
