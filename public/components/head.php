<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../../src/img/icon.png">
    <?=isset($css) ? "<link rel='stylesheet' href='../../src/css/$css.css'>" : ''?>
    <title>Sistema Laricas - <?=$title?></title>
</head>
<body>
<nav>
    <div>
        <img src="../../src/img/icon.png" alt="" width="50" heigth="50">
        <span>Laricas<br>Lanches</span>
    </div>
    <ul>
        <li><a href="home.php" class="<?= $title == 'Início' ? 'selecionado' : '' ?>">Início</a></li>
        <li><a href="caixa.php" class="<?= $title == 'Caixa' ? 'selecionado' : '' ?>">Caixa</a></li>
    </ul>
</nav>
<main>