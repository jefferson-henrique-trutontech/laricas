<?php
    $css = 'inicio';
    $title = 'Início';
    include_once '../components/head.php';
?>

<div id="pedidos">
    <h2>Pedidos</h2>
    <ul>
        <li id="qtd_andamento">
            <span class="material-symbols-outlined">progress_activity</span>
            <span>0</span>
        </li>
        <li id="qtd_concluido">
            <span class="material-symbols-outlined">check_circle</span>
            <span>0</span>
        </li>
        <li id="qtd_cancelado">
            <span class="material-symbols-outlined">cancel</span>
            <span>0</span>
        </li>
    </ul>
</div>

<?php
    include_once '../components/footer.php';
?>